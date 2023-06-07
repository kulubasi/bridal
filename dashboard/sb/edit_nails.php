<?php
include '../../config.php';



$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $imglink  = $_POST['imglink'];
    $descri = $_POST['descri'];
    

    $sql = "UPDATE nails SET image='$imglink', descri='$descri'WHERE id = $id";
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
    <title>edit user</title>
    <?php include 'head.php';?>
</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <?php include 'sidebar.php'; ?>
    <div class="content-page">
        <div class="content">
            <?php include 'topbar.php';?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="#">Settings</a></li>
                                    <li class="breadcrumb-item active">Edit Nails Photos</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 m-auto">
                        <div class="card">
                            <div class="card-header">
                            <h4>Edit Nails photos <a href="nails.php" class="btn btn-primary" style="float: right;">nails</a></h4>
                            </div>
                            <?php
                            $id  = $_GET['id'];
                            $query = mysqli_query($conn, "SELECT * FROM nails where id = $id");
                            $row = mysqli_fetch_array($query);
                            ?>
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name"> image</label>
                                        <input type="text" name="imglink" id="" class="form-control" value="<?= ($row['image']); ?>" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">*</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="username"> Description</label>
                                        <input type="text" name="descri" id="" class="form-control" value="<?= ($row['descri']); ?>" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">*</small>
                                    </div>

                                    
                                

                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
   <?php include 'datatables.php';?>
   <?php include 'footer.php';?>
</body>
</html>