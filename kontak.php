<?php
session_start();

// Jika belum login, arahkan ke halaman login
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
  header('Location: login.php');
  exit;
}
?>

<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Kontak</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

<!-- Header -->
<header class="bg-white shadow-md">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
    <div class="flex items-center space-x-3">
      <img src="assets/logo1.png" alt="Logo RW" class="h-10 w-10 rounded-full">
      <h1 class="text-xl font-semibold text-gray-800">Data Rukun Warga Curahgrinting</h1>
    </div>

    <!-- Navigasi -->
    <nav class="hidden md:flex space-x-6 text-gray-600 font-medium">
      <a href="index.php" class="hover:text-blue-600 transition">Beranda</a>
      <a href="datawarga.php" class="hover:text-blue-600 transition">Data Warga</a>
      <a href="kontak.php" class="text-blue-600 font-semibold">Kontak</a>
      <a href="logout.php" class="hover:text-blue-600 transition">Logout</a>
    </nav>

    <button id="mobile-menu-button" class="md:hidden text-gray-600 hover:text-blue-600 focus:outline-none">
      <i class="fas fa-bars fa-lg"></i>
    </button>
  </div>

  <!-- Mobile Menu -->
  <nav id="mobile-menu" class="md:hidden bg-white border-t border-gray-200 hidden">
    <a href="index.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">Beranda</a>
    <a href="datawarga.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">Data Warga</a>
    <a href="kontak.php" class="block px-4 py-3 text-blue-600 font-semibold bg-gray-100">Kontak</a>
    <a href="logout.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">Logout</a>
  </nav>
</header>

<!-- Konten Utama -->
<main class="flex-grow max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <h2 class="text-3xl font-semibold text-gray-900 mb-8">Kontak Kami</h2>
  <div class="bg-white rounded-lg shadow p-8 grid grid-cols-1 md:grid-cols-2 gap-10">
    <div>
      <h3 class="text-xl font-semibold text-gray-900 mb-4">Informasi Kontak</h3>
      <p class="text-gray-700 mb-6">
        Jika Anda memiliki pertanyaan atau ingin menghubungi kami, silakan gunakan informasi di bawah ini atau kirim pesan melalui formulir kontak.
      </p>
      <ul class="space-y-4 text-gray-700">
        <li class="flex items-center space-x-3">
          <i class="fas fa-map-marker-alt text-blue-600 text-lg w-6"></i>
          <span>Jl. Citarum No. 01, Curahgrinting, Probolinggo, Jawa Timur</span>
        </li>
        <li class="flex items-center space-x-3">
          <i class="fas fa-phone-alt text-green-600 text-lg w-6"></i>
          <span>+(0335) 422080</span>
        </li>
        <li class="flex items-center space-x-3">
          <i class="fas fa-envelope text-pink-600 text-lg w-6"></i>
          <span>kontak@curahgrintingprobolinggo.id</span>
        </li>
        <li class="flex items-center space-x-3">
          <i class="fas fa-clock text-yellow-600 text-lg w-6"></i>
          <span>Senin - Jumat: 08.00 - 16.00 WIB</span>
        </li>
      </ul>
      <div class="mt-8">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Lokasi Kami</h3>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <div class="relative w-full h-96">
            <iframe
              class="rounded-lg shadow-md w-full h-full"
              src="https://www.google.com/maps/embed?pb=!4v1753211859191!6m8!1m7!1s0VrOK6WHye1_CdN5kXMkPA!2m2!1d-7.766813481178!2d113.1955138874708!3f233.46!4f0!5f0.7820865974627469"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- Formulir -->
    <div>
      <h3 class="text-xl font-semibold text-gray-900 mb-4">Kirim Pesan</h3>
      <form action="" method="POST" class="space-y-6">
        <div>
          <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
          <input type="text" name="name" id="name" required placeholder="Masukkan nama lengkap Anda"
            class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
          <input type="email" name="email" id="email" required placeholder="Masukkan email Anda"
            class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <label for="subject" class="block text-gray-700 font-medium mb-2">Subjek</label>
          <input type="text" name="subject" id="subject" required placeholder="Subjek pesan"
            class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
          <textarea name="message" id="message" rows="5" required placeholder="Tulis pesan Anda di sini"
            class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>
        <button type="submit"
          class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-md transition">
          Kirim Pesan
        </button>
      </form>

      <?php
      // Tangani pengiriman formulir
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        echo "<p class='mt-6 text-green-600'>Terima kasih $name, pesan Anda telah terkirim!</p>";
        // Anda bisa simpan ke DB, kirim email, atau log pesan di sini
      }
      ?>
    </div>
  </div>
</main>

<!-- Footer -->
<footer class="bg-white border-t border-gray-200 mt-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col sm:flex-row justify-between items-center text-gray-600 text-sm">
    <p>© 2025 Curahgrinting. Semua hak cipta dilindungi.</p>
    <div class="flex space-x-4 mt-3 sm:mt-0">
      <a href="#" class="hover:text-blue-600" aria-label="Facebook"><i class="fab fa-facebook fa-lg"></i></a>
      <a href="#" class="hover:text-blue-400" aria-label="Twitter"><i class="fab fa-twitter fa-lg"></i></a>
      <a href="#" class="hover:text-pink-600" aria-label="Instagram"><i class="fab fa-instagram fa-lg"></i></a>
    </div>
  </div>
</footer>

<script>
  const btn = document.getElementById('mobile-menu-button');
  const menu = document.getElementById('mobile-menu');
  btn.addEventListener('click', () => menu.classList.toggle('hidden'));
</script>

</body>
</html>
