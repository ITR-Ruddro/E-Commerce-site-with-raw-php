<?php
include 'Admin/ainc/database.php';
$table_name1 = 'cetegory';

$obj = new database;

$result1 = $obj->show($table_name1);

?>



<?php  if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {  ?>
    <div class="container">
    <br>
    <?php if($row['status']==1){?>
            <h3 class="bg-primary p-2 text-white d-block"><?=$row['cetegory_name']?></h3>
            <div class="row row-cols-1 row-cols-md-4 g-3">
                <?php  $a = $row['cetegory_name'];
                $sql = "SELECT * FROM product where cetegory_name ='$a' ";
                $result2 = $obj->query($sql);
                while($row1 = $result2->fetch_assoc()) {        ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="Admin/image/ <?=$row1['img']?>" class="card-img-top object-fit-lg-contain rounded mx-auto d-block" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row1['product_name']?></h5>
                            <h3 class="card-title"><?=$row1['price']?></h3>
                            <p class="card-text">Avilable <?=$row1['quantity']?> product</p>
                        </div>
                        <div class="single_btn d-flex p-1 card-footer text-center" style="justify-content: center;">
                            <a class="btn btn-success bg-success m-1" href="address_form.php">BUY NOW</a>
                            <a class="btn btn-info bg-info m-1" href="add_to_cart.php">ADD CART</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <br>
            <hr>
    <?php } ?>
    </div>
<?php } } ?>
