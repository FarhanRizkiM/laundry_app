<!--  Main wrapper -->
<div class="body-wrapper">
    <!--  Header Start -->
    <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item d-block d-xl-none">
                    <a
                        class="nav-link sidebartoggler nav-icon-hover"
                        id="headerCollapse"
                        href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                        <i class="ti ti-bell-ringing"></i>
                        <div class="notification bg-primary rounded-circle"></div>
                    </a>
                </li>
            </ul>
            <div
                class="navbar-collapse justify-content-end px-0"
                id="navbarNav">
                <ul
                    class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link nav-icon-hover"
                            href="javascript:void(0)"
                            id="drop2"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img
                                src="./assets/images/profile/user-1.jpg"
                                alt=""
                                width="35"
                                height="35"
                                class="rounded-circle" />
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                            aria-labelledby="drop2">
                            <div class="message-body">
                                <a
                                    href="javascript:void(0)"
                                    class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-user fs-6"></i>
                                    <p class="mb-0 fs-3">My Profile</p>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-mail fs-6"></i>
                                    <p class="mb-0 fs-3">My Account</p>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-list-check fs-6"></i>
                                    <p class="mb-0 fs-3">My Task</p>
                                </a>
                                <a
                                    href="./authentication-login.html"
                                    class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--  Header End -->

    <div class="container-fluid">

        <!-- Banner Start -->
        <div
            class="card bg-light shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Riwayat Transaksi</h4>
                        <p class="mb-0 text-muted">
                            Daftar semua transaksi yang masuk ke sistem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <div class="card w-100 position-relative overflow-hidden">
            <div class="card-body p-4">

                <div class="d-flex justify-content-between align-items-center mb-4 gap-2 flex-wrap">
                    <div>
                        <p class="text-muted mb-0">Periode: Desember 2025</p>
                    </div>

                    <div class="d-flex align-items-center gap-2 flex-wrap">

                        <select class="form-select fw-semibold bg-light border-0" style="width: 140px;" id="filterStatus" onchange="filterTable()">
                            <option value="all" selected>Semua Status</option>
                            <option value="lunas">✅ Lunas</option>
                            <option value="belum">⏳ Belum Bayar</option>
                        </select>

                        <input type="date" class="form-control bg-light border-0 fw-semibold" style="width: auto;" id="filterTanggal" onchange="filterTable()">

                        <div class="position-relative">
                            <input type="text" class="form-control ps-5" placeholder="Cari Nota / Nama..." id="filterSearch" onkeyup="filterTable()">
                            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </div>
                    </div>
                </div>

                <div class="table-responsive border rounded-4">
                    <table class="table table-hover align-middle text-nowrap mb-0">
                        <thead class="bg-light text-dark">
                            <tr>
                                <th class="ps-4">No. Nota</th>
                                <th>Pelanggan</th>
                                <th>Layanan</th>
                                <th>Tgl Masuk</th>
                                <th>Status Laundry</th>
                                <th>Pembayaran</th>
                                <th class="text-end pe-4">Total & Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="trx-row" data-status="lunas" data-tanggal="2025-12-06">
                                <td class="ps-4">
                                    <span class="fw-bold text-primary">#TRX-0098</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="avatar bg-light-primary text-primary rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width:35px; height:35px">S</span>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold text-dark">Ibu Siti</span>
                                            <small class="text-muted">08123456789</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark border">Cuci Kiloan (5kg)</span>
                                </td>
                                <td>06 Des 2025</td>
                                <td><span class="badge bg-light-success text-success px-2 py-1 rounded-pill"><i class="ti ti-check me-1"></i>Selesai</span></td>
                                <td><span class="badge bg-success rounded-1">LUNAS</span></td>
                                <td class="text-end pe-4">
                                    <h6 class="fw-bold mb-1">Rp 35.000</h6>
                                    <button class="btn btn-sm btn-outline-primary" onclick="openDetailTransaksi('TRX-0098', 'Ibu Siti', '35000', 'Lunas')">
                                        Detail
                                    </button>
                                </td>
                            </tr>

                            <tr class="trx-row" data-status="belum" data-tanggal="2025-12-06">
                                <td class="ps-4">
                                    <span class="fw-bold text-primary">#TRX-0099</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="avatar bg-light-warning text-warning rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width:35px; height:35px">A</span>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold text-dark">Andi (Mahasiswa)</span>
                                            <small class="text-muted">08567788990</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark border">Satuan (Jas)</span>
                                </td>
                                <td>06 Des 2025</td>
                                <td><span class="badge bg-light-warning text-warning px-2 py-1 rounded-pill"><i class="ti ti-loader me-1"></i>Proses</span></td>
                                <td><span class="badge bg-danger rounded-1">BELUM BAYAR</span></td>
                                <td class="text-end pe-4">
                                    <h6 class="fw-bold mb-1">Rp 25.000</h6>
                                    <button class="btn btn-sm btn-outline-primary" onclick="openDetailTransaksi('TRX-0099', 'Andi', '25000', 'Belum Bayar')">
                                        Detail
                                    </button>
                                </td>
                            </tr>

                            <tr class="trx-row" data-status="lunas" data-tanggal="2025-12-05">
                                <td class="ps-4">
                                    <span class="fw-bold text-primary">#TRX-0100</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="avatar bg-light-info text-info rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width:35px; height:35px">R</span>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold text-dark">Resto Sedap</span>
                                            <small class="text-muted">Langganan</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark border">Karpet (10m)</span>
                                </td>
                                <td>05 Des 2025</td>
                                <td><span class="badge bg-light-primary text-primary px-2 py-1 rounded-pill"><i class="ti ti-truck me-1"></i>Diantar</span></td>
                                <td><span class="badge bg-success rounded-1">LUNAS</span></td>
                                <td class="text-end pe-4">
                                    <h6 class="fw-bold mb-1">Rp 150.000</h6>
                                    <button class="btn btn-sm btn-outline-primary" onclick="openDetailTransaksi('TRX-0100', 'Resto Sedap', '150000', 'Lunas')">
                                        Detail
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div id="noDataFound" class="text-center p-5 d-none">
                    <i class="ti ti-folder-off fs-8 text-muted mb-3 d-block"></i>
                    <h6 class="text-muted">Data tidak ditemukan sesuai filter.</h6>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <nav>
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#">Sebelumnya</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDetailTransaksi" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow-lg">
                <div class="modal-header border-bottom-0 pb-0">
                    <h5 class="modal-title fw-bold">Detail Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">

                    <div class="text-center mb-4">
                        <h2 class="fw-bold text-primary mb-0" id="detailTotal">Rp 0</h2>
                        <span class="badge bg-light-success text-success px-3 py-1 rounded-pill mt-2" id="detailStatus">Lunas</span>
                    </div>

                    <ul class="list-group list-group-flush border rounded-3 mb-4">
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="text-muted">No. Nota</span>
                            <span class="fw-bold text-dark" id="detailNota">-</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="text-muted">Pelanggan</span>
                            <span class="fw-bold text-dark" id="detailNama">-</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="text-muted">Tanggal Masuk</span>
                            <span class="fw-bold text-dark">06 Des 2025 - 14:30</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="text-muted">Kasir</span>
                            <span class="fw-bold text-dark">Admin</span>
                        </li>
                    </ul>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary d-flex align-items-center justify-content-center gap-2">
                            <i class="ti ti-printer"></i> Cetak Struk / Nota
                        </button>
                        <button class="btn btn-outline-success d-flex align-items-center justify-content-center gap-2">
                            <i class="ti ti-brand-whatsapp"></i> Kirim ke WhatsApp
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // 1. Fungsi untuk Filter Tabel
    function filterTable() {
        // Ambil nilai dari input filter
        var statusFilter = document.getElementById('filterStatus').value; // 'all', 'lunas', 'belum'
        var dateFilter = document.getElementById('filterTanggal').value; // Format YYYY-MM-DD
        var searchFilter = document.getElementById('filterSearch').value.toLowerCase(); // Text search

        // Ambil semua baris yang punya class 'trx-row'
        var rows = document.querySelectorAll('.trx-row');
        var visibleCount = 0;

        rows.forEach(function(row) {
            // Ambil data asli dari atribut baris
            var rowStatus = row.getAttribute('data-status');
            var rowDate = row.getAttribute('data-tanggal');
            var rowText = row.innerText.toLowerCase(); // Ambil semua teks di baris itu untuk pencarian

            // Logika Pencocokan
            var isStatusMatch = (statusFilter === 'all') || (statusFilter === rowStatus);
            var isDateMatch = (dateFilter === '') || (dateFilter === rowDate);
            var isSearchMatch = rowText.includes(searchFilter);

            // Jika semua kriteria cocok, tampilkan baris
            if (isStatusMatch && isDateMatch && isSearchMatch) {
                row.style.display = ''; // Tampilkan
                visibleCount++;
            } else {
                row.style.display = 'none'; // Sembunyikan
            }
        });

        // Tampilkan pesan "Data Tidak Ditemukan" jika semua baris hilang
        var noDataMsg = document.getElementById('noDataFound');
        if (visibleCount === 0) {
            noDataMsg.classList.remove('d-none');
        } else {
            noDataMsg.classList.add('d-none');
        }
    }

    // 2. Fungsi Modal Detail (Agar tombol detail tetap jalan)
    function openDetailTransaksi(nota, nama, total, status) {
        document.getElementById('detailNota').innerText = '#' + nota;
        document.getElementById('detailNama').innerText = nama;

        let formattedTotal = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        }).format(total);
        document.getElementById('detailTotal').innerText = formattedTotal;

        const statusEl = document.getElementById('detailStatus');
        statusEl.innerText = status;

        if (status === 'Lunas') {
            statusEl.className = 'badge bg-light-success text-success px-3 py-1 rounded-pill mt-2';
        } else {
            statusEl.className = 'badge bg-light-danger text-danger px-3 py-1 rounded-pill mt-2';
        }

        var myModal = new bootstrap.Modal(document.getElementById('modalDetailTransaksi'));
        myModal.show();
    }
</script>