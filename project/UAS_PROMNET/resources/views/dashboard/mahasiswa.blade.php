<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa - GYM UPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --primary: #B63333;
            --secondary: #181A1F;
        }
        body {
            background-color: #f9fafb;
            font-family: 'Montserrat', Arial, sans-serif;
        }
        .sidebar {
            background-color: var(--secondary);
            color: white;
            min-height: 100vh;
            padding-top: 20px;
        }
        .sidebar .logo {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            border-bottom: 2px solid rgba(255,255,255,0.1);
        }
        .sidebar .logo h3 {
            color: var(--primary);
            font-weight: 700;
            margin: 0;
        }
        .sidebar .nav-item {
            margin-bottom: 10px;
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.7);
            padding: 12px 20px;
            border-left: 3px solid transparent;
            transition: all 0.3s;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: rgba(255,255,255,0.1);
            color: white;
            border-left-color: var(--primary);
        }
        .main-content {
            padding: 30px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .header h1 {
            margin: 0;
            color: var(--secondary);
            font-size: 28px;
            font-weight: 700;
        }
        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }
        .user-details h5 {
            margin: 0;
            color: var(--secondary);
            font-weight: 600;
        }
        .user-details p {
            margin: 0;
            color: #999;
            font-size: 12px;
        }
        .card-stats {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 20px;
            transition: all 0.3s;
        }
        .card-stats:hover {
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .card-stats-icon {
            font-size: 40px;
            color: var(--primary);
            margin-bottom: 10px;
        }
        .card-stats h6 {
            color: #999;
            font-size: 12px;
            margin-bottom: 5px;
        }
        .card-stats .value {
            font-size: 24px;
            font-weight: 700;
            color: var(--secondary);
        }
        .btn-logout {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-logout:hover {
            background-color: #a02a2a;
        }
        .content-section {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 20px;
        }
        .section-title {
            color: var(--secondary);
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <div class="logo">
                    <h3><i class="fas fa-dumbbell"></i> GYM UPI</h3>
                </div>
                <nav class="nav flex-column">
                    <a href="#" class="nav-link active"><i class="fas fa-home me-2"></i> Dashboard</a>
                    <a href="#" class="nav-link"><i class="fas fa-user me-2"></i> Profil</a>
                    <a href="#" class="nav-link"><i class="fas fa-dumbbell me-2"></i> Kelas Saya</a>
                    <a href="#" class="nav-link"><i class="fas fa-calendar me-2"></i> Jadwal</a>
                    <a href="#" class="nav-link"><i class="fas fa-chart-bar me-2"></i> Progress</a>
                    <a href="#" class="nav-link"><i class="fas fa-heart me-2"></i> Paket</a>
                    <hr style="border-color: rgba(255,255,255,0.1);">
                    <form method="POST" action="{{ route('logout') }}" style="margin-top: auto;">
                        @csrf
                        <button type="submit" class="nav-link w-100 text-start">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </button>
                    </form>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 main-content">
                <!-- Header -->
                <div class="header">
                    <div>
                        <h1>Selamat Datang, {{ Auth::user()->nama }}!</h1>
                    </div>
                    <div class="user-info">
                        <div class="user-details">
                            <h5>{{ Auth::user()->nama }}</h5>
                            <p>{{ Auth::user()->nim ?? 'Mahasiswa' }}</p>
                        </div>
                        <div class="user-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-stats">
                            <div class="card-stats-icon">
                                <i class="fas fa-dumbbell"></i>
                            </div>
                            <h6>KELAS AKTIF</h6>
                            <div class="value">3</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-stats">
                            <div class="card-stats-icon">
                                <i class="fas fa-calendar"></i>
                            </div>
                            <h6>SESI TERSISA</h6>
                            <div class="value">12</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-stats">
                            <div class="card-stats-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <h6>PROGRESS BULAN INI</h6>
                            <div class="value">75%</div>
                        </div>
                    </div>
                </div>

                <!-- Content Sections -->
                <div class="content-section">
                    <h2 class="section-title"><i class="fas fa-calendar me-2"></i>Jadwal Kelas Hari Ini</h2>
                    <p class="text-muted">Tidak ada kelas yang dijadwalkan untuk hari ini.</p>
                </div>

                <div class="content-section">
                    <h2 class="section-title"><i class="fas fa-star me-2"></i>Paket Saya</h2>
                    <p class="text-muted">Anda belum memilih paket. <a href="#">Lihat paket tersedia</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
