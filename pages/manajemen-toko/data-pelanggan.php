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
                        <h4 class="fw-semibold mb-8">Manajemen Pelanggan</h4>
                        <p class="mb-0 text-muted">
                            Pelanggan setia yang senantiasa cuci di kita.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Card Data Pelanggan Start -->
        <div class="card w-100 position-relative overflow-hidden">
            <div class="card-body p-4">
                <div
                    class="d-flex justify-content-between align-items-center mb-4 gap-2 flex-wrap">
                    <div class="position-relative">
                        <input
                            type="text"
                            class="form-control ps-5"
                            placeholder="Cari nama / HP..." />
                        <i
                            class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    </div>

                    <button
                        class="btn btn-primary d-flex align-items-center gap-2"
                        data-bs-toggle="modal"
                        data-bs-target="#modalTambah">
                        <i class="ti ti-plus"></i> Tambah Pelanggan
                    </button>
                </div>

                <!-- Table Data Pelanggan Start -->
                <div class="table-responsive border rounded-4">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4 bg-light">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">No</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Nama Lengkap</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Kontak (WA)</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Alamat</h6>
                                </th>
                                <th class="border-bottom-0 text-end">
                                    <h6 class="fw-semibold mb-0">Aksi</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">1</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <h6 class="fw-semibold mb-1">Ibu Siti Aminah</h6>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <a
                                        href="#"
                                        class="text-success fw-bold text-decoration-none">
                                        <i class="ti ti-brand-whatsapp fs-4"></i> 08123456789
                                    </a>
                                </td>
                                <td class="border-bottom-0">
                                    <p
                                        class="mb-0 fw-normal text-truncate"
                                        style="max-width: 200px">
                                        Jl. Mawar No. 10, Jakarta Selatan
                                    </p>
                                </td>
                                <td class="border-bottom-0 text-end">
                                    <button
                                        class="btn btn-sm btn-outline-primary btn-edit"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalEdit">
                                        <i class="ti ti-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">2</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <h6 class="fw-semibold mb-1">Pak Budi Santoso</h6>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <a
                                        href="#"
                                        class="text-success fw-bold text-decoration-none">
                                        <i class="ti ti-brand-whatsapp fs-4"></i> 08198765432
                                    </a>
                                </td>
                                <td class="border-bottom-0">
                                    <p
                                        class="mb-0 fw-normal text-truncate"
                                        style="max-width: 200px">
                                        Perumahan Indah Blok A1 No. 5
                                    </p>
                                </td>
                                <td class="border-bottom-0 text-end">
                                    <button
                                        class="btn btn-sm btn-outline-primary btn-edit"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalEdit">
                                        <i class="ti ti-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Table Data Pelanggan End -->
            </div>
        </div>
        <!-- Card Data Pelanggan End -->
    </div>

    <!-- Modal Tambah Pelanggan Start -->
    <div
        class="modal fade"
        id="modalTambah"
        tabindex="-1"
        aria-labelledby="modalLabel"
        aria-hidden="true"
        data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div
                class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="modal-header bg-primary text-white py-3">
                    <h5 class="modal-title text-white fw-bold" id="modalLabel">
                        <i class="ti ti-user-plus me-2"></i>Tambah Pelanggan Baru
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
                            <label class="form-label fw-semibold text-dark">Nama Lengkap</label>
                            <input
                                type="text"
                                class="form-control rounded-3"
                                name="name"
                                placeholder="Contoh: Ibu Siti"
                                required />
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold text-dark">Nomor WhatsApp / HP</label>
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
                            <label class="form-label fw-semibold text-dark">Alamat Lengkap</label>
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

    <!-- Modal Edit Start -->
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div
                class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title text-white">Edit Pelanggan</h5>
                    <button
                        type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input
                                type="text"
                                class="form-control"
                                value="Ibu Siti Aminah" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. HP</label>
                            <input
                                type="number"
                                class="form-control"
                                value="08123456789" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" rows="3">
Jl. Mawar No. 10, Jakarta Selatan</textarea>
                        </div>
                        <button
                            type="button"
                            class="btn btn-primary w-100 text-white">
                            Update Perubahan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Edit End -->
</div>