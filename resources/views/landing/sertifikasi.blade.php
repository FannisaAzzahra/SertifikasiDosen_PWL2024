{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Katalog Kompetensi Dosen PENS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 15px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-bar input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 60%;
        }

        .search-bar button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .card h2 {
            margin-top: 0;
        }

        .card p {
            margin-bottom: 10px;
            color: #666;
        }

        .card a {
            display: block;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        .info-icon {
            font-size: 1.2rem;
            color: #007bff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>E-KATALOG KOMPETENSI DOSEN</h1>
            <nav>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Kompetensi Dosen</a></li>
                    <li><a href="#">Produk Unggulan dan HKI</a></li>
                    <li><a href="#">Tentang</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="container">
            <h1>Kompetensi Dosen PENS</h1>

            <div class="search-bar">
                <input type="text" placeholder="Cari nama dosen atau kompetensi atau program studi...">
                <button>Cari</button>
                <span class="info-icon">i</span>
            </div>

            <div class="card-container">
                <div class="card">
                    <img src="https://picsum.photos/200/300" alt="Gambar Dosen">
                    <h2>Luki Septya Mahendra</h2>
                    <p>#D4Teknik Elektroindustri</p>
                    <p>Industrial Automation, Renewable Energy, Power Electronics</p>
                    <a href="#">Lihat Profil</a>
                </div>
                <div class="card">
                    <img src="https://picsum.photos/200/300" alt="Gambar Dosen">
                    <h2>Kholid Fathoni</h2>
                    <p>#D4TeknologiGame</p>
                    <p>Game Design, Artificial Intelligence, Immersive Technology, Infor...</p>
                    <a href="#">Lihat Profil</a>
                </div>
                <div class="card">
                    <img src="https://picsum.photos/200/300" alt="Gambar Dosen">
                    <h2>Iwan Kurnianto Wibowo</h2>
                    <p>#D4TeknikKomputer</p>
                    <p>Embedded System, Robotics, Computer Vision</p>
                    <a href="#">Lihat Profil</a>
                </div>
                <div class="card">
                    <img src="https://picsum.photos/200/300" alt="Gambar Dosen">
                    <h2>Zaqiatud Darojah</h2>
                    <p>#D4Teknik Mekatronika</p>
                    <p>Mathematics, Machine learning, Data Science</p>
                    <a href="#">Lihat Profil</a>
                </div>
                <div class="card">
                    <img src="https://picsum.photos/200/300" alt="Gambar Dosen">
                    <h2>Afifah Dwi Ramadhani</h2>
                    <p>#D4Teknologi Rekayasalnternet</p>
                    <p>Wireless Sensor Network</p>
                    <a href="#">Lihat Profil</a>
                </div>
                <div class="card">
                    <img src="https://picsum.photos/200/300" alt="Gambar Dosen">
                    <h2>Alrijadjis</h2>
                    <p>#D4Teknik Elektronika</p>
                    <p>Control System, Artificial Intelligence, Renewable Energy</p>
                    <a href="#">Lihat Profil</a>
                </div>
                <div class="card">
                    <img src="https://picsum.photos/200/300" alt="Gambar Dosen">
                    <h2>Adytia Darmawan</h2>
                    <p>#D4Teknik Mekatronika</p>
                    <p>Robotics</p>
                    <a href="#">Lihat Profil</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 E-Katalog Kompetensi Dosen PENS</p>
        </div>
    </footer>
</body>
</html> --}}


<!DOCTYPE html>
<html>
<head>
<title>E-Katalog Kompetensi Dosen</title>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

header {
  background-color: #333;
  color: #fff;
  padding: 1rem 0;
  text-align: center;
}

header img {
  width: 50px;
  height: 50px;
  margin-right: 10px;
}

nav {
  background-color: #fff;
  padding: 1rem;
  text-align: center;
}

nav a {
  color: #333;
  text-decoration: none;
  margin: 0 1rem;
  padding: 0.5rem 1rem;
  border-radius: 5px;
}

nav a:hover {
  background-color: #eee;
}

