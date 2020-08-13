<?php include ROOT . '/views/blocks/header_admin.php'; ?>
<section>
    <div class="container">
        <div class="row">
            <br>
            <h4>Edit deposit #<?php echo $deposit['id']; ?></h4>
            <br/>
        </div>
        <div class="col-lg-4">
            <div class="login-form">
                <?php if (isset($errors) && is_array($errors)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php foreach ($errors as $error): ?>
                            <ul>
                                <li><?php echo $error; ?></li>
                            </ul>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <form action="#" method="post" enctype="multipart/form-data">

                    <p>Date start</p>
                    <input type="text" name="date_start" placeholder="" required="" value="<?php echo $deposit['date_start']; ?>">

                    <p>Date finish</p>
                    <input type="text" name="date_finish" placeholder="" required="" value="<?php echo $deposit['date_finish']; ?>">

                    <p>Sum deposit</p>
                    <input type="text" name="sum" placeholder="" required="" value="<?php echo $deposit['sum']; ?>">

                    <p>Interest rate</p>
                    <select name="interest_rate">
                        <option value="2" <?php if ($deposit['interest_rate'] == 2) echo ' selected="selected"'; ?>>9</option>
                        <option value="1" <?php if ($deposit['interest_rate'] == 1) echo ' selected="selected"'; ?>>7</option>
                        <option value="0" <?php if ($deposit['interest_rate'] == 0) echo ' selected="selected"'; ?>>5</option>
                    </select>

                    <p>Status</p>
                    <select name="status">
                        <option value="1" <?php if ($deposit['status'] == 1) echo ' selected="selected"'; ?>>Open</option>
                        <option value="0" <?php if ($deposit['status'] == 0) echo ' selected="selected"'; ?>>Close</option>
                    </select>
                    <br/><br/>
                    <input type="submit" name="submit" class="btn btn-primary" value="Save">
                    <br/><br/>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include ROOT . '/views/blocks/footer_admin.php';