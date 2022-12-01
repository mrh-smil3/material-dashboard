<?php


  require_once __DIR__ . "/vendor/autoload.php";


  $collection = (new MongoDB\Client)->qc_barang->form_qc;


  // create form qc
  if(isset($_POST['submit'])){

   $insertOneResult = $collection->insertOne([
       'Form_id' => $_POST['form_id'],
       'Status' => $_POST['status'],
       'Note' => $_POST['note'],
       'Tanggal_qc' => $_POST['date'],
   ]);


   $_SESSION['success'] = "";
   echo '<div class="alert alert-success text-white" role="alert">
      <strong>Success!</strong> This is a success alert—check it out!
      </div>';
  }

  // delete form qc
  

?>