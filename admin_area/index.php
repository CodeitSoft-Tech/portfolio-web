<?php 

   $active = 'dashboard';
   include("includes/header.php"); 

?>


 <!-- Content Header Begin-->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Content-header End -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
           <!-- Total Task -->
           <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Post</span>
                <span class="info-box-number">
                  <h3><?php echo showActiveTask(); ?></h3>
                </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Post</span>
                <span class="info-box-number">
                  <h3><?php echo showActiveTask(); ?></h3>
                </span>
              </div>
            </div>
          </div>
           <!-- Total Task End -->

          <!-- Total Task Completed -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-edit"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Old Post</span>
                <span class="info-box-number">
                  <h3><?php echo showViewedTask(); ?></h3>
                </span>
              </div>
            </div>
          </div>
           <!-- Total Task Completed End -->
        </div>
      </div>
    </section>
    <!-- Content End -->
 


<?php include("includes/footer.php"); ?>
<?php include("includes/footer_links.php"); ?>
