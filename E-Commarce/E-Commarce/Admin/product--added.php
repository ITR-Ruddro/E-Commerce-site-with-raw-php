

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


    <!--DB Connection and insert-->
    <?php
    include 'ainc/database.php';

    

    $name = $_POST['name'];
    $cetegoryname = $_POST['cetegoryname'];
    $brandname = $_POST['brandname'];
    $price = $_POST['price'];
    $description = $_POST['description'];


    // current date
    $timestamp = time();
    $date = gmdate('Y-m-d', $timestamp);


    $image = $_FILES['image']['name'];
    $tmpnm = $_FILES['image']['tmp_name'];


    // set uniq name for image 
    $basename = pathinfo($image, PATHINFO_FILENAME);
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    $uniqname = $basename . uniqid() . ".$ext";


    // set dir for image and move
    $targetdir = 'C:\xampp1\htdocs\E-Commarce\Admin\image\ ';

    move_uploaded_file($tmpnm, $targetdir . $uniqname);

    $obj = new database();

    $obj->insert("product",['product_name'=>$name,'cetegory_name'=>$cetegoryname,'brand_name'=>$brandname,'price'=>$price,'description'=>$description,'img'=>$uniqname,'date'=>$date]);
    
    
    ?>

    <!--Print succesful or not the operation-->
    <div class="container">
    

        <h1>Succesfully Added</h1>
        <p>Your item has added succesfully.</p>
        
        
        
        <!--Home button-->
        <a href="admin_index.php">Back to Home</a>
    </div>
</body>
</html>