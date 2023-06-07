<?php
include '../../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<title>Sparkles Salon</title>
<?php include 'head.php'; ?>

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
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Sparkles</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="dashboard.php">Dashboard</a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-6 col-xxl-5 d-flex">
            <div class="w-100">
              <div class="row" >
                <div class="col">
                  <div class="card" >
                    <div class="card-body">
                      <?php
                      include '../../config.php';
                      $query = mysqli_query($conn, "select * from men");
                      $total = mysqli_num_rows($query);

                      ?>
                    
                      <h2 class="text-center"><?= $total; ?></h2>
                      
                      <h5 class="card-title text-center mb-1">Mens Hairstyles </h5>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-center mb-1">Contact Info </h5>
                    </div>
                  </div>
                </div>
                
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <?php
                      include '../../config.php';
                      $query = mysqli_query($conn, "select * from users");
                      $total1 = mysqli_num_rows($query);

                      ?>
                    
                      <h2 class="text-center"><?= $total1; ?></h2>
                      <h5 class="card-title text-center mb-1"><a href="users.php"> Users </a></h5>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-center mb-1">Settings </h5>
                      
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-xxl-7">
            <div class="card flex-fill">
              <div class="card-header">
                <h5 class="card-title mb-0">Calendar</h5>
              </div>
              <div class="card-body d-flex">
                <div class="col-md-8">
                  <div data-provide="datepicker-inline" data-date-today-highlight="true" class="calendar-widget"></div>
                </div> <!-- end col-->
                <div class="col-md-4">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>



  </div>

  <?php include 'datatables.php'; ?>
  <?php include 'footer.php'; ?>
</body>

</html>