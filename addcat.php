<?php 
    $title = 'Add Food Category';
    require_once 'includes/header.php'; 
    //require_once 'includes/auth_check';
    require_once 'db_connection.php';
?>



    <h1 class="text-center">Add Food Category</h1>

        <form method="post" action="success.php" enctype="multipart/form-data">

            <div class="form-group">
            <label for="catname" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="catname" name="catname">
            </div>

            <div class="form-group">
            <label for="catdescription" class="form-label">Category Description</label>
            <textarea class="form-control" id="catdescription" rows="3" name="catdescription"></textarea>
            </div>

            <br>
            <div class="custom-file">
            <label for="catpix">Upload Category Image </label>
            <input type="file" accept="image/*" class="custome-file-input" id="catpix" name="catpix">
            </div>


            <br>
            <div class="d-grid gap-2">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">ADD</button>
            </div>

        </form>

<?php require_once 'includes/footer.php'; ?>
