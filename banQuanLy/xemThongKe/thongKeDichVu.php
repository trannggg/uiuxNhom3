<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thống kê dịch vụ
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
       <meta name="description"
          content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options"/>
    <meta name="keywords"
          content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>
    <link rel="import" href="header.html">
    <!-- Favicon icon -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-zkRf1z1uPbXpFZV4KTMEH7PVB7ZlDdjw0EhMf7ueExUqMW+0vWuAHR4/j5qoHw1NvMyO4tDw9HZmpyKiCyr/D3A==" crossorigin="anonymous" /> -->
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-zkRf1z1uPbXpFZV4KTMEH7PVB7ZlDdjw0EhMf7ueExUqMW+0vWuAHR4/j5qoHw1NvMyO4tDw9HZmpyKiCyr/D3A==" crossorigin="anonymous" />-->
    <link rel="icon" href="../../template/assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->

    <link rel="stylesheet" href="../../template/assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="../../template/assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="../../template/assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/style.css">


</head>

<body>
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->

<!-- Header -->
<?php include '../common/header.php'; ?>
<!-- End-header -->

<!-- [ menu ] start -->
<?php include '../common/sidebar.php'; ?>

<!-- Phần của mọi người -->
    <div class="pcoded-wrapper" style="width:1520px;">
        <div class="information" style="margin-top:100px;margin-left:350px;margin-right:30px;">
            <div class="pcoded-inner-content">
                <div class="main-body" >
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-block">
                                    <div style="text-align: center; font-weight: bold; padding-bottom: 20px;">
                                             <h3>Thống kê dịch vụ </h3>
                                        </div>
                                        <div class="mt-3 justify-content-between" >
                                            <br class="d-flex justify-content-between" style="display: flex; align-items: center; justify-content: start; gap: 20px;" action="dangKiTamVang.html">
                                                <div class="mb-3"
                                                     style="display: flex; align-items: center; justify-content: start; gap: 20px;">
                                                    <!-- Radio button group -->
                                                    <label for="apartmentChoice" class="form-label">Chọn chung
                                                        cư</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="apartmentOptions" id="apartmentOption1"
                                                               value="all" checked>
                                                        <label class="form-check-label" for="apartmentOption1">
                                                            Cả 2 chung cư
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="apartmentOptions" id="apartmentOption2"
                                                               value="s1">
                                                        <label class="form-check-label" for="apartmentOption2">
                                                            S1
                                                        </label>
                                                    </div>
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="radio"
                                                               name="apartmentOptions" id="apartmentOption3"
                                                               value="s2">
                                                        <label class="form-check-label" for="apartmentOption3">
                                                            S2
                                                        </label>
                                                    </div>
                                                </div>
                                            <br>
                                        </div>
                                    <div class="toolbar-container d-flex " style="display: flex; align-items: center; justify-content: start; gap: 20px;padding-bottom:15px;">
                                            <div class="btn-group dropdown custom-dropdown" id="choice">
                                                    <button class="btn btn-third dropdown-toggle" type="button"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" id="choiceButton" value="all">Chọn loại dịch vụ
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" value="all">Tất cả</a>
                                                        <a class="dropdown-item" value="dich-vu-co-ban">Dịch vụ cơ bản</a>
                                                        <a class="dropdown-item" value="dich-vu-an-ninh-va-bao-ve">Dịch Vụ An Ninh và Bảo Vệ</a>
                                                        <a class="dropdown-item" value="dich-vu-gui-xe-va-do-xe">Loại Dịch Vụ Gửi Xe và Đỗ Xe</a>
                                                        <a class="dropdown-item" value="dich-vu-giai-tri-va-the-thao">Dịch Vụ Giải Trí và Thể Thao</a>
                                                        <a class="dropdown-item" value="dich-vu-bao-hiem-va-an-toan">Dịch Vụ Bảo Hiểm và An Toàn</a>
                                                        <a class="dropdown-item" value="dich-vu-bao-duong-va-sua-chua">Dịch Vụ Bảo Dưỡng và Sửa Chữa</a>
                                                        <a class="dropdown-item" value="dich-vu-khac">Dịch vụ Khác</a>
                                                        <a class="dropdown-item" value="dich-vu-moi">Dịch vụ Mới</a>
                                                    </div>
                                                </div>
                                            <div class="btn-group dropdown custom-dropdown">
                                                <button class="btn btn-third dropdown-toggle" type="button"
                                                        data-toggle="dropdown" aria-haspopup="true" id="monthButton"
                                                        aria-expanded="false">Chọn tháng
                                                </button>
                                                <div class="dropdown-menu dropdown-style"
                                                     aria-labelledby="monthDropdownButton" id="monthDropdown">
                                                </div>
                                            </div>
                                            <div class="btn-group dropdown custom-dropdown">
                                                <button class="btn btn-third dropdown-toggle" type="button"
                                                        data-toggle="dropdown" aria-haspopup="true" id="yearButton"
                                                        aria-expanded="false">Chọn năm
                                                </button>
                                                <div class="dropdown-menu dropdown-style"
                                                     aria-labelledby="yearDropdownButton" id="yearDropdown">
                                                </div>
                                            <!--                                                <div class="btn-group mb-2 mr-2">-->
                                            <!--                                                    <button class="btn btn-third dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chọn chung cư</button>-->
                                            <!--                                                    <div class="dropdown-menu">-->
                                            <!--                                                        <a class="dropdown-item" href="#!">Action</a>-->
                                            <!--                                                        <a class="dropdown-item" href="#!">Another action</a>-->
                                            <!--                                                        <a class="dropdown-item" href="#!">Something else here</a>-->
                                            <!--                                                    </div>-->
                                            <!--                                                </div>-->

                                            <div class="search-container" style="display: flex; align-items: center;padding-left:350px;">
                                                <div class="input-group custom-search-input">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                                                    </div>
                                                    <input type="text" id="searchInput" class="form-control" placeholder="Tên dịch vụ, loại dịch vụ..." aria-label="Search" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                </div>
                            </div>



                            <div class="table-responsive" style="margin-left:10px;margin-right:10px;margin-top:10px;color: #667085;font-style: normal;font-weight: 500;font-size: 12px;line-height: 18px;text-align: center;">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên dịch vụ</th>
                                                <th>Loại dịch vụ</th>
                                                <th>Đơn vị tính</th>
                                                <th>Số căn sử dụng</th>
                                                <th>Số người sử dụng</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody id="table-body" class="table-body" style="font-size:14px;">



                                            </tbody>
                                        </table>
                                    </div>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-custom" id="pagination-wrapper">

                                        </ul>
                                    </nav>
                                    <div class="align-left">
                                        <a href="Xemthongke.php"><button type="button" class="btn custom-btn d-inline-block ml-4 mb-3" style="padding: 10px 30px; background: #9BBEC8; color: white;">Quay lại</button></a>
                                    </div>
                            </div>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="dichvu.js"></script>
