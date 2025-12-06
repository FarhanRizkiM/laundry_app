// Fungsi Ubah Qty lewat Tombol +/-
function ubahQty(btn, changes) {
  // 1. Cari elemen input terdekat dari tombol yang diklik
  let input = btn.parentElement.querySelector("input");

  // 2. Ambil nilai sekarang, ubah jadi angka
  let nilaiLama = parseInt(input.value) || 0;

  // 3. Tambah atau Kurang
  let nilaiBaru = nilaiLama + changes;

  // 4. Validasi: Gak boleh kurang dari 1
  if (nilaiBaru < 1) nilaiBaru = 1;

  // 5. Update tampilan
  input.value = nilaiBaru;

  // (Nanti di sini kita panggil fungsi hitung ulang harga total)
}

// Fungsi Utama: Mengatur Tampilan (Tunai vs QRIS vs Transfer)
function cekMetode() {
  let metode = document.querySelector(
    'input[name="payment_method"]:checked'
  ).value;

  // Sembunyikan Semua Dulu
  document.getElementById("area_tunai").style.display = "none";
  document.getElementById("area_qris").style.display = "none";
  document.getElementById("area_transfer").style.display = "none";

  // Matikan Required (Biar gak error saat submit)
  document.getElementById("uang_input_tampilan").removeAttribute("required");
  document.getElementById("cek_qris").removeAttribute("required");
  document.getElementById("cek_transfer").removeAttribute("required");
  document.getElementById("cek_qris").setAttribute("disabled", "true");
  document.getElementById("cek_transfer").setAttribute("disabled", "true");

  // Tampilkan Sesuai Pilihan
  if (metode === "cash") {
    document.getElementById("area_tunai").style.display = "block";
    document
      .getElementById("uang_input_tampilan")
      .setAttribute("required", "required");
  } else if (metode === "qris") {
    document.getElementById("area_qris").style.display = "block";
    document.getElementById("cek_qris").setAttribute("required", "required");
    document.getElementById("cek_qris").removeAttribute("disabled");
  } else if (metode === "transfer") {
    document.getElementById("area_transfer").style.display = "block";
    document
      .getElementById("cek_transfer")
      .setAttribute("required", "required");
    document.getElementById("cek_transfer").removeAttribute("disabled");
  }
}

// Fungsi Ajaib: Format Rupiah saat ngetik (50000 -> Rp 50.000)
function formatRupiah(input) {
  // 1. Ambil angka saja (buang Rp dan Titik)
  let angka = input.value.replace(/[^,\d]/g, "").toString();

  // 2. Simpan angka murni ke Hidden Input (buat dikirim ke PHP)
  document.getElementById("uang_input_murni").value = angka;

  // 3. Format tampilan jadi Rp ...
  let split = angka.split(",");
  let sisa = split[0].length % 3;
  let rupiah = split[0].substr(0, sisa);
  let ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  if (ribuan) {
    let separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  input.value = "Rp " + rupiah;

  // 4. Hitung Kembalian Real-time
  hitungKembalian(angka);
}

function hitungKembalian(uangBayar) {
  let total = parseInt(document.getElementById("total_belanja").value) || 0;
  let uang = parseInt(uangBayar) || 0;
  let kembalian = uang - total;

  let label = "";
  let alertBox = document.getElementById("box_kembalian");

  if (kembalian >= 0) {
    label = "Rp " + kembalian.toLocaleString("id-ID");
    alertBox.className =
      "alert alert-success d-flex justify-content-between align-items-center mb-0"; // Hijau
  } else {
    label = "Kurang Rp " + Math.abs(kembalian).toLocaleString("id-ID");
    alertBox.className =
      "alert alert-danger d-flex justify-content-between align-items-center mb-0"; // Merah
  }
  document.getElementById("label_kembalian").innerText = label;
}

// Saat Form dikirim, pastikan data aman
function bersihkanAngka() {
  // Tidak perlu logic khusus karena kita sudah punya hidden input 'uang_input_murni'
  return true;
}
