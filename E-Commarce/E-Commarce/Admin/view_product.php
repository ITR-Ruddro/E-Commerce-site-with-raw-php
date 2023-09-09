<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once '../inc/botstrap.php' ?>
    <link rel="stylesheet" href="./admin_style.css">

    <style>
        table,td,th{
            border: 1px solid black;
        }
    </style>

    <title>welcome Admin</title>
</head>
<body>
    <div class="container-fluid">
        <!--navbar-->
        <?php include_once 'ainc/admin_navbar.php' ?>

        <section class="widget">
            <h2>Welcome to the Dashboard</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="admin_index.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="view_product.php">Product List</a></li>
            </ol>
        </section>
    </div>


    <!--Db Connection-->
    <?php include 'ainc/database.php';
    $table_name = 'product';

    $obj = new database();
    $result = $obj->show($table_name);

    $id = 1;

    $header_location ="../view_product.php";

    
    ?>
    
    <!--Table for data show-->
    <div class="container text-center">
        <table style="width:100%;">
            <tr>
                <th style="width:5%">Id</th>
                <th style="width:10%">Product Name</th>
                <th style="width:10%">Cetegory</th>
                <th style="width:10%">Brand</th>
                <th style="width:10%">Price</th>
                <th style="width:20%">Description</th>
                <th style="width:10%">Image</th>
                <th style="width:10%">Date</th>
                <th style="width:15%">Status</th>
            </tr>
            
                <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" .$id. "</td>";
                            echo "<td>" .$row["product_name"]. "</td>";
                            echo "<td>" .$row["cetegory_name"]. "</td>";
                            echo "<td>" .$row["brand_name"]. "</td>";
                            echo "<td>" .$row["price"]. "</td>";
                            echo "<td>" .$row["description"]. "</td>";
                            echo "<td> <img class='w-50' src='image/ ". $row['img']. "'></td>";
                            echo "<td>" .$row["date"]. "</td>";
                            echo "<td>". $obj->statusbtn($row["status"],$row["id"],$header_location,$table_name)."</td>";
                            echo "</tr>";
                            $id = $id + 1;
                        }
                        }
                ?>
            
        </table>
    </div>








    <!--footer-->

    <?php include_once 'ainc/admin_footer.php' ?>


</body>
</html>