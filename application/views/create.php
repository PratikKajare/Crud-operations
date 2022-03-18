<!DOCTYPE html>
<html lang="en">

<head>
    <title>Crud</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets//css/bootstrap.min.css'; ?>">
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <form method="post" name="createUser" action="<?php echo base_url() . 'index.php/user/create'; ?>">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>FirstName</label>
                        <input type="text" name="fname" value="" class="form-control">
                        <?php echo form_error('fname'); ?>
                    </div>
                    <div class="form-group">
                        <label>LastName</label>
                        <input type="text" name="lname" value="" class="form-control">
                        <?php echo form_error('lname'); ?>
                    </div>
                    <div class="form-group">
                        <label>phone</label>
                        <input type="text" name="phone" value="" class="form-control">
                        <?php echo form_error('phone'); ?>
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name="email" value="" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-secondary  my-2 mx-2">insert</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>