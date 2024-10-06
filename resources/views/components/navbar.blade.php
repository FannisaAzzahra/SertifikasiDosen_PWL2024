<!-- Navbar HTML -->
<nav class="mb-70 navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" height="48" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <!-- Beranda -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('index') }}">Beranda</a>
                </li>
                
                <!-- Sertifikasi Dosen -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('sertifikasi*') ? 'active' : '' }}" href="{{ route('landing.sertifikasi') }}">Sertifikasi Dosen</a>
                </li>

                <!-- Pengajuan -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('pengajuan*') ? 'active' : '' }}" href="{{ route('landing.pengajuan') }}">Pengajuan</a>
                </li>

                <!-- Tentang -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tentang*') ? 'active' : '' }}" href="{{ route('landing.tentang') }}">Tentang</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="#">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
