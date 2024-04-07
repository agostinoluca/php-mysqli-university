<?php
// DATABASE CONNECTION

// CONSTANTS
define('DB_SERVERNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'university_test');

//CONNECTION
$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// CHECK CONTROL FOR ERROR
if ($connection && $connection->connect_error) {
    echo "Connection failed: " . $connection->connect_error;
    die;
}

$year = $_POST['year'];
$sql_students = "SELECT * FROM `students` WHERE `date_of_birth` LIKE '%{$year}%'";
$result = $connection->query($sql_students);

require_once __DIR__ . '/app/layout/head.php';
require_once __DIR__ . '/app/layout/header.php';
require_once __DIR__ . './app/layout/nav.php'

?>

<main class="pb-5">
    <div class="container">
        <div class="text-end pt-3">
            <form action="" method="POST">
                <label class="text-light fw-bold" for="year">Filter students by year of birth:</label>
                <input type="number" name="year" id="year" placeholder="type a year here">
                <input type="submit" value="Search">
            </form>
        </div>
        <div class="row">
            <?php
            if ($result->num_rows > 0) :
                while ($row = $result->fetch_assoc()) :
                    ['name' => $name, 'surname' => $surname, 'fiscal_code' => $fiscal_code, 'date_of_birth' => $birthday] = $row ?>
                    <div class="col g-3 ">
                        <div class="card" style="width:18rem;">
                            <div class="card-body d-flex flex-column gap-2">
                                <h5 class="card-title">Name: <?= $name ?></h5>
                                <h5 class="card-title">Surname: <?= $surname ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted ">Fiscal code: <?= $fiscal_code ?></h6>
                                <p class="card-text">Date of birth: <?= $birthday ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            elseif ($result->num_rows <= 0) : ?>
                <div class="container pt-5 ">
                    <h2 class="text-light">No results for your search.</h2>
                </div>
            <?php endif ?>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/app/layout/footer.php' ?>