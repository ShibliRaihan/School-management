<div class="container-fluid">
    <?php $this->view('inc/breadcrumb'); ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-0 pt-0">
        <div class="container-fluid">
            <a class="navbar-brand logos" href="#"><img class="img-fluid" src="https://png.pngtree.com/png-clipart/20211017/original/pngtree-school-logo-png-image_6851480.png" alt="" srcset=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-items active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-items text-uppercase" href="#">School</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-items text-uppercase" href="#">Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-items text-uppercase" href="#">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-items text-uppercase" href="#">Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-items text-uppercase" href="#">Tests</a>
                    </li>
                    <li class="nav-item dropdown">

                    </li>
                </ul>
            </div>
            <div class="">
                <div class="dropdown">
                    <!-- <?php
                    if (Auth::user()) {
                    ?>
                        <h1 class="d-inline fw-bolder text-muted m-0 p-0">.</h1>
                    <?php
                    }
                    ?> -->
                    <button class="btn border-0 dropdown-toggle animate-charcter ps-0 ms-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php
                        echo Auth::getFirstname();
                        ?>
                    </button>
                    <ul class="ends dropdown-menu" aria-labelledby="dropdownMenuButton1" style="right: 0 !important; left: auto !important;">
                        <li><a class="dropdown-item" href="/School-managment/School-management/project/public/profile">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        <li><a class="dropdown-item" href="<?= ROOT?>logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<hr class="m-0 p-0" />