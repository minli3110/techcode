<?php 
    $title = 'Add Accomodation';
    require_once 'includes/header.php'; 
    //require_once 'includes/auth_check';
    require_once 'db_connection.php';
?>



    <h1 class="text-center">Add Accomodation</h1>

        <form method="post" action="successacc.php" enctype="multipart/form-data">

            <div class="form-group">
            <label for="accname" class="form-label">Accomodation Name</label>
            <input type="text" class="form-control" id="accname" name="accname">
            </div>

            <div class="form-group">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address">
            </div>

            <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
            <label for="phone" class="form-label">Telephone Number</label>
            <input type="text" class="form-control" id="phone" name="phone">
            </div>
    
            <div class="form-group">
            <label for="mrt" class="form-label">Nearest MRT Station</label>
            <input type="text" class="form-control" id="mrt" name="mrt">
            </div>

            <br>
            <div class="custom-file">
            <label for="accpix">Upload Accomodation Image </label>
            <input type="file" accept="image/*" class="custome-file-input" id="accpix" name="accpix">
            </div>


            <br>
            <div class="d-grid gap-2">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">ADD</button>
            </div>

        </form>

<?php require_once 'includes/footer.php'; ?>
