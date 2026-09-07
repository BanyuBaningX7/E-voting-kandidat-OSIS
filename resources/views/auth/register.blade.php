<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - E-Voting OSIS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light d-flex align-items-center vh-100 py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body p-4">
                        <h4 class="text-center fw-bold mb-4">Registrasi Akun</h4>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <select name="role" class="form-select" required>
                                    <option value="siswa">Siswa</option>
                                    <option value="guru">Guru</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100 py-2">Daftar</button>
                        </form>
                        <div class="text-center mt-3">
                            <small class="text-muted">Sudah punya akun? <a href="{{ route('login') }}" class="text-decoration-none">Login</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>