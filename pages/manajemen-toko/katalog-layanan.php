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

        <div class="card bg-light-info shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Katalog Layanan</h4>
                        <p class="text-muted mb-0">Atur kategori dan harga layanan laundry Anda.</p>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <i class="ti ti-basket fs-8 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card w-100 shadow-sm border-0 rounded-4">
            <div class="card-body p-4">
                <div class="row g-4 align-items-start">
                    <div class="col-lg-4">
                        <div class="card w-100 border-0 shadow-sm rounded-4">
                            <div class="card-body p-4">

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h5 class="fw-bold mb-0 text-dark">Kategori</h5>
                                    <button class="btn btn-sm btn-primary px-3 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#modalTambahKategori">
                                        <i class="ti ti-plus me-1"></i>Baru
                                    </button>
                                </div>

                                <div class="list-group list-group-flush gap-2" id="categoryList">

                                    <a href="javascript:void(0)" onclick="showCategory('kiloan', this)"
                                        class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center p-3 rounded-3 border-0 shadow-sm category-item">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="bg-white text-primary rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                <i class="ti ti-scale fs-5"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0 fw-bold">Cuci Kiloan</h6>
                                                <small class="opacity-75" style="font-size: 0.75rem">Reguler & Express</small>
                                            </div>
                                        </div>
                                        <i class="ti ti-chevron-right"></i>
                                    </a>

                                    <a href="javascript:void(0)" onclick="showCategory('satuan', this)"
                                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center p-3 rounded-3 border category-item">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="bg-light-info text-info rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                <i class="ti ti-shirt fs-5"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0 fw-bold text-dark">Cuci Satuan</h6>
                                                <small class="text-muted" style="font-size: 0.75rem">Jas, Jaket, dll</small>
                                            </div>
                                        </div>
                                        <i class="ti ti-chevron-right text-muted opacity-50"></i>
                                    </a>

                                    <a href="javascript:void(0)" onclick="showCategory('karpet', this)"
                                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center p-3 rounded-3 border category-item">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="bg-light-warning text-warning rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                <i class="ti ti-box-padding fs-5"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0 fw-bold text-dark">Karpet & Bedcover</h6>
                                                <small class="text-muted" style="font-size: 0.75rem">Barang Besar</small>
                                            </div>
                                        </div>
                                        <i class="ti ti-chevron-right text-muted opacity-50"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="card w-100 border-0 shadow-sm rounded-4">
                            <div class="card-body p-4">

                                <div class="d-flex justify-content-between align-items-end mb-4">
                                    <div>
                                        <h5 class="fw-bold mb-1 text-dark" id="selectedCategoryTitle">Daftar Layanan: Cuci Kiloan</h5>
                                        <p class="text-muted mb-0 small">Kelola harga dan durasi.</p>
                                    </div>
                                    <button class="btn btn-outline-primary d-flex align-items-center gap-2 px-3 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#modalTambahLayanan">
                                        <i class="ti ti-plus"></i> Tambah Item
                                    </button>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-hover align-middle text-nowrap mb-0">
                                        <thead class="bg-light text-secondary">
                                            <tr>
                                                <th class="py-3 ps-3 rounded-start">Nama Layanan</th>
                                                <th class="py-3">Harga / Satuan</th>
                                                <th class="py-3">Estimasi</th>
                                                <th class="py-3 text-end pe-3 rounded-end">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="servicesTableBody">
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalTambahKategori" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 border-0 shadow-lg">
                    <div class="modal-header border-bottom-0 pb-0">
                        <h5 class="modal-title fw-bold">Tambah Kategori Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body p-4">
                        <input type="text" class="form-control mb-3" placeholder="Nama Kategori (misal: Setrika Saja)">
                        <textarea class="form-control" rows="2" placeholder="Deskripsi singkat..."></textarea>
                    </div>
                    <div class="modal-footer border-top-0 pt-0 px-4 pb-4">
                        <button type="button" class="btn btn-primary w-100 rounded-3">Simpan Kategori</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalTambahLayanan" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 border-0 shadow-lg">
                    <div class="modal-header border-bottom-0 pb-0">
                        <h5 class="modal-title fw-bold">Tambah Layanan Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Item</label>
                            <input type="text" class="form-control" placeholder="Contoh: Cuci Kering Express">
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="form-label fw-semibold">Harga (Rp)</label>
                                <input type="number" class="form-control" placeholder="10000">
                            </div>
                            <div class="col-6">
                                <label class="form-label fw-semibold">Satuan</label>
                                <select class="form-select">
                                    <option>/ Kg</option>
                                    <option>/ Pcs</option>
                                    <option>/ Meter</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-top-0 pt-0 px-4 pb-4">
                        <button type="button" class="btn btn-primary w-100 rounded-3">Simpan Layanan</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalEditLayanan" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 border-0 shadow-lg">
                    <div class="modal-header bg-warning bg-opacity-10 border-bottom-0 pb-0">
                        <h5 class="modal-title fw-bold text-warning-emphasis">
                            <i class="ti ti-pencil me-2"></i>Edit Layanan
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body p-4">
                        <input type="hidden" id="editId">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Item</label>
                            <input type="text" class="form-control" id="editNama" placeholder="Contoh: Cuci Kering Express">
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="form-label fw-semibold">Harga (Rp)</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">Rp</span>
                                    <input type="number" class="form-control border-start-0 ps-1" id="editHarga" placeholder="10000">
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label fw-semibold">Satuan</label>
                                <select class="form-select" id="editSatuan">
                                    <option value="/ Kg">/ Kg</option>
                                    <option value="/ Pcs">/ Pcs</option>
                                    <option value="/ Meter">/ Meter</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Estimasi Waktu</label>
                            <input type="text" class="form-control" id="editEstimasi" placeholder="Contoh: 2 Hari">
                        </div>
                    </div>
                    <div class="modal-footer border-top-0 pt-0 px-4 pb-4">
                        <button type="button" class="btn btn-light text-muted" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-warning text-white px-4 rounded-3" onclick="saveEdit()">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>