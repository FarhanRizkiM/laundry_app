// Data Dummy
const servicesData = {
  kiloan: [
    {
      id: 1,
      name: "Cuci Komplit Reguler",
      price: 6000,
      unit: "/ Kg",
      est: "2 Hari",
    },
    {
      id: 2,
      name: "Cuci Komplit Express",
      price: 10000,
      unit: "/ Kg",
      est: "24 Jam",
    },
  ],
  satuan: [
    {
      id: 3,
      name: "Kemeja / Kaos",
      price: 15000,
      unit: "/ Pcs",
      est: "3 Hari",
    },
    {
      id: 4,
      name: "Jaket / Sweater",
      price: 25000,
      unit: "/ Pcs",
      est: "4 Hari",
    },
  ],
  karpet: [
    {
      id: 5,
      name: "Karpet Masjid Tebal",
      price: 15000,
      unit: "/ Meter",
      est: "5 Hari",
    },
  ],
};

// Fungsi Render Tabel (DIPERBARUI)
function renderTable(data) {
  const tbody = document.getElementById("servicesTableBody");
  tbody.innerHTML = "";

  data.forEach((item) => {
    // Format Harga jadi "6.000"
    let formattedPrice = item.price.toLocaleString("id-ID");

    // Kita kirim data ke fungsi openEditModal saat tombol diklik
    // Perhatikan tanda petik (') sangat penting di sini
    const row = `
                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-primary p-1 bg-light-primary rounded-circle"><i class="ti ti-tag"></i></span>
                            <span class="fw-semibold text-dark">${item.name}</span>
                        </div>
                    </td>
                    <td><span class="badge bg-light text-dark border fw-bold">Rp ${formattedPrice} ${item.unit}</span></td>
                    <td><small class="text-muted"><i class="ti ti-clock me-1"></i>${item.est}</small></td>
                    <td class="text-end">
                        
                        <button class="btn btn-sm btn-light-warning text-warning me-1" 
                                onclick="openEditModal('${item.id}', '${item.name}', '${item.price}', '${item.unit}', '${item.est}')">
                            <i class="ti ti-pencil"></i>
                        </button>

                        <button class="btn btn-sm btn-light-danger text-danger"><i class="ti ti-trash"></i></button>
                    </td>
                </tr>
            `;
    tbody.insertAdjacentHTML("beforeend", row);
  });
}

// === FUNGSI BARU: Membuka & Mengisi Modal Edit ===
function openEditModal(id, name, price, unit, est) {
  // 1. Isi form dengan data dari parameter
  document.getElementById("editId").value = id;
  document.getElementById("editNama").value = name;
  document.getElementById("editHarga").value = price; // Angka murni (misal: 6000)
  document.getElementById("editSatuan").value = unit;
  document.getElementById("editEstimasi").value = est;

  // 2. Tampilkan Modal menggunakan Bootstrap API
  var myModal = new bootstrap.Modal(
    document.getElementById("modalEditLayanan")
  );
  myModal.show();
}

// Simulasi Simpan (Hanya Alert)
function saveEdit() {
  const namaBaru = document.getElementById("editNama").value;
  alert("Data berhasil diubah menjadi: " + namaBaru);
  // Di sini nanti logika Backend (AJAX/Fetch) Anda

  // Tutup modal manual jika perlu
  // location.reload();
}

// Fungsi Kategori (Sama seperti sebelumnya)
function showCategory(catId, element) {
  document.querySelectorAll(".category-item").forEach((el) => {
    el.classList.remove("active");
    el.querySelector("h6").classList.remove("text-white");
    el.querySelector("h6").classList.add("text-dark");
    const iconBg = el.querySelector(".rounded-circle");
    iconBg.classList.remove("bg-white", "text-primary");
  });

  element.classList.add("active");
  element.querySelector("h6").classList.remove("text-dark");
  element.querySelector("h6").classList.add("text-white");

  const activeIconBg = element.querySelector(".rounded-circle");
  activeIconBg.classList.remove(
    "bg-light-info",
    "text-info",
    "bg-light-warning",
    "text-warning"
  );
  activeIconBg.classList.add("bg-white", "text-primary");

  const titleMap = {
    kiloan: "Cuci Kiloan",
    satuan: "Cuci Satuan",
    karpet: "Karpet & Bedcover",
  };
  document.getElementById("selectedCategoryTitle").innerText =
    "Daftar Layanan: " + titleMap[catId];

  if (servicesData[catId]) {
    renderTable(servicesData[catId]);
  }
}

// Load default
document.addEventListener("DOMContentLoaded", () => {
  renderTable(servicesData["kiloan"]);
});
