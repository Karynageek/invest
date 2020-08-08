<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Adminpanel</a></li>
                    <li><a href="/admin/deposit">Manage deposits</a></li>
                    <li class="active">Edit deposit</li>
                </ol>
            </div>


            <h4>Edit deposit #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Data start</p>
                        <input type="text" name="data_start" placeholder="" value="<?php echo $deposit['data_start']; ?>">

                        <p>Data finish</p>
                        <input type="text" name="data_finish" placeholder="" value="<?php echo $deposit['data_finish']; ?>">

                        <p>Sum deposit</p>
                        <input type="text" name="sum" placeholder="" value="<?php echo $deposit['sum']; ?>">

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

                        <input type="submit" name="submit" class="btn btn-default" value="Save">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php';