<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once '../inc/botstrap.php' ?>
    <link rel="stylesheet" href="admin_style.css">
    <style>
        table,td,th{
            border: 1px solid black;
            padding: 5px;
        }
        .btn_size{
        width: 100px;
        }
    </style>

    <!--title-->
    <title>Details of Product</title>
</head>
<body>

    <div class="container-fluid">
        <!--navbar-->
        <?php include_once 'ainc/admin_navbar.php' ?>
        <!--Dashboard pagination-->
        <section class="widget">
            <h2>Welcome to the Dashboard</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="admin_index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="view_cetegory.php">Cetegory List</a></li>
                <li class="breadcrumb-item"><a href="view_brand.php">Brand List</a></li>
                <li class="breadcrumb-item"><a href="view_product.php">Product List</a></li>
                <li class="breadcrumb-item active"><a href="">Product details</a></li>
            </ol>
        </section>

    </div>


    <!--Db Connection-->
    <?php include 'ainc/database.php';
    $table_name = 'product';

    $obj = new database();
    $result = $obj->show($table_name);
  
    $id = $_GET['id'];

    ?>
    
    <!--details show-->
    <div class="container">
        <h2 class="text-center">All About Product</h2>
        <br>
        <?php while ($row = $result->fetch_assoc()) { 
            if($row['id']==$id){  ?>
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img style="width: 250px;height:250px;" src="<?= "./image/ " . $row['img'] ?>" alt="">
                        </div>
                        <div class="col-md-6">
                            <h2>Product Name : <?= $row["product_name"]; ?></h2>
                            <h5>Product Insert Date : <?= $row["date"]; ?></h5>
                            <h5>Brand Name : <?= $row["brand_name"]; ?></h5>
                            <h5>Cetegory : <?= $row["cetegory_name"]; ?></h5>
                            <h5>Price : <?= $row["price"]; ?></h5>
                            <p><b>Description :</b> <?= $row["description"]; ?></p>
                        </div>
                    </div>
            
            <?php }
        } ?> 


    </div>








    <!--footer-->

    <?php include_once 'ainc/admin_footer.php' ?>


</body>
</html>