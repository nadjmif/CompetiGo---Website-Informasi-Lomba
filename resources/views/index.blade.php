<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Lomba - CompetiGo</title>
    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* === Palet Warna ===
        #5D688A (utama)
        #F7A5A5 (aksen/alert)
        #FFDDB6 (sekunder)
        #FFF2EF (bg ringan)
        */

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #FFF2EF;
            color: #333;
        }

        /* ===== Header ===== */
        header {
            background: #5D688A;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 50px;
        }
        header .logo {
            font-weight: bold;
            font-size: 1.5rem;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 25px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }
        .profile-icon {
            background: #fff;
            color: #5D688A;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: bold;
            text-decoration: none;
        }

        /* ===== Hero Section ===== */
        .hero {
            background: linear-gradient(135deg, #FFDDB6, #F7A5A5);
            padding: 60px 40px;
            text-align: center;
            color: #2C2C54; /* warna font lebih gelap supaya kontras */
        }
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .hero p {
            font-size: 1.1rem;
            font-weight: 400;
            color: #444;
        }

        /* ===== Search & Filter ===== */
        .filters {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            padding: 20px;
        }
        .filters input[type="text"] {
            padding: 10px 15px;
            border-radius: 25px;
            border: none;
            width: 250px;
            font-size: 1rem;
            color: #5D688A;
        }
        .filters input::placeholder {
            color: #5D688A;
        }
        .filters select {
            padding: 8px 15px;
            border-radius: 20px;
            border: none;
            background: #F7A5A5;
            color: #fff;
            cursor: pointer;
            font-weight: 500;
        }
        .filters select:hover {
            background: #FFDDB6;
            color: #5D688A;
        }

        /* ===== Cards ===== */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            padding: 30px 50px;
        }
        .card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-8px);
        }
        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .card-content {
            padding: 20px;
        }
        .card h2 {
            margin: 0;
            font-size: 1.3rem;
            color: #5D688A;
            font-weight: 600;
        }
        .card p {
            font-size: 0.9rem;
            margin: 10px 0;
            color: #555;
        }
        .badge-kategori {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #FFDDB6;
            color: #5D688A;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        .deadline {
            display: inline-block;
            background: #F7A5A5;
            color: #fff;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 12px;
        }
        .btn-detail {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background: #5D688A;
            color: #fff;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        .btn-detail:hover {
            background: #F7A5A5;
            color: #fff;
        }
        .bookmark {
            position: absolute;
            top: 15px;
            left: 15px;
            font-size: 1.3rem;
            cursor: pointer;
            color: #ccc;
        }
        .bookmark.active {
            color: #F7A5A5;
        }

        /* ===== Pagination ===== */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            padding: 20px 0 40px;
        }
        .pagination a {
            padding: 8px 15px;
            border-radius: 10px;
            text-decoration: none;
            color: #5D688A;
            background: #FFF2EF;
            font-weight: bold;
        }
        .pagination a.active {
            background: #5D688A;
            color: #fff;
        }

        /* ===== Footer ===== */
        footer {
            background: #5D688A;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }
        footer a {
            color: #FFDDB6;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">CompetiGo</div>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Lomba</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Profil</a></li>
            </ul>
        </nav>
        <a href="#" class="profile-icon">👤 Profil</a>
    </header>

    <!-- Hero -->
    <section class="hero">
        <h1>Temukan Lomba Favoritmu</h1>
        <p>Ikuti berbagai kompetisi seru untuk mahasiswa & siswa</p>
    </section>

    <!-- Filters -->
    <div class="filters">
        <input type="text" placeholder="Cari Lomba...">

        <select>
            <option>Kategori</option>
            @foreach($kategori as $k)
                <option>{{ $k }}</option>
            @endforeach
        </select>

        <select>
            <option>Deadline</option>
            @foreach($deadline as $d)
                <option>{{ $d }}</option>
            @endforeach
        </select>

        <select>
            <option>Tag</option>
            @foreach($tag as $t)
                <option>{{ $t }}</option>
            @endforeach
        </select>
    </div>


    <!-- Grid Lomba -->
    <div class="grid">
        @foreach($lomba as $item)
            <div class="card">
                <div class="bookmark">♥</div>
                <span class="badge-kategori">{{ $item['kategori'] }}</span>
                <img src="{{ $item['banner'] }}" alt="{{ $item['nama'] }}">
                <div class="card-content">
                    <span class="deadline">Deadline: {{ $item['deadline'] }}</span>
                    <h2>{{ $item['nama'] }}</h2>
                    <p>{{ $item['deskripsi'] }}</p>
                    <a href="#" class="btn-detail">Lihat Detail</a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 CompetiGo. All rights reserved. |
           <a href="#">Kebijakan Privasi</a> |
           <a href="#">Syarat & Ketentuan</a>
        </p>
    </footer>
</body>
</html>
