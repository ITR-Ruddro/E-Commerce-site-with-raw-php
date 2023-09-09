

<!-- Modal -->
<div class="modal fade" id="insert_Brand" tabindex="-1" aria-labelledby="insert_BrandLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="insert_BrandLabel">Insert Brand</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="brand--added.php" method="post">
        <div class="input">
            <h5>Enter Your Brand</h5>
            <input type="text" class="form-control" name="brand" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <br>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Add Brand</button>
        </form>
      </div>
    </div>
  </div>
</div>
