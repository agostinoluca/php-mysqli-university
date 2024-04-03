<main>
    <div class="container">
        <div class="row">
            <?php while ($row = $result->fetch_assoc()) : ['name' => $name, 'surname' => $surname, 'fiscal_code' => $fiscal_code, 'date_of_birth' => $birthday] = $row ?>
                <div class="col g-3 ">
                    <div class="card" style="width:18rem;">
                        <div class="card-body d-flex flex-column gap-2">
                            <h5 class="card-title">Name:<?= $name ?></h5>
                            <h5 class="card-title">Surname:<?= $surname ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Fiscal code: <?= $fiscal_code ?></h6>
                            <p class="card-text">Date of birth: <?= $birthday ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </div>

</main>