<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="user-profile">
        <div class="user-image">
            <img src="../assets/images/faces/face28.png">
        </div>
        <div class="user-name">
            Edward Spencer
        </div>
        <div class="user-designation">
            Developer
        </div>
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Beranda</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('tahun_akademik')?>">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Tahun Akademik</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('mahasiswa')?>">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Mahasiswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('Krs')?>">
                <i class="icon-file menu-icon"></i>
                <span class="menu-title">KRS</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('perguruantinggi')?>">
                <i class="icon-command menu-icon"></i>
                <span class="menu-title">Profile Perguruan Tinggi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('program_studi')?>">
                <i class="icon-help menu-icon"></i>
                <span class="menu-title">Program Studi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Dosen</span>
                <!-- <i class="menu-arrow"></i> -->
            </a>
            <!-- <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?=base_url('dosen_pengampuh')?>"> Dosen Pengampuh </a>
                    </li>
            </div> -->
        </li>        
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('jadwal')?>">
                <i class="icon-book menu-icon"></i>
                <span class="menu-title">Jadwal</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('user')?>">
                <i class="icon-book menu-icon"></i>
                <span class="menu-title">User</span>
            </a>
        </li>
    </ul>
</nav>