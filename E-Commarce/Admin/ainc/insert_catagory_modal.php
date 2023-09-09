

<!-- Modal -->
<div class="modal fade" id="insert_cetegory" tabindex="-1" aria-labelledby="insert_cetegoryLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="insert_cetegoryLabel">Insert Cetegory</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="cetegory--add.php" method="post">
        <div class="input">
            <h5>Enter Your Cetegory</h5>
            <input type="text" class="form-control" name="cetegory" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <br>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Add Cetegory</button>
        </form>
      </div>
    </div>
  </div>
</div>
