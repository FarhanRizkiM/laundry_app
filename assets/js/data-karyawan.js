function filterTable(category, clickedElement) {
  // 1. UPDATE TAMPILAN KARTU (UI)
  // Reset semua kartu ke tampilan default (abu-abu tipis)
  const allCards = document.querySelectorAll(".filter-card");
  allCards.forEach((card) => {
    card.classList.remove("active");
    card.style.borderLeft = "1px solid #dfe5ef"; // Reset border kiri
    card.style.backgroundColor = "#fff";
  });

  // Highlight kartu yang diklik (Biru dan border tebal di kiri)
  clickedElement.classList.add("active");
  clickedElement.style.borderLeft = "5px solid #5d87ff";
  clickedElement.style.backgroundColor = "#fdfdfd"; // Sedikit abu sangat muda

  // 2. LOGIKA FILTER TABEL
  // Ambil semua baris tabel yang punya class 'user-row'
  const rows = document.querySelectorAll(".user-row");

  rows.forEach((row) => {
    // Jika kategori 'all', munculkan semua
    if (category === "all") {
      row.style.display = ""; // Kembalikan ke display default (table-row)
    }
    // Jika baris memiliki class yang sesuai kategori (misal: 'role-admin')
    else if (row.classList.contains(category)) {
      row.style.display = ""; // Munculkan
    }
    // Sisanya sembunyikan
    else {
      row.style.display = "none";
    }
  });
}

// FUNGSI BARU: Membuka Modal Edit User
function openEditUser(id, username, role, status) {
  // 1. Isi form modal dengan data yang dikirim
  document.getElementById("editUserId").value = id;
  document.getElementById("editUsername").value = username;
  document.getElementById("editRole").value = role;
  document.getElementById("editStatus").value = status;

  // 2. Tampilkan Modal
  var myModal = new bootstrap.Modal(document.getElementById("modalEditUser"));
  myModal.show();
}
