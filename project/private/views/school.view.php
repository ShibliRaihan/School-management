<?php $this->view('inc/top');  ?>
<?php $this->view('inc/nav');  ?>

<main>
    <a href="<?php ROOT ?>schools/add">
        <button class="btn btn-light rounded-1 text-decoration-underline profile mt-4 ms-5 border "><i class="bi bi-patch-plus me-2"></i> Add New</button>
    </a>
    <div class="container mt-5">
        <div class="row">
            <?php
            if ($rows) :
                foreach ($rows as $row) {
            ?>
                    <div class="col-6 col-xl-4 col-lg-6 col-md-12 col-sm-12 m-auto">
                        <div class="card shadow">
                            <div class="d-flex flex-row card-body profile-card pt-4 align-items-center justify-content-around">

                                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                                <div class="d-flex flex-column">
                                    <h5 class=""><?php echo $row->school ?> </h5>
                                    <h6><?php echo $row->user_id  ?></h6>
                                    <span><?php echo $row->date ?></span>
                                </div>
                                <h6 class=" text-end fw-bold"></h6>
                                <button class="btn btn-light rounded-1 text-decoration-underline profile">more..</button>

                            </div>
                        </div>
                    </div>
            <?php
                }
            else : "<h1>No School Found!</h1>";
            endif;
            ?>

        </div>
    </div>
</main><!-- End #main -->

<?php $this->view('inc/down');  ?>