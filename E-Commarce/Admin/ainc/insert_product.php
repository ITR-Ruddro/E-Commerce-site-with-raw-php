<!--db connection for cetegory and product-->

<?php
include 'database.php';

$obj = new database();

$cetegory = $obj->show('cetegory');
$brand = $obj->show('brand');


?>





<!-- Modal -->
<div class="modal fade" id="insert_product" tabindex="-1" aria-labelledby="insert_productLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="insert_productLabel">Insert Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="product--added.php" method="post" enctype="multipart/form-data">
        <div class="input">
            <h5>Enter Your Product Model Name :</h5>
            <input type="input" class="form-control" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input">
            <h5>Select Your Product Cetegory :</h5>
            <select name="cetegoryname" class="form-select form-select-lg" aria-label=".form-select-sm example">
                    <option selected>Open this select menu</option>
                    <?php $id = 1;
                    while ($row = $cetegory->fetch_assoc()) : ?>
                      <option value="<?= $row['cetegory_name'] ?>"><?php echo $row['cetegory_name']; ?></option>
                    <?php $id++;
                    endwhile; ?>
            </select>
        </div>
        <div class="input">
            <h5>Select Your Product Brand :</h5>
            <select name="brandname" class="form-select form-select-lg" aria-label=".form-select-sm example">
                    <option selected>Open this select menu</option>
                    <?php $id = 1;
                    while ($row = $brand->fetch_assoc()) : ?>
                      <option value="<?= $row['brand_name'] ?>"><?php echo $row['brand_name']; ?></option>
                    <?php $id++;
                    endwhile; ?>
            </select>
        </div>
        <div class="input">
            <h5>Enter Your product Price :</h5>
            <input type="input" class="form-control" name="price" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input">
            <h5>Enter Your product Quantity :</h5>
            <input type="input" class="form-control" name="quantity" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input">
            <h5>Enter Your product Description :</h5>
            <input type="input" class="form-control" name="description" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input">
            <h5>Provide Your product Image File</h5>
            <input type="file" name="image" class="form-control" placeholder="choose an Image" aria-describedby="inputGroup-sizing-default">
        </div>
        <br>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Add Product</button>
        </form>
      </div>
    </div>
  </div>
</div>