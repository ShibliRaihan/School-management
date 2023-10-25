<?php $this->view('inc/top');  ?>
<?php $this->view('inc/nav');  ?>

<main>
    <div class="container mt-5">
        <div class="row">
            <?php
            foreach ($rows as $row) {
            ?>
                <div class="col-6 col-xl-4 col-lg-6 col-md-12 col-sm-12 m-auto">
                    <div class="card shadow">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <h2><?php echo $row->firstname ?></h2>
                            <h6 class="text-end fw-bold">Role: <span class="animate-charcter"><?php echo $row->rank ?></span></h6>
                            <button class="btn btn-light rounded-1 text-decoration-underline profile">Profile</button>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</main><!-- End #main -->

<?php $this->view('inc/down');  ?>