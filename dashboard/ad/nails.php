<?php
include '../../config.php';



if (isset($_POST['submit'])) {
    $desc= $_POST['desc'];
    $img=$_POST['img'];
   
    // $added_by       = $_SESSION['id'];

    // // File upload path
    // $photo = $_FILES["img"]["name"];
    // $tempname = $_FILES["img"]["tmp_name"];
    // $folder = "../images/" . $photo;
    // $store = move_uploaded_file($tempname, $folder);

    $sql = "INSERT INTO nails(image,descri) VALUES('$img', '$desc')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("location:nails.php");
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
                                    <li class="breadcrumb-item"><a href="users.php">Nails</a></li>
                                    <li class="breadcrumb-item active">Nails</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add New Nail Styles</h4>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name"> Image</label>
                                        <input type="text" name="img" id="" class="form-control" placeholder="Insert link to image" required>
                                        <small id="helpId" class="text-muted">*</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="username"> Description</label>
                                        <input type="text" name="desc" id="" class="form-control" placeholder="Enter Description" required>
                                        <small id="helpId" class="text-muted">*</small>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn text-white" style="background-color:#97001a;">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Current Nail Styles</h4>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-sm table-nowrap table-centered mb-0">
                                            <thead>
                                                <th>#</th>
                                                <th>Image Name</th>
                                                <th>Description</th>
                                                <th></th>
                                            </thead>
                                            <tbody style="text-transform: uppercase; font-size:11px;">
                                                <?php
                                                $count = 0;
                                                // $email = $_SESSION['email'];
                                                $query = mysqli_query($conn, "SELECT * FROM nails");
                                                while ($row = mysqli_fetch_array($query)) {
                                                    $count++;
                                                ?>
                                                    <tr>
                                                        <td><?= $count ?></td>
                                                        <td><a href="<?= ($row['image']); ?>"><?= ($row['image']); ?></a></td>
                                                        <td><?= ($row['descri']); ?></td>
                                                        <td>
                                                            <a href="edit_nails.php?id=<?= $row['id'];?>" class="btn btn-warning"><i class="las la-edit "></i></a>
                                                            <a href="delete_nails.php?id=<?= $row['id']; ?>" class="btn btn-danger"><i class="las la-trash "></i>
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