<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Adminpanel</a></li>
                    <li><a href="/admin/deposit">Manage deposits</a></li>
                    <li class="active">Create deposit</li>
                </ol>
            </div>


            <h4>Добавить новый товар</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Data start</p>
                        <input type="text" name="data_start" placeholder="" value="">

                        <p>Data finish</p>
                        <input type="text" name="data_finish" placeholder="" value="">

                        <br/><br/>

                        <p>Sum deposit</p>
                        <input type="text" name="sum" placeholder="Sum deposit" value="">
                        <br/><br/>

                        <p>Status</p>
                        <select name="status">
                            <option value="1" selected="selected">Open</option>
                            <option value="0">Close</option>
                        </select>

                        <br/><br/>

                        <p>Interest rate</p>
                        <select name="interest_rate">
                            <option value="2" selected="selected">9</option>
                            <option value="1">7</option>
                            <option value="0">5</option>
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

<?php include ROOT . '/views/blocks/footer_admin.php';