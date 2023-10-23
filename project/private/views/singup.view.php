<?php $this->view('inc/top');  ?>
<?php $this->view('inc/nav');  ?>

<main>
    <div class="container">
        <?php
        // print_r($errors);

        ?>
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">Add User</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body p-3">
                                <form class="row g-3 needs-validation" novalidate method="post">
                                    <div class="col-12">
                                        <label for="yourFirstName" class="form-label">Your First Name</label>
                                        <input type="text" value="<?= get_var('fname') ?>" name="firstname" class="form-control" id="yourName" required>
                                        <div class="invalid-feedback">Please, enter your first name!</div>
                                        <div class="text-danger fw-bold p-2 text-decoration-underline"><?php echo isset($errors['first_name']) ? $errors['first_name'] : ""; ?></div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourLastName" class="form-label">Your Last Name</label>
                                        <input type="text" value="<?= get_var('lname') ?>" name="lastname" class="form-control" id="yourName" required>
                                        <div class="invalid-feedback">Please, enter your first name!</div>
                                        <div class="text-danger fw-bold p-2 text-decoration-underline"><?php echo isset($errors['last_name']) ? $errors['last_name'] : ""; ?></div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Your Email</label>
                                        <input type="email" value="<?= get_var('email') ?>" name="email" class="form-control" id="yourEmail" required>
                                        <div class="invalid-feedback">Please enter a valid Email address!</div>
                                        <div class="text-danger fw-bold p-2 text-decoration-underline"><?php echo isset($errors['email']) ? $errors['email'] : ""; ?></div>
                                    </div>

                                    <div class="col-12">
                                        <select class="form-select" aria-label="Default select example" name="gender" </option>
                                            <option <?= get_select('gender', '') ?> value="">--Select a Gender--</option>
                                            <option <?= get_select('gender', 'male') ?> value="male">Male</option>
                                            <option <?= get_select('gender', 'female',) ?> value="female">Female</option>
                                            <option <?= get_select('gender', 'Other') ?> value="Other">Other</option>
                                        </select>
                                        <div class="text-danger fw-bold p-2 text-decoration-underline"><?php echo isset($errors['gender']) ? $errors['gender'] : ""; ?></div>
                                    </div>

                                    <div class="col-12">
                                        <select class="form-select" aria-label="Default select example" name="rank" </option>
                                            <option value="Student">Student</option>
                                            <option value="Reception">Reception</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Super">*Super Admin</option>
                                        </select>
                                        <div class="text-danger fw-bold p-2 text-decoration-underline"><?php echo isset($errors['role']) ? $errors['role'] : ""; ?></div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" value="<?= get_var('password') ?>" name="password" class="form-control" id="yourPassword" required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="acceptTerms" required>
                                            <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                            <div class="invalid-feedback">You must agree before submitting.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Already have an account? <a href="login">Log in</a> </p>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

<?php $this->view('inc/down'); ?>