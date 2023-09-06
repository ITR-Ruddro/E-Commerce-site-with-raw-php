<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <?php include_once './inc/botstrap.php' ?>

    <!-- Title -->
    <title>Welcome</title>
</head>


<body>
    <div class="container-fluid p-0">

        <!-- First Child Nav bar -->
       <?php include_once './inc/title.php'?>


        <!-- second child log in geust-->
        <div class="navbar navbar-expand-lg bg-info">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link" href="#">Welcome guest</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">Log in</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>


         <!-- Third child-->
        <?php include_once "./inc/heading.php"?>

        


        <br>

        <!-- Fifth div-->
        <div class="row">

             <!-- side nav -->
            <div class="col-sm-4 m-30 text-center">
                <h3>Cetegory</h3>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <?php include './inc/catagorylist.php'?>

                    <?php include './inc/catagorylist.php'?>

                    <?php include './inc/catagorylist.php'?>

                    <?php include './inc/catagorylist.php'?>

                    <?php include './inc/catagorylist.php'?>

                    <?php include './inc/catagorylist.php'?>
                    
                </ul> 
            </div>


            <!-- slide bar -->
            <?php include_once './inc/slidebar.php'?>
        </div>



        <br>

        <!--Card Group -->
        <?php include_once './inc/cardgroup.php' ?>

   
    </div>

    <?php include_once './inc/footer.php' ?>


    

   

</body>
</html>