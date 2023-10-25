<?php $this->view('inc/top');  ?>
<?php $this->view('inc/nav');  ?>

<main>
    <div class="container mt-5">
        <div class="row">
            <form class="row g-3 needs-validation" novalidate method="post">
                <div class="col-3 m-auto">
                    <div class="card">
                        <h3 class="p-3 text-center">ADD NEW school</h3>
                        <div class="card-body p-3">
                            <label for="yourUsername" class="form-label">Email</label>
                            <div class="input-group has-validation">
                                <input type="text" value="<?= get_var('school') ?>" name="school" class="form-control" required>
                                <div class="invalid-feedback">Please enter your school name.</div>
                                <div class="text-danger fw-bold p-2 text-decoration-underline"><?php echo isset($errors['school']) ? $errors['school'] : ""; ?></div>
                            </div>
                            <div class="col-5 mt-3">
                                <button class="btn btn-primary w-100" type="submit">Add school</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main><!-- End #main -->

<?php $this->view('inc/down');  ?>