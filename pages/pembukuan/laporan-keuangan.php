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
                        <h4 class="fw-semibold mb-8">Laporan Keuangan</h4>
                        <p class="mb-0 text-muted">
                            Ringkasan performa bisnis Anda bulan ini.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Card Data Pelanggan Start -->
        <div class="card w-100 position-relative overflow-hidden">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4 gap-2 flex-wrap">
                    <div>
                        <p class="text-muted mb-0">Periode: Desember 2025</p>
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <div class="position-relative">
                            <select class="form-select fw-semibold bg-light border-0" style="min-width: 150px;">
                                <option value="this_month" selected>📅 Bulan Ini</option>
                                <option value="last_month">Bulan Lalu</option>
                                <option value="this_year">Tahun Ini</option>
                            </select>
                        </div>

                        <button class="btn btn-danger d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalCatatPengeluaran">
                            <i class="ti ti-circle-minus"></i> Catat Pengeluaran
                        </button>

                        <button class="btn btn-outline-primary d-flex align-items-center gap-2">
                            <i class="ti ti-download"></i> Export
                        </button>
                    </div>
                </div>
                <!-- Table Data Pelanggan Start -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="p-3 bg-light-primary rounded-3 border-start border-primary border-4">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <i class="ti ti-wallet text-primary fs-6"></i>
                                <span class="mb-0 fw-semibold text-primary">Total Omset</span>
                            </div>
                            <h4 class="fw-bold text-dark mb-0">Rp 15.450.000</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="p-3 bg-light-danger rounded-3 border-start border-danger border-4">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <i class="ti ti-trending-down text-danger fs-6"></i>
                                <span class="mb-0 fw-semibold text-danger">Pengeluaran</span>
                            </div>
                            <h4 class="fw-bold text-dark mb-0">Rp 4.200.000</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="p-3 bg-success text-white rounded-3">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <i class="ti ti-coin text-white fs-6"></i>
                                <span class="mb-0 fw-semibold text-white opacity-75">Laba Bersih</span>
                            </div>
                            <h4 class="fw-bold text-white mb-0">Rp 11.250.000</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="p-3 bg-light-warning rounded-3 border-start border-warning border-4">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <i class="ti ti-alert-circle text-warning fs-6"></i>
                                <span class="mb-0 fw-semibold text-warning">Piutang</span>
                            </div>
                            <h4 class="fw-bold text-dark mb-0">Rp 850.000</h4>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <div class="border rounded-4 p-3 h-100">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="fw-semibold">Grafik Arus Kas</h6>
                                <span class="badge bg-light text-dark">Harian</span>
                            </div>
                            <div id="chart-cashflow" style="height: 250px;"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="border rounded-4 p-3 h-100">
                            <h6 class="fw-semibold mb-3">Sumber Pemasukan</h6>
                            <div id="chart-category" class="d-flex justify-content-center"></div>
                            <div class="mt-3">
                                <div class="d-flex justify-content-between text-muted fs-2">
                                    <span><i class="ti ti-circle-filled text-primary fs-2"></i> Kiloan</span>
                                    <span class="fw-bold text-dark">65%</span>
                                </div>
                                <div class="d-flex justify-content-between text-muted fs-2 mt-1">
                                    <span><i class="ti ti-circle-filled text-info fs-2"></i> Satuan</span>
                                    <span class="fw-bold text-dark">25%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4">

                    <div class="col-lg-6">
                        <div class="border rounded-4 p-3 h-100">
                            <h6 class="fw-semibold mb-3">🏆 Top Pelanggan</h6>
                            <div class="table-responsive">
                                <table class="table table-hover align-middle text-nowrap mb-0">
                                    <thead class="bg-light text-dark">
                                        <tr>
                                            <th class="ps-3">Rank</th>
                                            <th>Nama</th>
                                            <th class="text-end pe-3">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-3"><span class="badge bg-warning rounded-circle p-1 px-2">1</span></td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="avatar bg-light-primary text-primary rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width:30px; height:30px; font-size: 0.8rem">S</span>
                                                    <span class="fw-semibold" style="font-size: 0.9rem">Ibu Siti</span>
                                                </div>
                                            </td>
                                            <td class="text-end pe-3 fw-bold text-success">Rp 1.2jt</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><span class="badge bg-secondary rounded-circle p-1 px-2 text-white">2</span></td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="avatar bg-light-info text-info rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width:30px; height:30px; font-size: 0.8rem">R</span>
                                                    <span class="fw-semibold" style="font-size: 0.9rem">Resto Sedap</span>
                                                </div>
                                            </td>
                                            <td class="text-end pe-3 fw-bold text-success">Rp 900rb</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="border rounded-4 p-3 h-100">
                            <h6 class="fw-semibold mb-4">🔥 Layanan Terlaris</h6>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="fw-semibold text-dark font-small">Cuci Komplit Reguler</span>
                                    <span class="fw-bold text-primary font-small">450 Kg</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-primary" style="width: 85%"></div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="fw-semibold text-dark font-small">Cuci Kilat (Express)</span>
                                    <span class="fw-bold text-warning font-small">120 Kg</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-warning" style="width: 45%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="fw-semibold text-dark font-small">Cuci Karpet</span>
                                    <span class="fw-bold text-info font-small">35 Mtr</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-info" style="width: 25%"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- Table Data Pelanggan End -->
            </div>
        </div>
        <!-- Card Data Pelanggan End -->
    </div>

    <div class="modal fade" id="modalCatatPengeluaran" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow-lg">
                <div class="modal-header bg-danger text-white py-3">
                    <h5 class="modal-title fw-bold text-white"><i class="ti ti-wallet me-2"></i>Catat Pengeluaran Toko</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Pengeluaran</label>
                            <input type="text" class="form-control" placeholder="Contoh: Beli Deterjen 5 Jerigen">
                        </div>

                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="form-label fw-semibold">Kategori</label>
                                <select class="form-select">
                                    <option value="operasional">Operasional (Sabun/Plastik)</option>
                                    <option value="listrik">Tagihan Listrik/Air</option>
                                    <option value="gaji">Gaji Pegawai</option>
                                    <option value="maintenance">Service Mesin</option>
                                    <option value="lainnya">Lain-lain</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label fw-semibold">Tanggal</label>
                                <input type="date" class="form-control" value="2025-12-06">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Jumlah Uang (Rp)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light fw-bold text-danger">Rp</span>
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Foto Struk / Nota (Opsional)</label>
                            <input type="file" class="form-control">
                            <small class="text-muted">Format: JPG, PNG. Maks 2MB.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Catatan</label>
                            <textarea class="form-control" rows="2" placeholder="Detail tambahan..."></textarea>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="button" class="btn btn-danger py-2 fw-bold">Simpan Pengeluaran</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        // ===========================================
        // 1. KONFIGURASI CHART ARUS KAS (Line Chart)
        // ===========================================
        var cashflowOptions = {
            series: [{
                name: 'Pemasukan',
                data: [1500, 2300, 3200, 1800, 4500, 2100, 3800, 5200] // Data Dummy (Ribuan)
            }, {
                name: 'Pengeluaran',
                data: [500, 800, 400, 1200, 600, 900, 300, 1500] // Data Dummy
            }],
            chart: {
                type: 'area', // Area chart terlihat lebih modern drpd line biasa
                height: 300,
                fontFamily: 'inherit',
                toolbar: {
                    show: false
                }
            },
            colors: ['#5D87FF', '#FA896B'], // Biru (Masuk), Merah (Keluar)
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            fill: {
                opacity: 0.1
            }, // Transparan di bawah garis
            xaxis: {
                categories: ['Mg 1', 'Mg 2', 'Mg 3', 'Mg 4', 'Mg 5', 'Mg 6', 'Mg 7', 'Mg 8'],
                axisBorder: {
                    show: false
                },
            },
            grid: {
                strokeDashArray: 4,
                borderColor: 'rgba(0,0,0,0.1)'
            },
            tooltip: {
                theme: 'light'
            }
        };

        var chartCashflow = new ApexCharts(document.querySelector("#chart-cashflow"), cashflowOptions);
        chartCashflow.render();


        // ===========================================
        // 2. KONFIGURASI CHART KATEGORI (Donut)
        // ===========================================
        var categoryOptions = {
            series: [65, 25, 10], // Persentase data
            labels: ['Kiloan', 'Satuan', 'Karpet'],
            chart: {
                type: 'donut',
                height: 250,
                fontFamily: 'inherit',
            },
            colors: ['#5D87FF', '#49BEFF', '#FFAE1F'], // Biru Tua, Biru Muda, Kuning
            plotOptions: {
                pie: {
                    donut: {
                        size: '70%',
                        labels: {
                            show: true,
                            total: {
                                showAlways: true,
                                show: true,
                                label: 'Total',
                                fontSize: '14px',
                                color: '#a1aab2',
                                formatter: function(w) {
                                    return "100%";
                                }
                            }
                        }
                    }
                }
            },
            dataLabels: {
                enabled: false
            }, // Hilangkan angka di dalam donut biar bersih
            legend: {
                show: false
            }, // Kita pakai legend manual di HTML agar lebih rapi
            stroke: {
                show: false
            }
        };

        var chartCategory = new ApexCharts(document.querySelector("#chart-category"), categoryOptions);
        chartCategory.render();

    });
</script>