<?php
include '../config.php';
if (isset($_POST['submit'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    // $sql = "SELECT * FROM users WHERE email='$email' AND pswd=md5('$password')";
    $sql = "SELECT * FROM users WHERE email='$email' AND pswd=md5('$password')";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $row = mysqli_fetch_assoc($result);

        $_SESSION["login"] = "OK";
        $_SESSION['email'] = $row['email'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['id'] = $row['id'];

        if ($row['usertype']=="admin") {
            $msg = "<div class='alert alert-primary shadow' role='alert' style='border-left:#155724 5px solid; border-radius: 0px'>
         Success, Signing you in ..............
         <script type='text/javascript'>setTimeout(function() { window.location.href = 'ad/dashboard.php';}, 2000);</script>
         </div>";
        }
        elseif ($row['usertype']=="subadmin") {
            $msg = "<div class='alert alert-primary shadow' role='alert' style='border-left:#155724 5px solid; border-radius: 0px'>
             Success, Signing you in ..............
             <script type='text/javascript'>setTimeout(function() { window.location.href = 'sb/dashboard.php';}, 2000);</script>
             </div>";
        }

        
    } else {
        $msg = "<div class='alert alert-primary shadow' role='alert' style='border-left:#155724 5px solid; border-radius: 0px'>
         Invalid Username or password !
         
         </div>";
    }
    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body>
    <div class="container" style="padding: 100px; width: 600px; ">
        <div class="row justify-content-center">
            <div class="card" style="border: 1px solid;">
                <!-- Logo -->
                <div class="card-header">
                    <img src="../images/logo.png" class="img-fluid">
                    
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <div><?php if (isset($msg)) {
                                    echo $msg;
                                } ?></div>

                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Email address</label>
                            <input class="form-control" type="email" required name="email" placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" name="password" class="form-control" required placeholder="Enter your password">
                                <div class="input-group-text" data-password="false">
                                    <span class="password-eye"></span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="mb-3 d-grid">
                            <button class="btn text-white" style="background-color: #75001a;" name="submit" type="submit"> Sign In </button>
                            <a href="#" class="text-center mt-2" style="color:#75001a;"> Forgot Password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer footer-alt">
        <?php 
            // Simply:
            $date = date('Y');
            echo '<h5>&copy;&ensp;'.$date.'&ensp;Sparkles Saloon</h5>';
        ?>

    </footer>

    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

</body>

</html>