document.querySelectorAll(".slider-action").forEach((input) => {
  // 1. FUNGSI PINTAR: Cek Warna Slider ini apa?
  function getSliderColor(parent) {
    let fill = parent.querySelector(".slider-fill");

    // Cek kelas warna di elemen fill
    if (fill.classList.contains("bg-warning")) {
      return "var(--bs-warning)"; // Kembalikan Warna Kuning
    } else if (fill.classList.contains("bg-success")) {
      return "var(--bs-success)"; // Kembalikan Warna Hijau
    } else {
      return "var(--bs-primary)"; // Default Biru
    }
  }

  // 2. EVENT SAAT DIGESER (INPUT)
  input.addEventListener("input", function () {
    let value = this.value;
    let parent = this.parentElement;
    let fill = parent.querySelector(".slider-fill");
    let thumb = parent.querySelector(".slider-thumb");
    let text = parent.querySelector(".slider-text");

    // Ambil warna yang sesuai (Biru/Kuning/Hijau)
    let dynamicColor = getSliderColor(parent);

    // Gerakkan Slider & Thumb
    fill.style.width = value + "%";
    thumb.style.left = `calc(${value}% - ${value * 0.4}px)`;

    // UBAH GRADASI TEKS SESUAI WARNA ASLINYA
    text.style.backgroundImage = `linear-gradient(to right, #ffffff ${value}%, ${dynamicColor} ${value}%)`;
  });

  // 3. EVENT SAAT DILEPAS (CHANGE)
  input.addEventListener("change", function () {
    let parent = this.parentElement;
    let dynamicColor = getSliderColor(parent); // Ambil warna lagi untuk reset
    let text = parent.querySelector(".slider-text");

    if (this.value < 100) {
      // GAGAL (RESET)
      this.value = 0;
      parent.querySelector(".slider-fill").style.width = "0%";
      parent.querySelector(".slider-thumb").style.left = "2px";

      // Reset warna teks kembali ke warna aslinya (bukan biru semua)
      text.style.backgroundImage = `linear-gradient(to right, #ffffff 0%, ${dynamicColor} 0%)`;
    } else {
      // SUKSES (LOGIKA PHP)
      let konfirmasi = confirm("Yakin untuk melanjutkannya?");
      if (konfirmasi) {
        // Simpan ID transaksi atau logika PHP disini
        // let id = parent.getAttribute('data-id'); (Contoh)
        alert("Status berhasil diupdate!");
        window.location.reload();
      } else {
        // BATALKAN
        this.value = 0;
        parent.querySelector(".slider-fill").style.width = "0%";
        parent.querySelector(".slider-thumb").style.left = "2px";
        text.style.backgroundImage = `linear-gradient(to right, #ffffff 0%, ${dynamicColor} 0%)`;
      }
    }
  });
});
