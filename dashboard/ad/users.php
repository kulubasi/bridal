<?php
include '../../config.php';



if (isset($_POST['submit'])) {
    $fname           = $_POST['fname'];
    $lname       = $_POST['lname'];
    $phone          = $_POST['phone'];
    $email          = $_POST['email'];
    $password       = $_POST['password'];
    $usertype       = $_POST['usertype'];
    $encrypt        = md5($password);
    // $added_by       = $_SESSION['id'];

    // File upload path
    // $photo = $_FILES["photo"]["name"];
    // $tempname = $_FILES["photo"]["tmp_name"];
    // $folder = "../uploads/users/" . $photo;
    // $store = move_uploaded_file($tempname, $folder);

    $sql = "INSERT INTO users(fname, lname, phone, email, usertype, pswd) VALUES('$fname', '$lname', '$phone', '$email', '$usertype','$encrypt')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("location:users.php");
    }
    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>users</title>
    <?php include 'head.php'; ?>
</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <?php include 'sidebar.php'; ?>

    <div class="content-page">
        <div class="content">
            <?php include 'topbar.php'; ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="users.php">Users</a></li>
                                    <li class="breadcrumb-item active">Users</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Create New User</h4>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name"> First Name</label>
                                        <input type="text" name="fname" id="" class="form-control" placeholder="Enter First name">
                                        <small id="helpId" class="text-muted">*</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="username"> Last name</label>
                                        <input type="text" name="lname" id="" class="form-control" placeholder="Enter Last name">
                                        <small id="helpId" class="text-muted">*</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" id="" class="form-control" placeholder="Enter Phone">
                                        <small id="helpId" class="text-muted">*</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="" class="form-control" placeholder="Enter Email">
                                        <small id="helpId" class="text-muted">*</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">User type</label>
                                        <select name="usertype" class="form-control">
                                            <option>-- Select User Category --</option>
                                            <option value="subadmin">Sub Administrator</option>
                                            <!-- <option value="admin">Administrator</option> -->
                                        </select>
                                        <small id="helpId" class="text-muted">*</small>
                                    </div>


                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="" class="form-control" placeholder="Enter Password">
                                        <small id="helpId" class="text-muted">*</small>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Users</h4>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-sm table-nowrap table-centered mb-0">
                                            <thead>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th></th>
                                            </thead>
                                            <tbody style="text-transform: uppercase; font-size:11px;">
                                                <?php
                                                $count = 0;
                                                // $email = $_SESSION['email'];
                                                $query = mysqli_query($conn, "SELECT * FROM users");
                                                while ($row = mysqli_fetch_array($query)) {
                                                    $count++;
                                                ?>
                                                    <tr>
                                                        <td><?= $count ?></td>
                                                        <td><?= ($row['fname']); ?></td>
                                                        <td><?= ($row['lname']); ?></td>
                                                        <td><?= ($row['phone']); ?></td>
                                                        <td><?= ($row['email']); ?></td>
                                                        <td>
                                                            
                                                            <a href="delete_user.php?id=<?= $row['id']; ?>" class="btn btn-danger"><i class="las la-trash "></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include "datatables.php"; ?>
    <?php include 'footer.php' ?>
</body>

</html>