<script src="../../template/assets/js/vendor-all.min.js"></script>
<script src="../../template/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Phần này bắt buộc -->
    <style>
    body {
        margin: 0; /* Loại bỏ margin mặc định của body */
    }
    .btn btn-third dropdown-toggle{
        margin-right:100px;
    }
  .dropdown-style {
        max-height: 150px; /* Chiều cao tối đa cho phép scroll */
        overflow-y: auto; /* Cho phép scroll nếu nội dung vượt quá chiều cao tối đa */
    }
    .header {
        background-color: #FFFFFF;
        display: flex;
        position: fixed; /* Đặt vị trí của header là cố định */
        width: 100%; /* Chiều rộng 100% của header */
        height: 80px;
        z-index: 1000; /* Đảm bảo header nằm trên cùng */
    }

    .header img {
        margin-left: 20px;
        margin-top:10px;
        width: 50px;
        height: 56px;
    }

    .avatar {
        position: absolute;
        top: 5px;
        right: 200px;
        border-radius: 50%;
        overflow: hidden;
    }

    .user-info {
        position: absolute;
        top: 20px;
        right: 90px;
    }

    .user-info p {
        
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        color: #000000;
        margin: 0;
    }

    .user-info p.subtitle {
        
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        letter-spacing: 0.15px;
        color: rgba(142, 142, 142, 0.87);
        margin: 0;
    }

    /* Kích thước và độ cao của phần content để tránh che khuất nội dung khi header fixed */
    .content {
        margin-top: 74px;
    }
    .menu-options{
        /* Dashboard */
        height: 18px;
        padding-left: 0px;
        padding-top:50px;

        
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 21px;
        letter-spacing: 0.1px;

        color: #000000;
    }
    .menu-options-logout{
        height: 18px;
        padding-left: 0px;
        padding-top:50px;

        
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 21px;
        letter-spacing: 0.1px;
        color: red;
    }
    .menu-item{
        padding-top:12px;

    }
