<?php
$path = dirname(__FILE__);
require_once $path . '/../class/customer.php';
$path = dirname(__FILE__);
require_once $path . '/../class/account.php';
?>
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

    <title>Quản lý khách hàng</title>
</head>

<body>

    <!--start wrapper-->
    <div class="wrapper">
        <!--start sidebar -->
        <?php
        $path = dirname(__FILE__);
        require_once $path . '/includes/sidebar.php';
        ?>
        <!--end sidebar -->

        <!--start top header-->
        <?php
        $path = dirname(__FILE__);
        require_once $path . '/includes/header.php';
        ?>
        <!--end top header-->

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
                                <li class="breadcrumb-item active" aria-current="page">Tài khoản</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->

                <!-- Form khách hàng -->
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <h4 class="mb-0 text-uppercase">Quản lý tài khoản</h4>
                        <hr />
                        <button type="button" onclick="viewToAdd()" class="btn btn-primary btn-lg">
                            Thêm tài khoản
                        </button>
                        <hr />
                        <!-- End Form khách hàng -->

                        <!-- table khách hàng -->
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">Danh sách tài khoản</h6>
                                    <div class="fs-5 ms-auto dropdown">
                                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="table-responsive mt-2">
                                    <table class="table align-middle mb-0 table-hover" id="id_customer">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Mã tài khoản</th>
                                                <th>Tên đăng nhập</th>
                                                <th>Mật khẩu</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $accountModel = new Account();
                                            $accounts = $accountModel->getAccounts();
                                            if ($accounts) {
                                                while ($row = $accounts->fetch_assoc()) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $row['id_account'] ?></td>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div class="product-info">
                                                                    <h6 class="product-name mb-1"><?php echo $row['username'] ?></h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo $row['password'] ?></td>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 fs-6">
                                                                <a href="javascript:;" class="text-dark" onclick="getDetail('<?php print $row['id_account'] ?>')">
                                                                    <ion-icon name="eye-sharp"></ion-icon>
                                                                </a>
                                                                <a href="javascript:;" class="text-dark" onclick="viewToUpdate('<?php print $row['id_account'] ?>')">
                                                                    <ion-icon name="pencil-sharp"></ion-icon>
                                                                </a>
                                                                <a href="javascript:;" class="text-dark" onclick="confirm('Xoa khong?') ? deleteCustomer('<?php print $row['id_account'] ?>'): event.preventDefault()">
                                                                    <ion-icon name="trash-sharp"></ion-icon>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                    <!-- end table khách hàng -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="./assets/js/process-ajax/account.js"></script>
</body>

</html>