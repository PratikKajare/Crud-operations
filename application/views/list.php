<!DOCTYPE html>
<html lang="en">

<head>
    <title>Crud-View</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets//css/bootstrap.min.css'; ?>">
</head>

<body>

    <div class="container" style="padding-top: 10px;">
        <div classs="col-6">
            <h2>View Users</h2>
            <div class="col-6">
                <div classs="col"><a href="<?php echo base_url() . 'index.php/user/create'; ?>" class="btn btn-success">Create</a></div>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php if (!empty($users)) {
                        foreach ($users as $user) { ?>
                            <tr>
                                <td><?php echo $user['id'] ?></td>
                                <td><?php echo $user['fname'] ?></td>
                                <td><?php echo $user['lname'] ?></td>
                                <td><?php echo $user['phone'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'index.php/user/edit/' . $user['id'] ?>" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url() . 'index.php/user/delete/' . $user['id'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php }
                    } else { ?>
                        <tr>
                            <td colspan="4">Records Are Not Found</td>
                        </tr>
                    <?php } ?>

                </table>
            </div>
        </div>
    </div>
</body>

</html>