</style>
<style>
        .custom-dropdown .btn {
            background-color: #FFFFFF; /* White background */
            border: 1px solid #D0D5DD; /* Border color */
            border-radius: 0.5rem;
            
            font-style: normal;
            color:#667085 /* Rounded corners */
        }

        /* Optional: if you want to style the dropdown menu */
        .custom-dropdown .dropdown-menu {
            border-color: #D0D5DD;
            border-radius: 0.5rem;
            
            font-style: normal;/* Rounded corners for the dropdown menu */
        }

        .custom-search-input {
            border: 1px solid #D0D5DD; /* Border color */
            border-radius: 0.5rem; /* Rounded corners for the dropdown menu */
            background-color: #FFFFFF;
        }
        .custom-search-input .form-control {
            border: none;
            box-shadow: none; /* Remove default box-shadow */
            background-color: #FFFFFF;
        }
        .custom-search-input .input-group-text {
            background: transparent;
            border: none;
        }
        .custom-btn {
            background-color: #DDF2FD; /* Light blue background */
            color: #427D9D; /* Dark blue text color */
            border: none; /* Optional: removes the default border */
            padding: 5px 10px; /* Optional: for padding inside the button */
            border-radius: 0.8rem; /* Optional: if you want rounded corners */
            cursor: pointer; /* Changes the cursor to a pointer on hover */
        }
        .custom-btn:focus {
            outline: none;
        }

        .pagination-custom {
            justify-content: center; /* Center the pagination */
        }

        .pagination-custom .page-item.active .page-link {
            background-color: #DDF2FD; /* Light blue background for active page */
            border-color: #DDF2FD;
            color: #427D9D; /* Dark blue text color for active page */
        }

        .pagination-custom .page-link {
            color: #427D9D; /* Dark blue text color for pages */
        }

        .pagination-custom .page-item:not(.active) .page-link:hover {
            background-color: #DDF2FD; /* Light blue background for hover */
        }

        .pagination-custom .page-item:first-child .page-link {
            border-top-left-radius: .25rem;
            border-bottom-left-radius: .25rem;
        }

        .pagination-custom .page-item:last-child .page-link {
            border-top-right-radius: .25rem;
            border-bottom-right-radius: .25rem;
        }
        .form-check-label-tttv{
            
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 21px;
            /* identical to box height, or 150% */
            letter-spacing: 0.1px;
            color: #000000;

        }
    </style>
    <!-- tạo active cho menu -->
<style>
    .menu-item.active {
        background-color: #E8EDF0;
        margin-left:15px;
        margin-right:15px; 
        border-radius: 5px; /* Màu hồng cho background khi active */
    }

    .menu-item.active a {
        color: #164863; /* Màu xanh cho icon và chữ khi active */
    }
</style>
</body>

</html>