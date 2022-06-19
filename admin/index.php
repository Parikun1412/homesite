<!doctype html>
<html lang="en" class="semi-dark">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
  $path = dirname(__FILE__);
  require_once $path . '/includes/linkCss.php';
  ?>

  <title>Blackdash - Bootstrap5 Admin Template</title>
</head>

<body>



  <!--start wrapper-->
  <div class="wrapper">

    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/sidebar.php';
    ?>

    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/header.php';
    ?>


    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Dashboard</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                <!-- <li class="breadcrumb-item active" aria-current="page">eCommerce</li> -->
              </ol>
            </nav>
          </div>
        </div>
        <!--end breadcrumb-->
        <!-- end page content-->
      </div>
      <!--end page content wrapper-->


      <!--start footer-->
      <?php
      $path = dirname(__FILE__);
      require_once $path . '/includes/footer.php';
      ?>

      <!--end footer-->


      <!--Start Back To Top Button-->
      <a href="javaScript:;" class="back-to-top">
        <ion-icon name="arrow-up-outline"></ion-icon>
      </a>
      <!--End Back To Top Button-->

      <!--start switcher-->

      <?php
      $path = dirname(__FILE__);
      require_once $path . '/includes/switcher.php';
      ?>

      <!--end switcher-->


      <!--start overlay-->
      <div class="overlay nav-toggle-icon"></div>
      <!--end overlay-->

    </div>
    <!--end wrapper-->


    <!-- JS Files-->

    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/scripts.php';
    ?>

</body>

</html>