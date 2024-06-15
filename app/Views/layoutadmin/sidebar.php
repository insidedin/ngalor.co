    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/pageadmin">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/pengaduan">
                    <i class="bi bi-envelope"></i>
                    <span>Manajemen Pengaduan</span>
                </a>
            </li><!-- End Manajemen Pengaduan Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/konten">
                    <i class="bi bi-file-text"></i>
                    <span>Manajemen Konten</span>
                </a>
            </li><!-- End Manajemen Konten Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/users">
                    <i class="bi bi-people"></i>
                    <span>Manajemen User</span>
                </a>
            </li><!-- End Manajemen User Nav -->
            <hr>
            <li class="nav-item">
    <a class="nav-link collapsed" href="/login" onclick="confirmLogout()">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Logout</span>
    </a>
</li>

        </ul>

    </aside><!-- End Sidebar-->

    <script>
    function confirmLogout() {
        // Tampilkan pesan konfirmasi
        if (confirm("Apakah Anda yakin ingin keluar?")) {
            // Jika pengguna mengonfirmasi, arahkan ke halaman logout
            window.location.href = "pages/login";
        } else {
            // Jika pengguna membatalkan, tidak lakukan apa-apa
        }
    }
</script>
<!-- End Login Page Nav -->