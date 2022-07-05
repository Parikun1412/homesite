<?php
$path = dirname(__FILE__);
require_once $path . '/../class/order.php';
$path = dirname(__FILE__);
require_once $path . '/../class/customer.php';
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

    <title>Đơn hàng đang xử lý</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Đơn hàng đang xử lý</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->
                <!-- Start Table product -->

                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Danh sách hóa đơn</h6>
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
                            <table class="table align-middle mb-0" id="id_order">
                                <thead class="table-light">
                                    <tr>
                                        <th>Mã hóa đơn</th>
                                        <th>Tên khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Ngày xuất</th>
                                        <th>Trạng thái</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $orderModel = new Order();
                                    $listOrder = $orderModel->getOrders();
                                    if ($listOrder) {
                                        while ($row = $listOrder->fetch_assoc()) {
                                            if ($row['status'] == '0' || $row['status'] == '1' || $row['status'] == '-1')
                                                continue;

                                    ?>
                                            <tr>
                                                <td><?php echo $row['id_order'] ?></td>

                                                <td><?php echo $row['fullname'] ?></td>

                                                <td><?php echo $row['phone'] ?></td>
                                                <td><?php echo $row['date'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($row['status'] == 2) {
                                                    ?>
                                                        <div class="badge bg-success">Đã hoàn tất</div>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3 fs-6">
                                                        <a href="javascript:;" class="text-dark" onclick="viewToProcess('<?php print $row['id_order'] ?>')" data-toggle="modal" data-target="#viewDetailModalId">
                                                            <ion-icon name="eye-sharp"></ion-icon>
                                                        </a>
                                                        <!-- <a href="javascript:;" class="text-dark" data-toggle="modal" data-target="#updateModalId">
                                                            <ion-icon name="pencil-sharp"></ion-icon>
                                                        </a>
                                                        <a href="javascript:;" class="text-dark">
                                                            <ion-icon name="trash-sharp"></ion-icon>
                                                        </a> -->
                                                    </div>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
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
    <div id="switchModal"></div>

    <!-- JS Files-->

    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/scripts.php';
    ?>
    <script src="./assets/js/process-ajax/order.js"></script>

</body>

</html>