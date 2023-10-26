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
                    <div class="col-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 m-auto">
                        <div class="card shadow">
                            <div class="d-flex flex-row card-body profile-card pt-4 align-items-center justify-content-around">

                                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                                <div class="d-flex flex-column">
                                    <h5 class=""><?php echo $row->school ?> </h5>
                                    <h6><?php echo $row->user_id  ?></h6>
                                    <span><?php echo $row->date ?></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="<?= ROOT ?>switch_school/<?= $row->id ?>">
                                        <button type="button" class="btn btn-light text-info rounded-1 text-decoration-underline profile">
                                            Switch<i class="bi bi-toggles2"></i>
                                        </button>
                                    </a>
                                    <a href="<?php echo ROOT ?>schools/edit/<?php echo $row->id ?>">
                                        <button class="btn btn-light rounded-1 text-decoration-underline profile">Edit</button>
                                    </a>
                                    <button type="button" class="btn btn-light text-danger rounded-1 text-decoration-underline profile" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h1 class="text-danger">Sure to delete!</h1>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <a href="<?php echo ROOT ?>schools/delete/<?php echo $row->id ?>">
                                        <button type="button" class="btn btn-danger rounded-1 text-decoration-underline">Sure!</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            else : "<h1>No School Found!</h1>";
            endif;
            ?>
            <!-- Button trigger modal -->




        </div>
    </div>
</main><!-- End #main -->

<?php $this->view('inc/down');  ?>