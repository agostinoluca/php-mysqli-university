<?php
require_once __DIR__ . './app/layout/head.php';
require_once __DIR__ . './app/layout/header.php';
require_once __DIR__ . './app/layout/nav.php'
?>

<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="jumbotron text-center">
                    <h1 class="display-5">Welcome to University Database</h1>
                    <p class="lead mt-5">This is a simple web application to manage university data such as teachers and students.</p>
                    <hr class="my-4">
                    <p>Please navigate through the navigation bar above to explore the database.</p>
                </div>
            </div>
        </div>
        <div class="row pt-3 justify-content-center ">
            <img style="max-height: 500px; max-width: 900px" src="https://grammarist.com/wp-content/uploads/Grammarist-Featured-Image-V4-97.png" alt="university image">
        </div>
    </div>
</main>

<?php require_once __DIR__ . './app/layout/footer.php' ?>