.container {
  padding: 2rem;
  max-width: 960px;
  margin: 0 auto;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 2rem;
}

.search-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 2rem;
}

.search-container input {
  width: 100%;
  padding: 1rem;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.search-container button {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 1rem 2rem;
  border-radius: 5px;
  cursor: pointer;
}

.search-container i {
  font-size: 2rem;
  color: #333;
}

.dosen-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
}

.dosen-card {
  border: 1px solid #ddd;
  padding: 1rem;
  border-radius: 5px;
}

.dosen-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 5px;
  margin-bottom: 1rem;
}

.dosen-card h3 {
  margin-bottom: 0.5rem;
}

.dosen-card p {
  margin-bottom: 1rem;
}

.dosen-card a {
  display: inline-block;
  background-color: #333;
  color: #fff;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 5px;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>
<header>
  <img src="logo.png" alt="Logo">
  <h1>E-Katalog Kompetensi Dosen</h1>
</header>

<nav>
  <a href="#">Beranda</a>
  <a href="#">Kompetensi Dosen</a>
  <a href="#">Produk Unggulan dan HKI</a>
  <a href="#">Tentang</a>
  <a href="#">Login</a>
</nav>

<div class="container">
  <h1>Kompetensi Dosen PENS</h1>

  <div class="search-container">
    <input type="text" placeholder="Cari nama dosen atau kompetensi atau program studi...">
    <button>Cari</button>
    <i class="fas fa-info-circle"></i>
  </div>

  <h2>Daftar Dosen PENS di Semua Departemen dengan kompetensi Semua Kompetensi</h2>
  <p>(109 data Dosen ditemukan)</p>

  <div class="dosen-container">
    <div class="dosen-card">
      <img src="dosen1.jpg" alt="Foto Dosen">
      <h3>Luki Septya Mahendra</h3>
      <p>#DTE #D4Teknik Elektroindustri</p>
      <p>Industrial Automation, Renewable Energy, Power Electronics</p>
      <a href="#">Lihat Profil</a>
    </div>

    <div class="dosen-card">
      <img src="dosen2.jpg" alt="Foto Dosen">
      <h3>Kholid Fathoni</h3>
      <p>#DTMK #D4TeknologiGame</p>
      <p>Game Design, Artificial Intelligence, Immersive Technology, Information Systems</p>
      <a href="#">Lihat Profil</a>
    </div>

    <div class="dosen-card">
      <img src="dosen3.jpg" alt="Foto Dosen">
      <h3>Iwan Kurnianto Wibowo</h3>
      <p>#DTIK #D4TeknikKomputer</p>
      <p>Embedded System, Robotics, Computer Vision</p>
      <a href="#">Lihat Profil</a>
    </div>

    <div class="dosen-card">
      <img src="dosen4.jpg" alt="Foto Dosen">
      <h3>Zaqiatud Darojah</h3>
      <p>#DTME #D4Teknik Mekatronika</p>
      <p>Mathematics, Machine Learning, Data Science</p>
      <a href="#">Lihat Profil</a>
    </div>

    <div class="dosen-card">
      <img src="dosen5.jpg" alt="Foto Dosen">
      <h3>Afifah Dwi Ramadhani</h3>
      <p>#DTE #D4Teknologi Rekayasalnternet</p>
      <p>Wireless Sensor Network</p>
      <a href="#">Lihat Profil</a>
    </div>

    <div class="dosen-card">
      <img src="dosen6.jpg" alt="Foto Dosen">
      <h3>Alrijadjis</h3>
      <p>#DTE #D4Teknik Elektronika</p>
      <p>Control System, Artificial Intelligence, Renewable Energy</p>
      <a href="#">Lihat Profil</a>
    </div>

    <div class="dosen-card">
      <img src="dosen7.jpg" alt="Foto Dosen">
      <h3>Adytia Darmawan</h3>
      <p>#DTME #D4Teknik Mekatronika</p>
      <p>Robotics</p>
      <a href="#">Lihat Profil</a>
    </div>
  </div>
</div>
</body>
</html>