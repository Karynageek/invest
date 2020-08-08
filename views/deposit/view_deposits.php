<?php include ROOT . '/views/blocks/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>My Deposits</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date start</th>
                                <th scope="col">Date finish</th>
                                <th scope="col">Interest rate, %</th>
                                <th scope="col">Sum, $</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($deposits as $depositItem): ?>
                                <tr>
                                    <td><p class="card-title"><?php echo $depositItem['id']; ?></p></td>
                                    <td><p class="card-title"><?php echo $depositItem['date_start']; ?></p></td>
                                    <td><p class="card-title"><?php echo $depositItem['date_finish']; ?></p></td>
                                    <td><p class="card-title"><?php echo Deposit::getRate($depositItem['interest_rate']); ?></p></td>
                                    <td><p class="card-title"><?php echo $depositItem['sum']; ?></p></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include ROOT . '/views/blocks/footer.php'; ?>