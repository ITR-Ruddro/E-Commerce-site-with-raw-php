

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operation Processing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #007bff;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>


    <!--DB Connection-->
    <?php
    include 'ainc/database.php';
    $name = $_POST['brand'];
    $status = 1;

    $obj = new database();

    $exist = $obj->exist($name,'brand','brand_name');

    ?>

    <!--Print succesful or not the operation-->
    <div class="container">
    <?php if($name=='' or $name==$exist){
        echo "<h1>Not Added Any Item</h1>";
        echo "<p>Your item not Added beacuse of its empty value inputed or alredy exist.</p>";
    }
    else{
        $obj->insert("brand",['brand_name'=>$name,'status'=>$status]);
        echo "<h1>Succesfully Added</h1>";
        echo "<p>Your item has added succesfully.</p>";
    }
            
        ?>
        
        
        
        <!--Home button-->
        <a href="admin_index.php">Back to Home</a>
    </div>
</body>
</html>