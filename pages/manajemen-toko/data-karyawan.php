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

        <div class="card bg-light shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Manajemen Karyawan</h4>
                        <p class="text-muted mb-0">Kelola akun Admin, Staff, dan Kurir di sini.</p>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <i class="ti ti-user-circle fs-8 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card w-100 position-relative overflow-hidden">
            <div class="card-body p-4">
                <div class="row g-3 mb-4">
                    <div class="col-6 col-xl-3">
                        <div class="card card-hover-shadow cursor-pointer h-100 border-primary filter-card active"
                            onclick="filterTable('all', this)" style="border: 1px solid #dfe5ef; border-left: 5px solid #5d87ff;">
                            <div class="card-body p-3 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold text-dark mb-1">Semua User</h6>
                                    <span class="fs-2 text-muted d-block">Total Karyawan</span>
                                </div>
                                <span class="badge bg-primary fs-6 rounded-3">5</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-xl-3">
                        <div class="card card-hover-shadow cursor-pointer h-100 filter-card"
                            onclick="filterTable('role-admin', this)" style="border: 1px solid #dfe5ef;">
                            <div class="card-body p-3 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold text-dark mb-1">Administrator</h6>
                                    <span class="fs-2 text-muted d-block">Akses Penuh</span>
                                </div>
                                <span class="badge bg-light-primary text-primary fs-6 rounded-3">1</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-xl-3">
                        <div class="card card-hover-shadow cursor-pointer h-100 filter-card"
                            onclick="filterTable('role-staff', this)" style="border: 1px solid #dfe5ef;">
                            <div class="card-body p-3 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold text-dark mb-1">Staff Produksi</h6>
                                    <span class="fs-2 text-muted d-block">Cuci & Setrika</span>
                                </div>
                                <span class="badge bg-light-warning text-warning fs-6 rounded-3">2</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-xl-3">
                        <div class="card card-hover-shadow cursor-pointer h-100 filter-card"
                            onclick="filterTable('role-kurir', this)" style="border: 1px solid #dfe5ef;">
                            <div class="card-body p-3 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-semibold text-dark mb-1">Kurir</h6>
                                    <span class="fs-2 text-muted d-block">Logistik</span>
                                </div>
                                <span class="badge bg-light-info text-info fs-6 rounded-3">2</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4 gap-2 flex-wrap">
                    <div class="position-relative flex-grow-1" style="max-width: 300px;">
                        <input type="text" class="form-control ps-5" placeholder="Cari username...">
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    </div>

                    <button class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalTambahUser">
                        <i class="ti ti-user-plus"></i> Rekrut Pegawai
                    </button>
                </div>

                <div class="table-responsive border rounded-4">
                    <table class="table table-hover align-middle text-nowrap mb-0">
                        <thead class="bg-light text-dark fs-4">
                            <tr>
                                <th class="ps-4">No</th>
                                <th>Username Login</th>
                                <th>Jabatan (Role)</th>
                                <th>Status</th>
                                <th class="text-end pe-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="tableBodyUser">

                            <tr class="user-row role-admin">
                                <td class="ps-4">1</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width:35px; height:35px;">A</span>
                                        <span class="fw-bold text-dark">admin</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-light-primary text-primary rounded-pill px-3"> Administrator </span></td>
                                <td><span class="badge bg-success rounded-circle p-1"></span> <small class="text-muted ms-1">Aktif</small></td>
                                <td class="text-end pe-4">
                                    <button class="btn btn-sm btn-light-warning text-warning me-1"
                                        onclick="openEditUser('1', 'admin', 'Administrator', 'Aktif')">
                                        <i class="ti ti-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light-danger text-danger"><i class="ti ti-trash"></i></button>
                                </td>
                            </tr>

                            <tr class="user-row role-staff">
                                <td class="ps-4">2</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="avatar bg-warning text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width:35px; height:35px;">S</span>
                                        <span class="fw-bold text-dark">staff_ani</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-light-warning text-warning rounded-pill px-3"> Staff Produksi </span></td>
                                <td><span class="badge bg-success rounded-circle p-1"></span> <small class="text-muted ms-1">Aktif</small></td>
                                <td class="text-end pe-4">
                                    <button class="btn btn-sm btn-light-warning text-warning me-1"
                                        onclick="openEditUser('2', 'staff_ani', 'Staff Produksi', 'Aktif')">
                                        <i class="ti ti-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light-danger text-danger"><i class="ti ti-trash"></i></button>
                                </td>
                            </tr>

                            <tr class="user-row role-kurir">
                                <td class="ps-4">3</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="avatar bg-info text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width:35px; height:35px;">K</span>
                                        <span class="fw-bold text-dark">kurir_ujang</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-light-info text-info rounded-pill px-3"> Kurir Logistik </span></td>
                                <td><span class="badge bg-secondary rounded-circle p-1"></span> <small class="text-muted ms-1">Offline</small></td>
                                <td class="text-end pe-4">
                                    <button class="btn btn-sm btn-light-warning text-warning me-1"
                                        onclick="openEditUser('3', 'kurir_ujang', 'Kurir Logistik', 'Offline')">
                                        <i class="ti ti-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light-danger text-danger"><i class="ti ti-trash"></i></button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="modalTambahUser" tabindex="-1" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="modal-header bg-primary text-white py-3">
                    <h5 class="modal-title text-white fw-bold"><i class="ti ti-user-plus me-2"></i>Akun Pegawai Baru</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4 bg-white">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Username Login</label>
                            <input type="text" class="form-control" placeholder="Contoh: staff_budi">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Password Awal</label>
                            <input type="password" class="form-control" value="123456">
                            <small class="text-muted" style="font-size: 0.7rem;">Default password: 123456</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Jabatan / Role</label>
                            <select class="form-select">
                                <option selected disabled>Pilih Jabatan...</option>
                                <option value="staff">Staff Produksi (Cuci & Setrika)</option>
                                <option value="courier">Kurir (Antar Jemput)</option>
                                <option value="admin">Admin Kasir</option>
                            </select>
                        </div>
                        <div class="d-grid">
                            <button type="button" class="btn btn-primary py-2 fs-4 rounded-3">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEditUser" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="modal-header bg-warning text-white py-3">
                    <h5 class="modal-title text-white fw-bold"><i class="ti ti-pencil me-2"></i>Edit Data Pegawai</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4 bg-white">
                    <form>
                        <input type="hidden" id="editUserId">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Username</label>
                            <input type="text" class="form-control bg-light" id="editUsername" readonly>
                            <small class="text-muted">Username tidak dapat diubah.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Ganti Password</label>
                            <input type="password" class="form-control" placeholder="Isi jika ingin mereset password...">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Jabatan</label>
                                <select class="form-select" id="editRole">
                                    <option value="Administrator">Administrator</option>
                                    <option value="Staff Produksi">Staff Produksi</option>
                                    <option value="Kurir Logistik">Kurir Logistik</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Status Akun</label>
                                <select class="form-select" id="editStatus">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Offline">Offline</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-grid mt-3">
                            <button type="button" class="btn btn-warning text-white py-2 rounded-3 fw-bold">Update Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>