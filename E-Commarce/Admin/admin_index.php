<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once '../inc/botstrap.php' ?>
    <link rel="stylesheet" href="./admin_style.css">
    <title>welcome Admin</title>
</head>
<body>
    <div class="container-fluid">
        <!--navbar-->
        <?php include_once 'ainc/admin_navbar.php' ?>


          <!--button group-->
          <div class="container-fluid row text-center gap-4 mx-5">

            <!--Insert Cetegory-->
            <div class="col-lg-2"><a type="button" class="btn btn-info btn-lg btn_size" data-bs-toggle="modal" data-bs-target="#insert_cetegory">Insert Cetegory</a>
                <?php include_once 'ainc/insert_catagory_modal.php' ?>
            </div>

            <!--Insert Brand-->
            <div class="col-lg-2"><a type="button" class="btn btn-info btn-lg btn_size"  data-bs-toggle="modal" data-bs-target="#insert_Brand">Insert Brand</a>
                <?php include_once 'ainc/insert_brand.php' ?>
            </div>

            <!--Insert Product-->
            <div class="col-lg-2"><a type="button" class="btn btn-info btn-lg btn_size" data-bs-toggle="modal" data-bs-target="#insert_product">Insert Product</a>
                <?php include_once 'ainc/insert_product.php' ?>
            </div>

            <!--view Cetegory-->
            <div class="col-lg-2"><a type="button" href="view_cetegory.php" class="btn btn-info btn-lg btn_size">View Catagory</a></div>

            <!--view Brand-->
            <div class="col-lg-2"><a type="button" href="view_brand.php" class="btn btn-info btn-lg btn_size">View Brand</a></div>

            <!--view Product-->
            <div class="col-lg-2"><a type="button" href="view_product.php" class="btn btn-info btn-lg btn_size">View All Product</a></div>

            <!--Order List-->
            <div class="col-lg-2"><a type="button" href="order_list.php" class="btn btn-info btn-lg btn_size">All Order</a></div>

            <!--All Payment list-->
            <div class="col-lg-2"><a type="button" href="payment.php" class="btn btn-info btn-lg btn_size">All Payment</a></div>

            <!--User List-->
            <div class="col-lg-2"><a type="button" href="user_list.php" class="btn btn-info btn-lg btn_size">List of Users</a></div>

            <!--revenue-->
            <div class="col-lg-2"><a type="button" href="revenue.php" class="btn btn-info btn-lg btn_size">Total Reveneu</a></div>

            <!--Admin List-->
            <div class="col-lg-2"><a type="button" href="admin_list.php" class="btn btn-info btn-lg btn_size">Admin List</a></div>

            <!--log out-->
            <div class="col-lg-2"><a type="button" href="view_product.php" class="btn btn-info btn-lg btn_size">Log Out</a></div>
        </div>














    </div>








    <!--footer-->

<?php include_once 'ainc/admin_footer.php' ?>


</body>
</html>