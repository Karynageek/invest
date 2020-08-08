<?php include ROOT . '/views/blocks/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <h4>Create deposit</h4>

            <br/>
        </div>
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

                        <p>Date finish</p>
                        <input type="text" name="date_finish" placeholder="Date finish" value="">

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

                        <p>Sum deposit</p>
                        <input type="text" name="sum" placeholder="Sum deposit" value="">
                        <br/><br/>

                        <input type="submit" name="submit" class="btn btn-primary" value="Save">
                        
                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    
</section>

<?php include ROOT . '/views/blocks/footer.php';