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

    <!--title-->
    <title>View Cetegory</title>
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
                <li class="breadcrumb-item active"><a href="view_cetegory.php">Catagory List</a></li>
            </ol>
        </section>

    </div>


    <!--Db Connection-->
    <?php include 'ainc/database.php';
    $table_name = 'cetegory';

    $obj = new database();
    $result = $obj->show($table_name);

    $id = 1;

    $header_location ="../view_cetegory.php";
    
    ?>
    
    <!--Table for data show-->
    <div class="container text-center">
        <table style="width:100%;">
            <tr>
                <th>Id</th>
                <th>Cetegory Name</th>
                <th>Status</th>
            </tr>
            
                <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" .$id. "</td>";
                            echo "<td>" .$row["cetegory_name"]. "</td>";
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