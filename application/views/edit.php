<!DOCTYPE html>
<html lang="en">

<head>
    <title>Crud-Edit View</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets//css/bootstrap.min.css'; ?>">
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <form method="post" name="createUser" action="<?php echo base_url() . 'index.php/user/edit/' . $user['id']; ?>">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>FirstName</label>
                        <input type="text" name="fname" value="<?php echo set_value('fname', $user['fname']); ?>" class="form-control">
                        <!-- <?php echo form_error('fname'); ?> -->
                    </div>
                    <div class="form-group">
                        <label>LastName</label>
                        <input type="text" name="lname" value="<?php echo set_value('lname', $user['lname']); ?>" class="form-control">
                        <!-- <?php echo form_error('lname'); ?> -->
                    </div>
                    <div class="form-group">
                        <label>phone</label>
                        <input type="text" name="phone" value="<?php echo set_value('phone', $user['phone']); ?>" class="form-control">
                        <!-- <?php echo form_error('phone'); ?> -->
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name="email" value="<?php echo set_value('email', $user['email']); ?>" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-secondary  my-2 mx-2">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>