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
                         <h4 class="fw-semibold mb-8">Logistik Kurir</h4>
                         <p class="mb-0 text-muted">
                             Kelola pengantaran barang ke customer
                         </p>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Banner End -->

         <div class="card w-100 position-relative overflow-hidden">
             <div class="card-body p-4">
                 <!-- Navigasi Logistik Start -->
                 <ul
                     class="nav nav-pills mb-4 gap-2"
                     id="pills-tab"
                     role="tablist">
                     <li class="nav-item flex-fill" role="presentation">
                         <button
                             class="nav-link active w-100 py-3 rounded-3 d-flex align-items-center justify-content-center gap-2 shadow-sm"
                             id="pills-siap-tab"
                             data-bs-toggle="pill"
                             data-bs-target="#pills-siap"
                             type="button"
                             role="tab">
                             <i class="ti ti-package fs-5"></i>
                             <span class="fw-bold">Siap Antar</span>
                             <span class="badge bg-white text-primary ms-1 rounded-pill">2</span>
                         </button>
                     </li>
                     <li class="nav-item flex-fill" role="presentation">
                         <button
                             class="nav-link w-100 py-3 rounded-3 d-flex align-items-center justify-content-center gap-2 shadow-sm"
                             id="pills-jalan-tab"
                             data-bs-toggle="pill"
                             data-bs-target="#pills-jalan"
                             type="button"
                             role="tab">
                             <i class="ti ti-motorbike fs-5"></i>
                             <span class="fw-bold">Sedang Antar</span>
                             <span class="badge bg-warning text-white ms-1 rounded-pill">1</span>
                         </button>
                     </li>
                     <li class="nav-item flex-fill" role="presentation">
                         <button
                             class="nav-link w-100 py-3 rounded-3 d-flex align-items-center justify-content-center gap-2 shadow-sm"
                             id="pills-jalan-tab"
                             data-bs-toggle="pill"
                             data-bs-target="#pills-selesai"
                             type="button"
                             role="tab">
                             <i class="ti ti-circle-check fs-5"></i>
                             <span class="fw-bold">Selesai Antar</span>
                             <span class="badge bg-success text-white ms-1 rounded-pill">1</span>
                         </button>
                     </li>
                 </ul>
                 <!-- Navigasi Logistik End -->

                 <div class="tab-content" id="pills-tabContent">
                     <!-- Logistik Kurir Antar Start -->
                     <div
                         class="tab-pane fade show active"
                         id="pills-siap"
                         role="tabpanel">
                         <div class="row g-4">
                             <div class="col-md-6 col-lg-4">
                                 <!-- Kurir Antar 1 Start -->
                                 <div
                                     class="card h-100 position-relative overflow-hidden border-0"
                                     style="
                          border-radius: 24px;
                          box-shadow: 0 20px 45px rgba(15, 23, 42, 0.06);
                        ">
                                     <!-- Strip kiri biru -->
                                     <div
                                         class="position-absolute top-0 start-0 h-100"
                                         style="
                            width: 6px;
                            background: linear-gradient(
                              to bottom,
                              #5d87ff,
                              #dbe5ff
                            );
                          "></div>

                                     <div
                                         class="card-body p-4 d-flex flex-column"
                                         style="height: 420px">
                                         <!-- Header: INV + status -->
                                         <div
                                             class="d-flex justify-content-between align-items-center mb-3 ps-1">
                                             <span
                                                 class="badge rounded-pill px-3 py-1"
                                                 style="
                                background-color: #eef2ff;
                                color: #3b5bdb;
                                border: 1px solid rgba(93, 135, 255, 0.25);
                                font-size: 0.75rem;
                              ">
                                                 #INV-006
                                             </span>

                                             <span
                                                 class="badge rounded-pill px-3 py-1 fw-semibold"
                                                 style="
                                background-color: #5d87ff;
                                color: #ffffff;
                                font-size: 0.75rem;
                              ">
                                                 SIAP DIANTAR
                                             </span>
                                         </div>

                                         <!-- Avatar + nama -->
                                         <div class="text-center mb-3">
                                             <div
                                                 class="rounded-circle d-inline-flex align-items-center justify-content-center mb-2"
                                                 style="
                                width: 56px;
                                height: 56px;
                                background: radial-gradient(
                                  circle at 30% 20%,
                                  #eef2ff,
                                  #5d87ff20
                                );
                                color: #5d87ff;
                                font-weight: 700;
                              ">
                                                 B
                                             </div>
                                             <h5 class="fw-bold text-dark mb-0">Bu Siti</h5>
                                             <div
                                                 class="d-flex align-items-center justify-content-center mt-1">
                                                 <i class="ti ti-phone me-1 text-muted"></i>
                                                 <small class="text-muted">0812-3456-7890</small>
                                             </div>
                                         </div>

                                         <!-- Alamat tujuan (simple & clean) -->
                                         <div
                                             class="p-3 rounded-4 mb-3"
                                             style="
                              background-color: #f5f7ff;
                              border: 1px solid rgba(93, 135, 255, 0.15);
                            ">
                                             <small
                                                 class="text-muted text-uppercase fw-semibold d-block mb-1"
                                                 style="font-size: 0.65rem">
                                                 Alamat Tujuan
                                             </small>

                                             <div class="d-flex align-items-start gap-2 mb-2">
                                                 <i class="ti ti-map-pin text-primary mt-1"></i>
                                                 <span style="font-size: 0.8rem">
                                                     Jl. Melati No. 5 (Depan Pos Satpam)
                                                 </span>
                                             </div>

                                             <a
                                                 href="https://maps.google.com"
                                                 target="_blank"
                                                 class="btn btn-sm w-100 rounded-pill fw-semibold"
                                                 style="
                                background-color: #ffae1f;
                                color: #fff;
                                font-size: 0.8rem;
                              ">
                                                 <i class="ti ti-map-2 me-1"></i> Buka Maps
                                             </a>
                                         </div>

                                         <!-- Tagihan -->
                                         <div
                                             class="d-flex justify-content-between align-items-center mb-3 border-top pt-2 ps-1">
                                             <small class="text-muted">Tagihan</small>
                                             <span
                                                 class="badge rounded-pill px-3 py-1"
                                                 style="
                                background-color: #fff1f1;
                                color: #f04438;
                                font-size: 0.75rem;
                              ">
                                                 Belum Lunas (Rp 35.000)
                                             </span>
                                         </div>

                                         <!-- Slider: Paket diterima? -->
                                         <div class="mt-auto ps-1">
                                             <div
                                                 class="slider-container position-relative bg-white rounded-pill overflow-hidden"
                                                 style="
                                height: 52px;
                                border: 1px solid rgba(93, 135, 255, 0.55);
                              "
                                                 data-color="#5d87ff">
                                                 <div
                                                     class="slider-text position-absolute w-100 h-100 d-flex align-items-center justify-content-center fw-semibold small"
                                                     style="z-index: 1; pointer-events: none">
                                                     GESER UNTUK DIANTAR
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
                                                     class="slider-fill h-100 position-absolute top-0 start-0 rounded-pill"
                                                     style="
                                  width: 0%;
                                  background-color: #5d87ff;
                                  transition: width 0.05s;
                                "></div>

                                                 <div
                                                     class="slider-thumb bg-white rounded-circle position-absolute top-50 translate-middle-y shadow-sm d-flex align-items-center justify-content-center"
                                                     style="
                                  width: 42px;
                                  height: 42px;
                                  left: 4px;
                                  transition: left 0.05s;
                                  z-index: 4;
                                  color: #5d87ff;
                                  border: 1px solid rgba(93, 135, 255, 0.7);
                                ">
                                                     <i class="ti ti-check fs-5"></i>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- Kurir Antar 1 End -->
                             </div>
                             <div class="col-md-6 col-lg-4">
                                 <!-- Kurir Antar 2 Start -->
                                 <div
                                     class="card h-100 position-relative overflow-hidden border-0"
                                     style="
                          border-radius: 24px;
                          box-shadow: 0 20px 45px rgba(15, 23, 42, 0.06);
                        ">
                                     <!-- Strip kiri biru -->
                                     <div
                                         class="position-absolute top-0 start-0 h-100"
                                         style="
                            width: 6px;
                            background: linear-gradient(
                              to bottom,
                              #5d87ff,
                              #dbe5ff
                            );
                          "></div>

                                     <div
                                         class="card-body p-4 d-flex flex-column"
                                         style="height: 420px">
                                         <!-- Header: INV + status -->
                                         <div
                                             class="d-flex justify-content-between align-items-center mb-3 ps-1">
                                             <span
                                                 class="badge rounded-pill px-3 py-1"
                                                 style="
                                background-color: #eef2ff;
                                color: #3b5bdb;
                                border: 1px solid rgba(93, 135, 255, 0.25);
                                font-size: 0.75rem;
                              ">
                                                 #INV-006
                                             </span>

                                             <span
                                                 class="badge rounded-pill px-3 py-1 fw-semibold"
                                                 style="
                                background-color: #5d87ff;
                                color: #ffffff;
                                font-size: 0.75rem;
                              ">
                                                 SIAP DIANTAR
                                             </span>
                                         </div>

                                         <!-- Avatar + nama -->
                                         <div class="text-center mb-3">
                                             <div
                                                 class="rounded-circle d-inline-flex align-items-center justify-content-center mb-2"
                                                 style="
                                width: 56px;
                                height: 56px;
                                background: radial-gradient(
                                  circle at 30% 20%,
                                  #eef2ff,
                                  #5d87ff20
                                );
                                color: #5d87ff;
                                font-weight: 700;
                              ">
                                                 B
                                             </div>
                                             <h5 class="fw-bold text-dark mb-0">Bu Siti</h5>
                                             <div
                                                 class="d-flex align-items-center justify-content-center mt-1">
                                                 <i class="ti ti-phone me-1 text-muted"></i>
                                                 <small class="text-muted">0812-3456-7890</small>
                                             </div>
                                         </div>

                                         <!-- Alamat tujuan (simple & clean) -->
                                         <div
                                             class="p-3 rounded-4 mb-3"
                                             style="
                              background-color: #f5f7ff;
                              border: 1px solid rgba(93, 135, 255, 0.15);
                            ">
                                             <small
                                                 class="text-muted text-uppercase fw-semibold d-block mb-1"
                                                 style="font-size: 0.65rem">
                                                 Alamat Tujuan
                                             </small>

                                             <div class="d-flex align-items-start gap-2 mb-2">
                                                 <i class="ti ti-map-pin text-primary mt-1"></i>
                                                 <span style="font-size: 0.8rem">
                                                     Jl. Melati No. 5 (Depan Pos Satpam)
                                                 </span>
                                             </div>

                                             <a
                                                 href="https://maps.google.com"
                                                 target="_blank"
                                                 class="btn btn-sm w-100 rounded-pill fw-semibold"
                                                 style="
                                background-color: #ffae1f;
                                color: #fff;
                                font-size: 0.8rem;
                              ">
                                                 <i class="ti ti-map-2 me-1"></i> Buka Maps
                                             </a>
                                         </div>

                                         <!-- Tagihan -->
                                         <div
                                             class="d-flex justify-content-between align-items-center mb-3 border-top pt-2 ps-1">
                                             <small class="text-muted">Tagihan</small>
                                             <span
                                                 class="badge rounded-pill px-3 py-1"
                                                 style="
                                background-color: #e6fff7;
                                color: #16a34a;
                                font-size: 0.75rem;
                              ">
                                                 LUNAS
                                             </span>
                                         </div>

                                         <!-- Slider: Paket diterima? -->
                                         <div class="mt-auto ps-1">
                                             <div
                                                 class="slider-container position-relative bg-white rounded-pill overflow-hidden"
                                                 style="
                                height: 52px;
                                border: 1px solid rgba(93, 135, 255, 0.55);
                              "
                                                 data-color="#5d87ff">
                                                 <div
                                                     class="slider-text position-absolute w-100 h-100 d-flex align-items-center justify-content-center fw-semibold small"
                                                     style="z-index: 1; pointer-events: none">
                                                     GESER UNTUK DIANTAR
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
                                                     class="slider-fill h-100 position-absolute top-0 start-0 rounded-pill"
                                                     style="
                                  width: 0%;
                                  background-color: #5d87ff;
                                  transition: width 0.05s;
                                "></div>

                                                 <div
                                                     class="slider-thumb bg-white rounded-circle position-absolute top-50 translate-middle-y shadow-sm d-flex align-items-center justify-content-center"
                                                     style="
                                  width: 42px;
                                  height: 42px;
                                  left: 4px;
                                  transition: left 0.05s;
                                  z-index: 4;
                                  color: #5d87ff;
                                  border: 1px solid rgba(93, 135, 255, 0.7);
                                ">
                                                     <i class="ti ti-check fs-5"></i>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- Kurir Antar 2 End -->
                             </div>
                         </div>
                     </div>
                     <!-- Logistik Kurir Antar End -->

                     <!-- Logistik Kurir Sedang Jalan Start -->
                     <div class="tab-pane fade" id="pills-jalan" role="tabpanel">
                         <div class="row g-4">
                             <div class="col-md-6 col-lg-4">
                                 <!-- Kurir Sedang Jalan 1 Start -->
                                 <div
                                     class="card h-100 position-relative overflow-hidden border-0"
                                     style="
                          border-radius: 24px;
                          box-shadow: 0 20px 45px rgba(15, 23, 42, 0.06);
                        ">
                                     <!-- Strip kiri biru -->
                                     <div
                                         class="position-absolute top-0 start-0 h-100"
                                         style="
                            width: 6px;
                            background: linear-gradient(
                              to bottom,
                              #ffae1f,
                              #fff
                            );
                          "></div>

                                     <div
                                         class="card-body p-4 d-flex flex-column"
                                         style="height: 420px">
                                         <!-- Header: INV + status -->
                                         <div
                                             class="d-flex justify-content-between align-items-center mb-3 ps-1">
                                             <span
                                                 class="badge rounded-pill px-3 py-1"
                                                 style="
                                background-color: #eef2ff;
                                color: #ffae1f;
                                border: 1px solid rgba(93, 135, 255, 0.25);
                                font-size: 0.75rem;
                              ">
                                                 #INV-006
                                             </span>

                                             <span
                                                 class="badge rounded-pill px-3 py-1 fw-semibold"
                                                 style="
                                background-color: #ffae1f;
                                color: #ffffff;
                                font-size: 0.75rem;
                              ">
                                                 SEDANG DIANTAR
                                             </span>
                                         </div>

                                         <!-- Avatar + nama -->
                                         <div class="text-center mb-3">
                                             <div
                                                 class="rounded-circle d-inline-flex align-items-center justify-content-center mb-2"
                                                 style="
                                width: 56px;
                                height: 56px;
                                background: radial-gradient(
                                  circle at 30% 20%,
                                  #eef2ff,
                                  #7396f620
                                );
                                color: #ffae1f;
                                font-weight: 700;
                              ">
                                                 B
                                             </div>
                                             <h5 class="fw-bold text-dark mb-0">Bu Siti</h5>
                                             <div
                                                 class="d-flex align-items-center justify-content-center mt-1">
                                                 <i class="ti ti-phone me-1 text-muted"></i>
                                                 <small class="text-muted">0812-3456-7890</small>
                                             </div>
                                         </div>

                                         <!-- Alamat tujuan (simple & clean) -->
                                         <div
                                             class="p-3 rounded-4 mb-3"
                                             style="
                              background-color: #f5f7ff;
                              border: 1px solid rgba(93, 135, 255, 0.15);
                            ">
                                             <small
                                                 class="text-muted text-uppercase fw-semibold d-block mb-1"
                                                 style="font-size: 0.65rem">
                                                 Alamat Tujuan
                                             </small>

                                             <div class="d-flex align-items-start gap-2 mb-2">
                                                 <i class="ti ti-map-pin text-primary mt-1"></i>
                                                 <span style="font-size: 0.8rem">
                                                     Jl. Melati No. 5 (Depan Pos Satpam)
                                                 </span>
                                             </div>

                                             <a
                                                 href="https://maps.google.com"
                                                 target="_blank"
                                                 class="btn btn-sm w-100 rounded-pill fw-semibold"
                                                 style="
                                background-color: #ffae1f;
                                color: #fff;
                                font-size: 0.8rem;
                              ">
                                                 <i class="ti ti-map-2 me-1"></i> Buka Maps
                                             </a>
                                         </div>

                                         <!-- Tagihan -->
                                         <div
                                             class="d-flex justify-content-between align-items-center mb-3 border-top pt-2 ps-1">
                                             <small class="text-muted">Tagihan</small>
                                             <span
                                                 class="badge rounded-pill px-3 py-1"
                                                 style="
                                background-color: #fff1f1;
                                color: #f04438;
                                font-size: 0.75rem;
                              ">
                                                 Belum Lunas (Rp 35.000)
                                             </span>
                                         </div>

                                         <!-- Slider: Paket diterima? -->
                                         <div class="mt-auto ps-1">
                                             <div
                                                 class="slider-container position-relative bg-white rounded-pill overflow-hidden"
                                                 style="height: 52px; border: 1px solid #ffae1f"
                                                 data-color="#ffae1f">
                                                 <div
                                                     class="slider-text position-absolute w-100 h-100 d-flex align-items-center justify-content-center fw-semibold small"
                                                     style="z-index: 1; pointer-events: none">
                                                     GESER UNTUK DIANTAR
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
                                                     class="slider-fill h-100 position-absolute top-0 start-0 rounded-pill"
                                                     style="
                                  width: 0%;
                                  background-color: #ffae1f;
                                  transition: width 0.05s;
                                "></div>

                                                 <div
                                                     class="slider-thumb bg-white rounded-circle position-absolute top-50 translate-middle-y shadow-sm d-flex align-items-center justify-content-center"
                                                     style="
                                  width: 42px;
                                  height: 42px;
                                  left: 4px;
                                  transition: left 0.05s;
                                  z-index: 4;
                                  color: #ffae1f;
                                  border: 1px solid rgba(255, 174, 31, 1);
                                ">
                                                     <i class="ti ti-check fs-5"></i>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- Kurir Sedang Jalan 1 End -->
                             </div>
                         </div>
                     </div>
                     <!-- Logistik Kurir Sedang Jalan End -->

                     <!-- Logistik Kurir Selesai Diantar Start -->
                     <div class="tab-pane fade" id="pills-selesai" role="tabpanel">
                         <div class="row g-4">
                             <div class="col-md-6 col-lg-4">
                                 <!-- Kurir Selesai Antar 1 Start -->
                                 <div
                                     class="card h-100 position-relative overflow-hidden border-0"
                                     style="
                          border-radius: 24px;
                          box-shadow: 0 20px 45px rgba(15, 23, 42, 0.06);
                        ">
                                     <!-- Strip kiri biru -->
                                     <div
                                         class="position-absolute top-0 start-0 h-100"
                                         style="
                            width: 6px;
                            background: linear-gradient(
                              to bottom,
                              #20b486,
                              #fff
                            );
                          "></div>

                                     <div
                                         class="card-body p-4 d-flex flex-column"
                                         style="height: 420px">
                                         <!-- Header: INV + status -->
                                         <div
                                             class="d-flex justify-content-between align-items-center mb-3 ps-1">
                                             <span
                                                 class="badge rounded-pill px-3 py-1"
                                                 style="
                                background-color: #eef2ff;
                                color: #20b486;
                                border: 1px solid rgba(93, 135, 255, 0.25);
                                font-size: 0.75rem;
                              ">
                                                 #INV-006
                                             </span>

                                             <span
                                                 class="badge rounded-pill px-3 py-1 fw-semibold"
                                                 style="
                                background-color: #20b486;
                                color: #ffffff;
                                font-size: 0.75rem;
                              ">
                                                 SELESAI DIANTAR
                                             </span>
                                         </div>

                                         <!-- Avatar + nama -->
                                         <div class="text-center mb-3">
                                             <div
                                                 class="rounded-circle d-inline-flex align-items-center justify-content-center mb-2"
                                                 style="
                                width: 56px;
                                height: 56px;
                                background: radial-gradient(
                                  circle at 30% 20%,
                                  #eef2ff,
                                  #7396f620
                                );
                                color: #20b486;
                                font-weight: 700;
                              ">
                                                 B
                                             </div>
                                             <h5 class="fw-bold text-dark mb-0">Bu Siti</h5>
                                             <div
                                                 class="d-flex align-items-center justify-content-center mt-1">
                                                 <i class="ti ti-phone me-1 text-muted"></i>
                                                 <small class="text-muted">0812-3456-7890</small>
                                             </div>
                                         </div>

                                         <!-- Alamat tujuan (simple & clean) -->
                                         <div
                                             class="p-3 rounded-4 mb-3"
                                             style="
                              background-color: #f5f7ff;
                              border: 1px solid rgba(93, 135, 255, 0.15);
                            ">
                                             <small
                                                 class="text-muted text-uppercase fw-semibold d-block mb-1"
                                                 style="font-size: 0.65rem">
                                                 Alamat Tujuan
                                             </small>

                                             <div class="d-flex align-items-start gap-2 mb-2">
                                                 <i class="ti ti-map-pin text-primary mt-1"></i>
                                                 <span style="font-size: 0.8rem">
                                                     Jl. Melati No. 5 (Depan Pos Satpam)
                                                 </span>
                                             </div>

                                             <a
                                                 href="https://maps.google.com"
                                                 target="_blank"
                                                 class="btn btn-sm w-100 rounded-pill fw-semibold"
                                                 style="
                                background-color: #20b486;
                                color: #fff;
                                font-size: 0.8rem;
                              ">
                                                 <i class="ti ti-map-2 me-1"></i> Buka Maps
                                             </a>
                                         </div>

                                         <!-- Tagihan -->
                                         <div
                                             class="d-flex justify-content-between align-items-center mb-3 border-top pt-2 ps-1">
                                             <small class="text-muted">Tagihan</small>
                                             <span
                                                 class="badge rounded-pill px-3 py-1"
                                                 style="
                                background-color: #e6fff7;
                                color: #16a34a;
                                font-size: 0.75rem;
                              ">
                                                 LUNAS
                                             </span>
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
                                                 SELESAI
                                             </button>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- Kurir Selesai Antar 1 End -->
                             </div>
                         </div>
                     </div>
                     <!-- Logistik Kurir Selesai Diantar End -->
                 </div>
             </div>
         </div>
     </div>
 </div>