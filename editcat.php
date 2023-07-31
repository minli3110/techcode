<?php 
    $title = 'Edit Category';
    require_once 'includes/header.php';  
    //require_once 'includes/auth_check';
    require_once 'db_connection.php';

    if(!isset($_GET['id'])){
        echo 'error';
    } else{
        $id = $_GET['id'];
        $result = $crud->getCatDetails($id);

?>



    <h1 class="text-center">Edit Category</h1>

        <img src="<?php echo $result['catpix'] ?>" style="width: 20%; height: 20%"/>
        
        <form method="post" action="editrec.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $result['cat_id'] ?>" />
            <div class="form-group">
            <label for="catname" class="form-label">Category Name</label>
            <input type="text" class="form-control" value ="<?php echo $result['catname'] ?>" id="catname" name="catname">
            </div>

            <div class="form-group">
            <label for="catdescription" class="form-label">Category Description</label>
            <textarea class="form-control" id="catdescription" rows="3" name="catdescription"><?php echo $result['catdescription'] ?></textarea>
            </div>

            <br>
            <div class="custom-file">
            <label for="catpix">Upload New Image </label>
            <input type="file" accept="image/*" class="custome-file-input" id="catpix" name="catpix">
            </div>

            <br></br>
            <div class="d-grid gap-2">
            <button type="submit" name="submit" class="btn btn-success btn-lg">SAVE Changes</button>
            </div>

        </form>

        <?php } ?>

<?php require_once 'includes/footer.php'; ?>
