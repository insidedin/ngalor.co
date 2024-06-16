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
    <a class="nav-link collapsed" href="pageadmin/event/pesanan">
        <i class="fas fa-ticket-alt"></i>
        <span>Manajemen Pemesanan Tiket</span>
    </a>
</li><!-- End Manajemen Pemesanan Tiket Nav -->

<li class="nav-item">
    <a class="nav-link collapsed" href="pageadmin/event/index">
        <i class="fas fa-calendar-alt"></i>
        <span>Manajemen Konten Event</span>
    </a>
</li><!-- End Manajemen Konten Event Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pageadmin/users/indexuser">
                    <i class="bi bi-people"></i>
                    <span>Profile Admin</span>
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