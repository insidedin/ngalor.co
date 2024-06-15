    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/pageuser">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/pengaduanuser/indexuser">
                    <i class="bi bi-envelope"></i>
                    <span>Tambah Pengaduan</span>
                </a>
            </li><!-- End Manajemen Pengaduan Nav -->

            <hr>
            <li class="nav-item">
    <a class="nav-link collapsed" href="#" onclick="confirmLogout()">
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
            window.location.href = "/login";
        } else {
            // Jika pengguna membatalkan, tidak lakukan apa-apa
        }
    }
</script>
<!-- End Login Page Nav -->