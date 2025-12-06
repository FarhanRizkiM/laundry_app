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
                        <h4 class="fw-semibold mb-8">Produksi</h4>
                        <p class="mb-0 text-muted">
                            Produksi dari cuci, setrik, sampai packing terjadi disini.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Card Produksi Start -->
        <div class="card w-100 position-relative overflow-hidden">
            <div class="card-body p-4">
                <!-- Navigasi Produksi Start-->
                <ul
                    class="nav nav-pills mb-4 gap-2"
                    id="pills-tab"
                    role="tablist">
                    <li class="nav-item flex-fill" role="presentation">
                        <button
                            class="nav-link active w-100 py-3 rounded-3 d-flex align-items-center justify-content-center gap-2 shadow-sm"
                            id="pills-antrian-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-antrian"
                            type="button"
                            role="tab">
                            <i class="ti ti-clock fs-5"></i>
                            <span class="fw-bold">Antrian Baru</span>
                            <span class="badge bg-white text-primary ms-1 rounded-pill">3</span>
                        </button>
                    </li>

                    <li class="nav-item flex-fill" role="presentation">
                        <button
                            class="nav-link w-100 py-3 rounded-3 d-flex align-items-center justify-content-center gap-2 shadow-sm"
                            id="pills-proses-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-proses"
                            type="button"
                            role="tab">
                            <i class="ti ti-loader fs-5"></i>
                            <span class="fw-bold">Sedang Proses</span>
                            <span class="badge bg-warning text-white ms-1 rounded-pill">2</span>
                        </button>
                    </li>

                    <li class="nav-item flex-fill" role="presentation">
                        <button
                            class="nav-link w-100 py-3 rounded-3 d-flex align-items-center justify-content-center gap-2 shadow-sm"
                            id="pills-selesai-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-selesai"
                            type="button"
                            role="tab">
                            <i class="ti ti-check fs-5"></i>
                            <span class="fw-bold">Selesai Packing</span>
                            <span class="badge bg-success text-white ms-1 rounded-pill">1</span>
                        </button>
                    </li>
                </ul>
                <!-- Navigasi Produksi End -->

                <div class="tab-content" id="pills-tabContent">
                    <!-- Antrian Baru Start -->
                    <div
                        class="tab-pane fade show active"
                        id="pills-antrian"
                        role="tabpanel">
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-4">
                                <!-- Antrian 1 Start -->
                                <div
                                    class="card card-premium h-100 position-relative overflow-hidden">
                                    <div
                                        class="position-absolute top-0 start-0 h-100"
                                        style="
                            width: 6px;
                            background: linear-gradient(
                              to bottom,
                              #5d87ff,
                              #ecf2ff
                            );
                          "></div>

                                    <div
                                        class="card-body p-4 d-flex flex-column"
                                        style="height: 340px">
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-4 ps-2">
                                            <span
                                                class="badge badge-soft bg-light-primary text-primary">#INV-001</span>
                                            <div
                                                class="d-flex align-items-center text-muted small">
                                                <i class="ti ti-clock me-1 fs-5"></i>
                                                <span class="fw-semibold">08:00</span>
                                            </div>
                                        </div>

                                        <div class="text-center mb-4">
                                            <div class="mb-2">
                                                <span
                                                    class="avatar bg-light-primary text-primary rounded-circle d-inline-flex align-items-center justify-content-center fs-5 fw-bold shadow-sm"
                                                    style="width: 45px; height: 45px">S</span>
                                            </div>
                                            <h5 class="fw-bolder text-dark mb-0">IBU SITI</h5>
                                            <small class="text-muted">Customer Regular</small>
                                        </div>

                                        <div class="row g-2 mb-3 ps-2">
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Paket</span>
                                                    <span class="info-value">Kiloan</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Berat</span>
                                                    <span class="info-value">5 Kg</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="info-box bg-light-danger text-danger">
                                                    <span class="info-label text-danger">Alert</span>
                                                    <i class="ti ti-alert-triangle fs-5"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-auto ps-2">
                                            <div
                                                class="slider-container position-relative bg-white rounded-pill overflow-hidden shadow-sm border-0"
                                                style="
                                height: 50px;
                                box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.05) !important;
                              ">
                                                <div
                                                    class="slider-text position-absolute w-100 h-100 d-flex align-items-center justify-content-center fw-bold small"
                                                    style="
                                  z-index: 1;
                                  pointer-events: none;
                                  background: linear-gradient(
                                    to right,
                                    #ffffff 0%,
                                    var(--bs-primary) 0%
                                  );
                                  -webkit-background-clip: text;
                                  -webkit-text-fill-color: transparent;
                                  background-clip: text;
                                ">
                                                    GESER UNTUK MEMULAI
                                                </div>
                                                <input
                                                    type="range"
                                                    class="form-range slider-action w-100 h-100 position-absolute opacity-0"
                                                    min="0"
                                                    max="100"
                                                    value="0"
                                                    step="1"
                                                    style="z-index: 5; cursor: pointer" />
                                                <div
                                                    class="slider-fill bg-primary h-100 position-absolute top-0 start-0 rounded-pill"
                                                    style="width: 0%; transition: width 0.05s"></div>
                                                <div
                                                    class="slider-thumb bg-white rounded-circle position-absolute top-50 translate-middle-y shadow d-flex align-items-center justify-content-center text-primary"
                                                    style="
                                  width: 42px;
                                  height: 42px;
                                  left: 4px;
                                  transition: left 0.05s;
                                  z-index: 4;
                                ">
                                                    <i class="ti ti-chevrons-right fs-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Antrian 1 End -->
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <!-- Antrian 2 Start -->
                                <div
                                    class="card card-premium h-100 position-relative overflow-hidden">
                                    <div
                                        class="position-absolute top-0 start-0 h-100"
                                        style="
                            width: 6px;
                            background: linear-gradient(
                              to bottom,
                              #5d87ff,
                              #ecf2ff
                            );
                          "></div>

                                    <div
                                        class="card-body p-4 d-flex flex-column"
                                        style="height: 340px">
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-4 ps-2">
                                            <span
                                                class="badge badge-soft bg-light-primary text-primary">#INV-003</span>
                                            <div
                                                class="d-flex align-items-center text-muted small">
                                                <i class="ti ti-clock me-1 fs-5"></i>
                                                <span class="fw-semibold">09:15</span>
                                            </div>
                                        </div>

                                        <div class="text-center mb-4">
                                            <div class="mb-2">
                                                <span
                                                    class="avatar bg-light-warning text-warning rounded-circle d-inline-flex align-items-center justify-content-center fs-5 fw-bold shadow-sm"
                                                    style="width: 45px; height: 45px">B</span>
                                            </div>
                                            <h5 class="fw-bolder text-dark mb-0">PAK BUDI</h5>
                                            <small class="text-muted">Member VIP</small>
                                        </div>

                                        <div class="row g-2 mb-3 ps-2">
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Paket</span>
                                                    <span class="info-value">Satuan</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Qty</span>
                                                    <span class="info-value">1 Pcs</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Status</span>
                                                    <span class="info-value">-</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-auto ps-2">
                                            <div
                                                class="slider-container position-relative bg-white rounded-pill overflow-hidden shadow-sm border-0"
                                                style="
                                height: 50px;
                                box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.05) !important;
                              ">
                                                <div
                                                    class="slider-text position-absolute w-100 h-100 d-flex align-items-center justify-content-center fw-bold small"
                                                    style="
                                  z-index: 1;
                                  pointer-events: none;
                                  background: linear-gradient(
                                    to right,
                                    #ffffff 0%,
                                    var(--bs-primary) 0%
                                  );
                                  -webkit-background-clip: text;
                                  -webkit-text-fill-color: transparent;
                                  background-clip: text;
                                ">
                                                    GESER UNTUK MEMULAI
                                                </div>
                                                <input
                                                    type="range"
                                                    class="form-range slider-action w-100 h-100 position-absolute opacity-0"
                                                    min="0"
                                                    max="100"
                                                    value="0"
                                                    step="1"
                                                    style="z-index: 5; cursor: pointer" />
                                                <div
                                                    class="slider-fill bg-primary h-100 position-absolute top-0 start-0 rounded-pill"
                                                    style="width: 0%; transition: width 0.05s"></div>
                                                <div
                                                    class="slider-thumb bg-white rounded-circle position-absolute top-50 translate-middle-y shadow d-flex align-items-center justify-content-center text-primary"
                                                    style="
                                  width: 42px;
                                  height: 42px;
                                  left: 4px;
                                  transition: left 0.05s;
                                  z-index: 4;
                                ">
                                                    <i class="ti ti-chevrons-right fs-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Antrian 2 End -->
                            </div>
                        </div>
                    </div>
                    <!-- Antrian Baru End -->

                    <!-- Sedang Proses Start -->
                    <div class="tab-pane fade" id="pills-proses" role="tabpanel">
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-4">
                                <!-- Diproses 1 Start -->
                                <div
                                    class="card card-premium h-100 position-relative overflow-hidden">
                                    <div
                                        class="position-absolute top-0 start-0 h-100"
                                        style="
                            width: 6px;
                            background: linear-gradient(
                              to bottom,
                              #ffae1f,
                              #fff8e1
                            );
                          "></div>

                                    <div
                                        class="card-body p-4 d-flex flex-column"
                                        style="height: 340px">
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-4 ps-2">
                                            <span
                                                class="badge badge-soft bg-light-warning text-warning border border-warning border-opacity-25">#INV-002</span>
                                            <div
                                                class="d-flex align-items-center text-muted small">
                                                <span
                                                    class="badge rounded-pill px-3 py-1 fw-semibold"
                                                    style="
                                  background-color: #ffae1f;
                                  color: #fff;
                                  font-size: 0.75rem;
                                ">
                                                    WASHING
                                                </span>
                                            </div>
                                        </div>

                                        <div class="text-center mb-4">
                                            <div class="mb-2">
                                                <span
                                                    class="avatar bg-light-warning text-warning rounded-circle d-inline-flex align-items-center justify-content-center fs-5 fw-bold shadow-sm"
                                                    style="width: 45px; height: 45px">K</span>
                                            </div>
                                            <h5 class="fw-bolder text-dark mb-0">KAK ANDI</h5>
                                            <small class="text-muted">Customer Baru</small>
                                        </div>

                                        <div class="row g-2 mb-3 ps-2">
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Paket</span>
                                                    <span class="info-value">Kiloan</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Berat</span>
                                                    <span class="info-value">3 Kg</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Status</span>
                                                    <span class="info-value">-</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-auto ps-2">
                                            <div
                                                class="slider-container position-relative bg-white rounded-pill overflow-hidden shadow-sm border-0"
                                                style="
                                height: 50px;
                                box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.05) !important;
                              ">
                                                <div
                                                    class="slider-text position-absolute w-100 h-100 d-flex align-items-center justify-content-center fw-bold small"
                                                    style="
                                  z-index: 1;
                                  pointer-events: none;
                                  background: linear-gradient(
                                    to right,
                                    #ffffff 0%,
                                    #ffae1f 0%
                                  );
                                  -webkit-background-clip: text;
                                  -webkit-text-fill-color: transparent;
                                  background-clip: text;
                                ">
                                                    GESER LANJUT SETRIKA
                                                </div>

                                                <input
                                                    type="range"
                                                    class="form-range slider-action w-100 h-100 position-absolute opacity-0"
                                                    min="0"
                                                    max="100"
                                                    value="0"
                                                    step="1"
                                                    style="z-index: 5; cursor: pointer" />

                                                <div
                                                    class="slider-fill h-100 position-absolute top-0 start-0 rounded-pill bg-warning"
                                                    style="
                                  width: 0%;

                                  transition: width 0.05s;
                                "></div>

                                                <div
                                                    class="slider-thumb bg-white rounded-circle position-absolute top-50 translate-middle-y shadow d-flex align-items-center justify-content-center"
                                                    style="
                                  width: 42px;
                                  height: 42px;
                                  left: 4px;
                                  transition: left 0.05s;
                                  z-index: 4;
                                  color: #ffae1f;
                                ">
                                                    <i class="ti ti-chevrons-right fs-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Diproses 1 End -->
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <!-- Diproses 2 Start -->
                                <div
                                    class="card card-premium h-100 position-relative overflow-hidden">
                                    <div
                                        class="position-absolute top-0 start-0 h-100"
                                        style="
                            width: 6px;
                            background: linear-gradient(
                              to bottom,
                              #ffae1f,
                              #fff8e1
                            );
                          "></div>

                                    <div
                                        class="card-body p-4 d-flex flex-column"
                                        style="height: 340px">
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-4 ps-2">
                                            <span
                                                class="badge badge-soft bg-light-warning text-warning border border-warning border-opacity-25">#INV-002</span>
                                            <div
                                                class="d-flex align-items-center text-muted small">
                                                <span
                                                    class="badge rounded-pill px-3 py-1 fw-semibold"
                                                    style="
                                  background-color: #ffae1f;
                                  color: #fff;
                                  font-size: 0.75rem;
                                ">
                                                    IRONING
                                                </span>
                                            </div>
                                        </div>

                                        <div class="text-center mb-4">
                                            <div class="mb-2">
                                                <span
                                                    class="avatar bg-light-warning text-warning rounded-circle d-inline-flex align-items-center justify-content-center fs-5 fw-bold shadow-sm"
                                                    style="width: 45px; height: 45px">K</span>
                                            </div>
                                            <h5 class="fw-bolder text-dark mb-0">KAK ANDI</h5>
                                            <small class="text-muted">Customer Baru</small>
                                        </div>

                                        <div class="row g-2 mb-3 ps-2">
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Paket</span>
                                                    <span class="info-value">Kiloan</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Berat</span>
                                                    <span class="info-value">3 Kg</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Status</span>
                                                    <span class="info-value">-</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-auto ps-2">
                                            <div
                                                class="slider-container position-relative bg-white rounded-pill overflow-hidden shadow-sm border-0"
                                                style="
                                height: 50px;
                                box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.05) !important;
                              ">
                                                <div
                                                    class="slider-text position-absolute w-100 h-100 d-flex align-items-center justify-content-center fw-bold small"
                                                    style="
                                  z-index: 1;
                                  pointer-events: none;
                                  background: linear-gradient(
                                    to right,
                                    #ffffff 0%,
                                    #ffae1f 0%
                                  );
                                  -webkit-background-clip: text;
                                  -webkit-text-fill-color: transparent;
                                  background-clip: text;
                                ">
                                                    GESER LANJUT DIKEMAS
                                                </div>

                                                <input
                                                    type="range"
                                                    class="form-range slider-action w-100 h-100 position-absolute opacity-0"
                                                    min="0"
                                                    max="100"
                                                    value="0"
                                                    step="1"
                                                    style="z-index: 5; cursor: pointer" />

                                                <div
                                                    class="slider-fill h-100 position-absolute top-0 start-0 rounded-pill bg-warning"
                                                    style="
                                  width: 0%;

                                  transition: width 0.05s;
                                "></div>

                                                <div
                                                    class="slider-thumb bg-white rounded-circle position-absolute top-50 translate-middle-y shadow d-flex align-items-center justify-content-center"
                                                    style="
                                  width: 42px;
                                  height: 42px;
                                  left: 4px;
                                  transition: left 0.05s;
                                  z-index: 4;
                                  color: #ffae1f;
                                ">
                                                    <i class="ti ti-chevrons-right fs-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Diproses 2 End -->
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <!-- Diproses 3 Start -->
                                <div
                                    class="card card-premium h-100 position-relative overflow-hidden">
                                    <div
                                        class="position-absolute top-0 start-0 h-100"
                                        style="
                            width: 6px;
                            background: linear-gradient(
                              to bottom,
                              #ffae1f,
                              #fff8e1
                            );
                          "></div>

                                    <div
                                        class="card-body p-4 d-flex flex-column"
                                        style="height: 340px">
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-4 ps-2">
                                            <span
                                                class="badge badge-soft bg-light-warning text-warning border border-warning border-opacity-25">#INV-002</span>
                                            <div
                                                class="d-flex align-items-center text-muted small">
                                                <span
                                                    class="badge rounded-pill px-3 py-1 fw-semibold"
                                                    style="
                                  background-color: #ffae1f;
                                  color: #fff;
                                  font-size: 0.75rem;
                                ">
                                                    PACKING
                                                </span>
                                            </div>
                                        </div>

                                        <div class="text-center mb-4">
                                            <div class="mb-2">
                                                <span
                                                    class="avatar bg-light-warning text-warning rounded-circle d-inline-flex align-items-center justify-content-center fs-5 fw-bold shadow-sm"
                                                    style="width: 45px; height: 45px">K</span>
                                            </div>
                                            <h5 class="fw-bolder text-dark mb-0">KAK ANDI</h5>
                                            <small class="text-muted">Customer Baru</small>
                                        </div>

                                        <div class="row g-2 mb-3 ps-2">
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Paket</span>
                                                    <span class="info-value">Kiloan</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Berat</span>
                                                    <span class="info-value">3 Kg</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Status</span>
                                                    <span class="info-value">-</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-auto ps-2">
                                            <div
                                                class="slider-container position-relative bg-white rounded-pill overflow-hidden shadow-sm border-0"
                                                style="
                                height: 50px;
                                box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.05) !important;
                              ">
                                                <div
                                                    class="slider-text position-absolute w-100 h-100 d-flex align-items-center justify-content-center fw-bold small"
                                                    style="
                                  z-index: 1;
                                  pointer-events: none;
                                  background: linear-gradient(
                                    to right,
                                    #ffffff 0%,
                                    #ffae1f 0%
                                  );
                                  -webkit-background-clip: text;
                                  -webkit-text-fill-color: transparent;
                                  background-clip: text;
                                ">
                                                    GESER UNTUK SELESAI
                                                </div>

                                                <input
                                                    type="range"
                                                    class="form-range slider-action w-100 h-100 position-absolute opacity-0"
                                                    min="0"
                                                    max="100"
                                                    value="0"
                                                    step="1"
                                                    style="z-index: 5; cursor: pointer" />

                                                <div
                                                    class="slider-fill h-100 position-absolute top-0 start-0 rounded-pill bg-warning"
                                                    style="
                                  width: 0%;

                                  transition: width 0.05s;
                                "></div>

                                                <div
                                                    class="slider-thumb bg-white rounded-circle position-absolute top-50 translate-middle-y shadow d-flex align-items-center justify-content-center"
                                                    style="
                                  width: 42px;
                                  height: 42px;
                                  left: 4px;
                                  transition: left 0.05s;
                                  z-index: 4;
                                  color: #ffae1f;
                                ">
                                                    <i class="ti ti-chevrons-right fs-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Diproses 3 End -->
                            </div>
                        </div>
                    </div>
                    <!-- Sedang Proses End -->

                    <!-- Selesai Packing Start -->
                    <div class="tab-pane fade" id="pills-selesai" role="tabpanel">
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-4">
                                <!-- Selesai 1 Start -->
                                <div
                                    class="card card-premium h-100 position-relative overflow-hidden">
                                    <!-- Strip kiri hijau -->
                                    <div
                                        class="position-absolute top-0 start-0 h-100"
                                        style="
                            width: 6px;
                            background: linear-gradient(
                              to bottom,
                              #20b486,
                              #bdfbe9
                            );
                          "></div>

                                    <div
                                        class="card-body p-4 d-flex flex-column"
                                        style="height: 340px">
                                        <!-- Header invoice + status -->
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-4 ps-2">
                                            <span
                                                class="badge rounded-pill px-3 py-1"
                                                style="
                                background-color: #e6fff7;
                                color: #20b486;
                                border: 1px solid rgba(32, 180, 134, 0.25);
                                font-size: 0.8rem;
                              ">
                                                #INV-005
                                            </span>

                                            <span
                                                class="badge rounded-pill px-3 py-1 fw-semibold"
                                                style="
                                background-color: #20b486;
                                color: #fff;
                                font-size: 0.75rem;
                              ">
                                                READY
                                            </span>
                                        </div>

                                        <!-- Customer -->
                                        <div class="text-center mb-4">
                                            <div class="mb-2">
                                                <span
                                                    class="avatar rounded-circle d-inline-flex align-items-center justify-content-center fs-5 fw-bold shadow-sm"
                                                    style="
                                  width: 45px;
                                  height: 45px;
                                  background-color: #e6fff7;
                                  color: #20b486;
                                ">
                                                    P
                                                </span>
                                            </div>
                                            <h5 class="fw-bolder text-dark mb-0">Pak RT</h5>
                                            <small class="text-muted">Customer Tetap</small>
                                        </div>

                                        <!-- Info Paket / Berat / Rak -->
                                        <div class="row g-2 mb-3 ps-2">
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Paket</span>
                                                    <span class="info-value">Kiloan</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Berat</span>
                                                    <span class="info-value">3 Kg</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Rak</span>
                                                    <span class="info-value">A-12</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Status bawah (ganti slider) -->
                                        <div class="mt-auto ps-2">
                                            <button
                                                type="button"
                                                class="w-100 border-0 fw-semibold"
                                                style="
                                padding: 10px 14px;
                                border-radius: 999px;
                                background-color: #e6fff7;
                                color: #20b486;
                                font-size: 0.85rem;
                              ">
                                                Menunggu Diambil
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Selesai 1 End -->
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <!-- Selesai 2 Start -->
                                <div
                                    class="card card-premium h-100 position-relative overflow-hidden">
                                    <!-- Strip kiri hijau -->
                                    <div
                                        class="position-absolute top-0 start-0 h-100"
                                        style="
                            width: 6px;
                            background: linear-gradient(
                              to bottom,
                              #20b486,
                              #bdfbe9
                            );
                          "></div>

                                    <div
                                        class="card-body p-4 d-flex flex-column"
                                        style="height: 340px">
                                        <!-- Header invoice + status -->
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-4 ps-2">
                                            <span
                                                class="badge rounded-pill px-3 py-1"
                                                style="
                                background-color: #e6fff7;
                                color: #20b486;
                                border: 1px solid rgba(32, 180, 134, 0.25);
                                font-size: 0.8rem;
                              ">
                                                #INV-005
                                            </span>

                                            <span
                                                class="badge rounded-pill px-3 py-1 fw-semibold"
                                                style="
                                background-color: #20b486;
                                color: #fff;
                                font-size: 0.75rem;
                              ">
                                                READY
                                            </span>
                                        </div>

                                        <!-- Customer -->
                                        <div class="text-center mb-4">
                                            <div class="mb-2">
                                                <span
                                                    class="avatar rounded-circle d-inline-flex align-items-center justify-content-center fs-5 fw-bold shadow-sm"
                                                    style="
                                  width: 45px;
                                  height: 45px;
                                  background-color: #e6fff7;
                                  color: #20b486;
                                ">
                                                    P
                                                </span>
                                            </div>
                                            <h5 class="fw-bolder text-dark mb-0">Pak RT</h5>
                                            <small class="text-muted">Customer Tetap</small>
                                        </div>

                                        <!-- Info Paket / Berat / Rak -->
                                        <div class="row g-2 mb-3 ps-2">
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Paket</span>
                                                    <span class="info-value">Kiloan</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Berat</span>
                                                    <span class="info-value">3 Kg</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="info-box">
                                                    <span class="info-label">Rak</span>
                                                    <span class="info-value">A-12</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Status bawah (ganti slider) -->
                                        <div class="mt-auto ps-2">
                                            <button
                                                type="button"
                                                class="w-100 border-0 fw-semibold"
                                                style="
                                padding: 10px 14px;
                                border-radius: 999px;
                                background-color: #e6fff7;
                                color: #20b486;
                                font-size: 0.85rem;
                              ">
                                                Diantar Kurir
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Selesai 2 End -->
                            </div>
                        </div>
                    </div>
                    <!-- Selesai Packing End -->
                </div>
            </div>
        </div>
        <!-- Card Produksi End -->
    </div>
</div>