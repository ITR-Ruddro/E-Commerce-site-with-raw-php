<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once '../inc/botstrap.php' ?>
    <link rel="stylesheet" href="admin_style.css">
    <style>
        .btn_size{
        width: 100px;
        }
    </style>


    <!--Title-->
    <title>View Brand</title>
</head>
<body>


    <div class="container-fluid">
        <!--navbar-->
        <?php include_once 'ainc/admin_navbar.php' ?>

        <!--dashboard pagination-->
        <section class="widget">
            <h2>Welcome to the Dashboard</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="admin_index.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="view_cetegory.php">Cetegory List</a></li>
                <li class="breadcrumb-item active"><a href="view_brand.php">Brand List</a></li>
            </ol>
        </section>

    </div>

    <!--DB Connention-->
    <?php include 'ainc/database.php';
    $table_name = 'brand';

    $obj = new database();
    $result = $obj->show($table_name);

    $id = 1;
    $header_location ="../view_brand.php";
    
    ?>
    


    <!--Table for show data-->
    <div class="container text-center">
        <table style="width:100%;">
            <tr>
                <th>Id</th>
                <th>Brand Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            
                <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" .$id. "</td>";
                            echo "<td>" .$row["brand_name"]. "</td>";
                            echo "<td>". $obj->statusbtn($row["status"],$row["id"],$header_location,$table_name)."</td>";
                            echo '<td style="width:40%"><a href="brand_cetegory.php?brand='.$row['brand_name'].'" type="button" class="btn btn-success btn-sm">Show all</a>  <a href="" type="button" class="btn btn-warning btn-sm">Update</a>   <a href="ainc/delete.php?id='.$row['id'].'&header_location='.$header_location.'&table_name='.$table_name.'" type="button" class="btn btn-danger btn-sm ">Delete</a></td>';
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