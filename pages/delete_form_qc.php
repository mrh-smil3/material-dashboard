<?php




require 'config.php';


$collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);


$_SESSION['success'] = "";
echo '<div class="alert alert-danger text-white" role="alert">
      <strong>Deleted!</strong> This is a danger alert—check it out!
  </div>';


?>