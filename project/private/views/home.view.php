<?php $this->view('inc/top');  ?>
<?php $this->view('inc/nav');  ?>

<main>
    <div class="container">

        <section class="section  d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-center">Home Page.</h1>
        </section>
    </div>
</main><!-- End #main -->
        <?php
            print_r($rows);
        ?>
<?php $this->view('inc/down');  ?>