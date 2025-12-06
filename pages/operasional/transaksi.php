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
                        <h4 class="fw-semibold mb-8">Kasir & Transaksi</h4>
                        <p class="mb-0 text-muted">
                            Area kasir dan transaksi untuk user disini.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Card Start -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card p-3 mb-4 shadow-sm border-0">
                            <!-- Tag Button Start -->
                            <div class="d-flex gap-2 overflow-auto hide-scrollbar pb-1">
                                <button class="btn btn-primary px-4 rounded-pill">
                                    Semua
                                </button>
                                <button
                                    class="btn btn-light-primary text-primary px-4 rounded-pill">
                                    Kiloan
                                </button>
                                <button
                                    class="btn btn-light-primary text-primary px-4 rounded-pill">
                                    Satuan
                                </button>
                                <button
                                    class="btn btn-light-primary text-primary px-4 rounded-pill">
                                    Sepatu
                                </button>
                                <button
                                    class="btn btn-light-primary text-primary px-4 rounded-pill">
                                    Karpet
                                </button>
                            </div>
                            <!-- Tag Button End -->
                        </div>

                        <!-- Menu Laundry Start -->
                        <div class="row row-cols-1 row-cols-md-3 g-3">
                            <div class="col">
                                <div
                                    class="card h-100 cursor-pointer border-0 shadow-sm hover-card bg-light-info">
                                    <div class="card-body text-center p-4">
                                        <div
                                            class="bg-white rounded-circle p-3 d-inline-block mb-3 shadow-sm">
                                            <i class="ti ti-shirt fs-6 text-primary"></i>
                                        </div>
                                        <h6 class="fw-bold text-dark mb-1">Kiloan Reguler</h6>
                                        <p class="text-muted mb-0 small">Rp 7.000 / kg</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div
                                    class="card h-100 cursor-pointer border-0 shadow-sm hover-card bg-white">
                                    <div class="card-body text-center p-4">
                                        <div
                                            class="bg-light-danger rounded-circle p-3 d-inline-block mb-3">
                                            <i class="ti ti-clock fs-6 text-danger"></i>
                                        </div>
                                        <h6 class="fw-bold text-dark mb-1">
                                            Cuci Express 3 Jam
                                        </h6>
                                        <p class="text-muted mb-0 small">Rp 15.000 / kg</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div
                                    class="card h-100 cursor-pointer border-0 shadow-sm hover-card bg-white">
                                    <div class="card-body text-center p-4">
                                        <div
                                            class="bg-light-warning rounded-circle p-3 d-inline-block mb-3">
                                            <i class="ti ti-bed fs-6 text-warning"></i>
                                        </div>
                                        <h6 class="fw-bold text-dark mb-1">Bedcover Besar</h6>
                                        <p class="text-muted mb-0 small">Rp 30.000 / pcs</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div
                                    class="card h-100 cursor-pointer border-0 shadow-sm hover-card bg-white">
                                    <div class="card-body text-center p-4">
                                        <div
                                            class="bg-light-success rounded-circle p-3 d-inline-block mb-3">
                                            <i class="ti ti-shoe fs-6 text-success"></i>
                                        </div>
                                        <h6 class="fw-bold text-dark mb-1">
                                            Deep Clean Shoes
                                        </h6>
                                        <p class="text-muted mb-0 small">Rp 35.000 / psg</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div
                                    class="card h-100 cursor-pointer border-0 shadow-sm hover-card bg-white">
                                    <div class="card-body text-center p-4">
                                        <div
                                            class="bg-light-secondary rounded-circle p-3 d-inline-block mb-3">
                                            <i class="ti ti-hanger fs-6 text-secondary"></i>
                                        </div>
                                        <h6 class="fw-bold text-dark mb-1">Jas / Blazer</h6>
                                        <p class="text-muted mb-0 small">Rp 20.000 / pcs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Menu Laundry End -->
                    </div>

                    <!-- Card Keranjang Start -->
                    <div class="col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-header bg-primary text-white py-3">
                                <h5 class="card-title text-white mb-0">
                                    <i class="ti ti-shopping-cart me-2"></i> Keranjang
                                    Cucian
                                </h5>
                            </div>

                            <!-- Data Pelanggan Start -->
                            <div class="card-body d-flex flex-column p-3">
                                <div class="mb-4 border-bottom pb-3">
                                    <label class="form-label fw-semibold">Pelanggan</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="ti ti-user"></i></span>
                                        <input
                                            class="form-control"
                                            list="datalistOptions"
                                            id="pelangganData"
                                            placeholder="Ketik nama / No HP..." />
                                        <datalist id="datalistOptions"> </datalist>

                                        <button
                                            class="btn btn-outline-primary"
                                            type="button"
                                            title="Tambah Baru"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalTambahPelanggan">
                                            <i class="ti ti-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Modal Tambah Pelanggan Start -->
                                <div
                                    class="modal fade"
                                    id="modalTambahPelanggan"
                                    tabindex="-1"
                                    aria-labelledby="modalLabel"
                                    aria-hidden="true"
                                    data-bs-backdrop="static"
                                    data-bs-keyboard="false">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div
                                            class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
                                            <div
                                                class="modal-header bg-primary text-white py-3">
                                                <h5
                                                    class="modal-title text-white fw-bold"
                                                    id="modalLabel">
                                                    <i class="ti ti-user-plus me-2"></i>Tambah
                                                    Pelanggan Baru
                                                </h5>
                                                <button
                                                    type="button"
                                                    class="btn-close btn-close-white"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body p-4 bg-white">
                                                <form action="" method="POST">
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label fw-semibold text-dark">Nama Lengkap</label>
                                                        <input
                                                            type="text"
                                                            class="form-control rounded-3"
                                                            name="name"
                                                            placeholder="Contoh: Ibu Siti"
                                                            required />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label fw-semibold text-dark">Nomor WhatsApp / HP</label>
                                                        <div class="input-group">
                                                            <span
                                                                class="input-group-text bg-light border-end-0 rounded-start-3">+62</span>
                                                            <input
                                                                type="number"
                                                                class="form-control border-start-0 rounded-end-3"
                                                                name="phone"
                                                                placeholder="8123xxxx"
                                                                required />
                                                        </div>
                                                    </div>

                                                    <div class="mb-4">
                                                        <label
                                                            class="form-label fw-semibold text-dark">Alamat Lengkap</label>
                                                        <textarea
                                                            class="form-control rounded-3"
                                                            name="address"
                                                            rows="3"
                                                            placeholder="Nama jalan, nomor rumah, patokan..."></textarea>
                                                    </div>

                                                    <div class="d-grid">
                                                        <button
                                                            type="submit"
                                                            name="btn_simpan_pelanggan"
                                                            class="btn btn-primary py-2 fs-4 rounded-3 shadow-sm">
                                                            <i class="ti ti-device-floppy me-2"></i>
                                                            Simpan Data Pelanggan
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Tambah Pelanggan Start -->

                                <!-- Card Keranjang Cucian Start -->
                                <div
                                    class="flex-grow-1 overflow-auto pe-1"
                                    style="max-height: 350px">
                                    <div class="card mb-3 border shadow-sm w-100">
                                        <div class="card-body p-3">
                                            <div
                                                class="d-flex align-items-center gap-3 mb-3 pb-2 border-bottom">
                                                <div class="bg-primary text-white rounded p-2">
                                                    <i class="ti ti-shirt fs-5"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 fw-bold text-dark">
                                                        Cuci Kilos Reguler
                                                    </h6>
                                                    <small class="text-muted">Rp 7.000 / kg</small>
                                                </div>
                                            </div>

                                            <div
                                                class="d-flex justify-content-between align-items-center">
                                                <div
                                                    class="d-flex align-items-center bg-light rounded border px-1">
                                                    <button
                                                        class="btn btn-sm text-dark px-2"
                                                        onclick="ubahQty(this, -1)">
                                                        <i
                                                            class="ti ti-minus"
                                                            style="font-size: 0.8rem"></i>
                                                    </button>

                                                    <input
                                                        type="number"
                                                        class="form-control form-control-sm text-center border-0 fw-bold p-0 bg-transparent"
                                                        value="1"
                                                        style="width: 30px"
                                                        onchange="hitungTotal()" />

                                                    <button
                                                        class="btn btn-sm text-dark px-2"
                                                        onclick="ubahQty(this, 1)">
                                                        <i
                                                            class="ti ti-plus"
                                                            style="font-size: 0.8rem"></i>
                                                    </button>
                                                </div>

                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fw-bold text-primary small">Rp 35.000</span>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="ti ti-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-auto border-top pt-3 bg-white">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted">Subtotal (3 Item)</span>
                                        <span class="fw-bold">Rp 100.000</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4">
                                        <h4 class="mb-0">Total Bayar</h4>
                                        <h4 class="text-primary mb-0">Rp 100.000</h4>
                                    </div>

                                    <button
                                        type="button"
                                        class="btn btn-primary w-100 py-3 fs-4 fw-semibold shadow-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalBayar">
                                        <i class="ti ti-cash me-2"></i> Proses Pembayaran
                                    </button>
                                </div>
                                <!-- Card Keranjang Cucian End -->

                                <!-- Modal Proses Pembayara Start -->
                                <div
                                    class="modal fade"
                                    id="modalBayar"
                                    tabindex="-1"
                                    data-bs-backdrop="static">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div
                                            class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title fw-bold text-white">
                                                    <i class="ti ti-wallet me-2"></i>Pembayaran
                                                </h5>
                                                <button
                                                    type="button"
                                                    class="btn-close btn-close-white"
                                                    data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body p-4">
                                                <form
                                                    action=""
                                                    method="POST"
                                                    onsubmit="bersihkanAngka()">
                                                    <div
                                                        class="text-center mb-4 bg-light-primary p-3 rounded-3 border border-primary border-opacity-25">
                                                        <small
                                                            class="text-muted text-uppercase fw-bold ls-1">Total Tagihan</small>
                                                        <h1
                                                            class="display-4 fw-bold text-primary mt-1 mb-0">
                                                            Rp 100.000
                                                        </h1>
                                                        <input
                                                            type="hidden"
                                                            id="total_belanja"
                                                            name="total_belanja"
                                                            value="100000" />
                                                    </div>

                                                    <div class="mb-4">
                                                        <label class="fw-bold mb-2">Metode Pembayaran</label>
                                                        <div class="row g-2">
                                                            <div class="col-4">
                                                                <input
                                                                    type="radio"
                                                                    class="btn-check"
                                                                    name="payment_method"
                                                                    id="cash"
                                                                    value="cash"
                                                                    checked
                                                                    onclick="cekMetode()" />
                                                                <label
                                                                    class="btn btn-outline-primary w-100 py-3"
                                                                    for="cash">
                                                                    <i
                                                                        class="ti ti-cash d-block fs-3 mb-1"></i>
                                                                    Tunai
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <input
                                                                    type="radio"
                                                                    class="btn-check"
                                                                    name="payment_method"
                                                                    id="qris"
                                                                    value="qris"
                                                                    onclick="cekMetode()" />
                                                                <label
                                                                    class="btn btn-outline-primary w-100 py-3"
                                                                    for="qris">
                                                                    <i
                                                                        class="ti ti-qrcode d-block fs-3 mb-1"></i>
                                                                    QRIS
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <input
                                                                    type="radio"
                                                                    class="btn-check"
                                                                    name="payment_method"
                                                                    id="transfer"
                                                                    value="transfer"
                                                                    onclick="cekMetode()" />
                                                                <label
                                                                    class="btn btn-outline-info w-100 py-3"
                                                                    for="transfer">
                                                                    <i
                                                                        class="ti ti-building-bank d-block fs-3 mb-1"></i>
                                                                    Transfer
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="area_tunai">
                                                        <div class="mb-3">
                                                            <label class="fw-bold">Uang Diterima</label>
                                                            <input
                                                                type="text"
                                                                class="form-control form-control-lg bg-light border-2 fw-bold text-primary"
                                                                id="uang_input_tampilan"
                                                                placeholder="Rp 0"
                                                                onkeyup="formatRupiah(this)" />

                                                            <input
                                                                type="hidden"
                                                                name="cash_amount"
                                                                id="uang_input_murni" />
                                                        </div>

                                                        <div
                                                            class="alert alert-secondary d-flex justify-content-between align-items-center mb-0"
                                                            id="box_kembalian">
                                                            <span class="fw-bold">Kembalian:</span>
                                                            <span
                                                                class="fw-bolder fs-4"
                                                                id="label_kembalian">Rp 0</span>
                                                        </div>
                                                    </div>

                                                    <div
                                                        id="area_qris"
                                                        style="display: none"
                                                        class="text-center">
                                                        <div
                                                            class="card border-primary border-2 border-dashed bg-light-primary p-3">
                                                            <h6 class="fw-bold text-primary mb-3">
                                                                SCAN QRIS BCA
                                                            </h6>
                                                            <img
                                                                src="https://upload.wikimedia.org/wikipedia/commons/d/d0/QR_code_for_mobile_English_Wikipedia.svg"
                                                                alt="QRIS BCA"
                                                                class="img-fluid mx-auto d-block bg-white p-2 rounded"
                                                                style="width: 200px" />
                                                            <p class="small text-muted mt-2 mb-0">
                                                                NMID: ID102003004005
                                                            </p>
                                                            <p class="small fw-bold text-dark">
                                                                A.n VIP LAUNDRY OFFICIAL
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="form-check mt-3 d-inline-block text-start">
                                                            <input
                                                                class="form-check-input"
                                                                type="checkbox"
                                                                id="cek_qris"
                                                                required
                                                                disabled />
                                                            <label
                                                                class="form-check-label small fw-bold"
                                                                for="cek_qris">
                                                                Pembayaran QRIS Berhasil Masuk
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div id="area_transfer" style="display: none">
                                                        <div
                                                            class="alert alert-info border-info d-flex align-items-center gap-3">
                                                            <i class="ti ti-building-bank fs-1"></i>
                                                            <div>
                                                                <small
                                                                    class="fw-bold text-uppercase opacity-75">Silakan Transfer ke:</small>
                                                                <h4 class="fw-bold mb-0">BANK BCA</h4>
                                                                <div
                                                                    class="fs-4 font-monospace user-select-all">
                                                                    8830-1234-5678
                                                                </div>
                                                                <small>a.n. VIP Laundry Official</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="checkbox"
                                                                id="cek_transfer"
                                                                required
                                                                disabled />
                                                            <label
                                                                class="form-check-label small"
                                                                for="cek_transfer">
                                                                Saya sudah cek mutasi dan uang masuk.
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="d-grid mt-4">
                                                        <button
                                                            type="submit"
                                                            name="btn_simpan_transaksi"
                                                            class="btn btn-primary py-3 fs-4 fw-bold shadow">
                                                            SELESAI & CETAK STRUK
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Proses Pembayara End -->
                            </div>
                            <!-- Data Pelanggan End -->
                        </div>
                    </div>
                    <!-- Card Pembayaran End -->
                </div>
            </div>
        </div>
        <!-- Card End -->
    </div>
</div>