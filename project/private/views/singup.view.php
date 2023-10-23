<?php $this->view('inc/top');  ?>
<?php $this->view('inc/nav');  ?>

<main>
    <div class="container">
        <?php
        print_r($errors);
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
                                        <input type="text" name="fname" class="form-control" id="yourName" required>
                                        <div class="invalid-feedback">Please, enter your first name!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourLastName" class="form-label">Your Last Name</label>
                                        <input type="text" name="lname" class="form-control" id="yourName" required>
                                        <div class="invalid-feedback">Please, enter your first name!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Your Email</label>
                                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                                        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                    </div>

                                    <div class="col-12">
                                        <select class="form-select" aria-label="Default select example" name="gender">
                                            <option disabled>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <select class="form-select" aria-label="Default select example" name="role">
                                            <option disabled>Select Rank</option>
                                            <option value="Student">Student</option>
                                            <option value="Reception">Reception</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Super">*Super Admin</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="username" class="form-control" id="yourUsername" required>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
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