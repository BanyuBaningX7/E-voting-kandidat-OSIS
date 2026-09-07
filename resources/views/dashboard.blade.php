<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard E-Voting OSIS</title>
    <!-- Bootstrap 5 CDN & FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8fafc; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .card-candidate { transition: transform 0.2s, box-shadow 0.2s; border-radius: 12px; }
        .card-candidate:hover { transform: translateY(-4px); box-shadow: 0 10px 20px rgba(0,0,0,0.08) !important; }
        .bg-gradient-primary { background: linear-gradient(135deg, #1e293b, #0f172a); }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fa-solid fa-check-to-slot me-2"></i>E-Voting OSIS
            </a>
            <div class="d-flex align-items-center">
                <span class="text-white me-3"><i class="fa-solid fa-user-circle me-1"></i> {{ Auth::user()->name ?? 'User Pemilih' }}</span>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm"><i class="fa-solid fa-right-from-bracket me-1"></i> Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <!-- Banner Info -->
        <div class="p-4 bg-white rounded-3 shadow-sm border mb-4">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="fw-bold mb-1">Hasil Perolehan Suara Real-Time <span class="badge bg-success fs-6 ms-2">LIVE</span></h4>
                    <p class="text-muted mb-0">Sistem Pemilihan Ketua & Wakil Ketua OSIS Periode 2026/2027</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <span class="badge bg-primary fs-6 p-2"><i class="fa-solid fa-users me-1"></i> Total Suara Masuk: 982 / 1,250 DPT</span>
                </div>
            </div>
        </div>

        <!-- Metric Cards -->
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm rounded-3 p-3 bg-white border-start border-primary border-4">
                    <small class="text-muted text-uppercase fw-semibold">Total DPT</small>
                    <h3 class="fw-bold my-1">1,250</h3>
                    <small class="text-success"><i class="fa-solid fa-check-circle me-1"></i>Terdaftar</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm rounded-3 p-3 bg-white border-start border-success border-4">
                    <small class="text-muted text-uppercase fw-semibold">Suara Sah</small>
                    <h3 class="fw-bold my-1">970</h3>
                    <small class="text-success"><i class="fa-solid fa-chart-line me-1"></i>98.7% Valid</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm rounded-3 p-3 bg-white border-start border-warning border-4">
                    <small class="text-muted text-uppercase fw-semibold">Belum Memilih</small>
                    <h3 class="fw-bold my-1">268</h3>
                    <small class="text-warning"><i class="fa-solid fa-clock me-1"></i>21.44% Sisa</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm rounded-3 p-3 bg-white border-start border-info border-4">
                    <small class="text-muted text-uppercase fw-semibold">Partisipasi</small>
                    <h3 class="fw-bold my-1">78.56%</h3>
                    <small class="text-info"><i class="fa-solid fa-thumbs-up me-1"></i>Tinggi</small>
                </div>
            </div>
        </div>

        <!-- Daftar Kandidat (Voting Cards) -->
        <h5 class="fw-bold mb-3"><i class="fa-solid fa-id-card me-2"></i>Kandidat Pasangan Calon</h5>
        <div class="row g-4 mb-4">
            <!-- Candidate 1 -->
            <div class="col-md-4">
                <div class="card card-candidate border-primary border-2 shadow-sm h-100 bg-white">
                    <div class="card-body p-4">
                        <span class="badge bg-primary mb-2">Paslon #01</span>
                        <h5 class="card-title fw-bold">Ahmad Fauzi & Rina Lestari</h5>
                        <p class="card-subtitle text-muted small mb-3">Kelas XI PPLG 1 & XI AKL 2</p>
                        <div class="p-3 bg-light rounded-3 small text-secondary mb-3">
                            <strong>Visi:</strong> Mewujudkan OSIS digital yang inovatif, inklusif, dan aktif berkolaborasi.
                        </div>
                        <div class="progress mb-2" style="height: 12px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 53.6%;"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-dark">520 Suara</span>
                            <span class="fw-bold text-primary fs-5">53.6%</span>
                        </div>
                        <button class="btn btn-outline-primary w-100 mt-3 rounded-pill fw-semibold"><i class="fa-solid fa-vote-yea me-1"></i> Pilih Paslon 01</button>
                    </div>
                </div>
            </div>

            <!-- Candidate 2 -->
            <div class="col-md-4">
                <div class="card card-candidate border-0 shadow-sm h-100 bg-white">
                    <div class="card-body p-4">
                        <span class="badge bg-secondary mb-2">Paslon #02</span>
                        <h5 class="card-title fw-bold">Bintang Pratama & Maya Putri</h5>
                        <p class="card-subtitle text-muted small mb-3">Kelas XI TKT 2 & XI MP 1</p>
                        <div class="p-3 bg-light rounded-3 small text-secondary mb-3">
                            <strong>Visi:</strong> Mengembangkan potensi kepemimpinan dan kreativitas siswa berkarakter.
                        </div>
                        <div class="progress mb-2" style="height: 12px;">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 30.9%;"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-dark">300 Suara</span>
                            <span class="fw-bold text-secondary fs-5">30.9%</span>
                        </div>
                        <button class="btn btn-outline-secondary w-100 mt-3 rounded-pill fw-semibold"><i class="fa-solid fa-vote-yea me-1"></i> Pilih Paslon 02</button>
                    </div>
                </div>
            </div>

            <!-- Candidate 3 -->
            <div class="col-md-4">
                <div class="card card-candidate border-0 shadow-sm h-100 bg-white">
                    <div class="card-body p-4">
                        <span class="badge bg-secondary mb-2">Paslon #03</span>
                        <h5 class="card-title fw-bold">Citra Dewi & Doni Setiawan</h5>
                        <p class="card-subtitle text-muted small mb-3">Kelas XI DKV 3 & XI TKR 1</p>
                        <div class="p-3 bg-light rounded-3 small text-secondary mb-3">
                            <strong>Visi:</strong> Membangun komunikasi transparan dan optimalisasi kegiatan ekstrakurikuler.
                        </div>
                        <div class="progress mb-2" style="height: 12px;">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 15.5%;"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-dark">150 Suara</span>
                            <span class="fw-bold text-secondary fs-5">15.5%</span>
                        </div>
                        <button class="btn btn-outline-secondary w-100 mt-3 rounded-pill fw-semibold"><i class="fa-solid fa-vote-yea me-1"></i> Pilih Paslon 03</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Audit Log Table Dummy -->
        <div class="card border-0 shadow-sm rounded-3 bg-white p-4">
            <h5 class="fw-bold mb-3"><i class="fa-solid fa-history me-2"></i>Aktivitas Vote Terbaru (Audit Log)</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Waktu</th>
                            <th>Nama Pemilih</th>
                            <th>Email / User</th>
                            <th>Role</th>
                            <th>Pilihan</th>
                            <th>Status System</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>07 Sep 2026 - 14:02</td>
                            <td>Admin OSIS</td>
                            <td>admin@osis.sch.id</td>
                            <td><span class="badge bg-info">Admin</span></td>
                            <td>Paslon #01</td>
                            <td><span class="badge bg-success"><i class="fa-solid fa-check me-1"></i>Verified</span></td>
                        </tr>
                        <tr>
                            <td>07 Sep 2026 - 14:05</td>
                            <td>Siswa Pemilih 1</td>
                            <td>siswa1@osis.sch.id</td>
                            <td><span class="badge bg-success">Siswa</span></td>
                            <td>Paslon #01</td>
                            <td><span class="badge bg-success"><i class="fa-solid fa-check me-1"></i>Verified</span></td>
                        </tr>
                        <tr>
                            <td>07 Sep 2026 - 14:08</td>
                            <td>Guru Pemilih 1</td>
                            <td>guru1@osis.sch.id</td>
                            <td><span class="badge bg-warning text-dark">Guru</span></td>
                            <td>Paslon #02</td>
                            <td><span class="badge bg-success"><i class="fa-solid fa-check me-1"></i>Verified</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>