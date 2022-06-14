<?php 
 include_once("upload_ctrl.php");
?>
<form method="POST" action="mod_upload/upload_ctrl.php" enctype="multipart/form-data">
    <div class="col-md-8">
        <input type="file" name="urlfile" id="urlfile" class="form-control">
    </div>
    <div class="col-md-2">
    <button type="submit" name="btnupload">coba</button>
    </div>
</form>