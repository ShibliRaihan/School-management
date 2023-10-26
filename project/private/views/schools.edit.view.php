<?php $this->view('inc/top');  ?>
<?php $this->view('inc/nav');  ?>

<main>
    <a href="<?php ROOT ?>schools/add">
        <button class="btn btn-light rounded-1 text-decoration-underline profile mt-4 ms-5 border "><i class="bi bi-patch-plus me-2"></i> Edit school</button>
    </a>
    <div class="container mt-5">
        <div class="row">
            <?php
            if ($row) :
                foreach ($row as $row) {
            ?>
                    <form class="row g-3 needs-validation" novalidate method="post">
                        <div class="col-3 m-auto">
                            <div class="card">
                                <h3 class="p-3 text-center">Edit school</h3>
                                <div class="card-body p-3">
                                    <label for="yourUsername" class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                        <input type="text" value="<?php echo $row->school ?>" name="school" class="form-control" required>
                                        <div class="invalid-feedback">Please enter your school name.</div>
                                        <div class="text-danger fw-bold p-2 text-decoration-underline"><?php echo isset($errors['school']) ? $errors['school'] : ""; ?></div>
                                    </div>
                                    <div class="col-5 mt-3">
                                        <button class="btn btn-primary w-100" type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
            <?php
                }
            else : "<h1>No School Found!</h1>";
            endif;
            ?>

        </div>
    </div>
</main><!-- End #main -->

<?php $this->view('inc/down');  ?>