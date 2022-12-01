

<head></head>
<div class="col-md-4">
    <a href="?p=input_form_qc"><button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#modal-form">Tambah Form QC</button>
</div>

<div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Form ID</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal QC</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Note</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
          
        </tr>
      </thead>
      <tbody>
        <?php

          
          require 'config.php';


          $form_qc = $collection->find([]);



          foreach($form_qc as $formId) {
             echo "<tr>";
               
               echo '<td >'.'<div class="d-flex px-2">'.
              '<div>'.
                '<img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2">'.
              '</div>'.'<div class="badge badge-dot me-4">'.'<h6 class="text-xs font-weight-bold mb-0">'.$formId->Form_id.'</h6>'.'</td>'.'</div>';
               
               echo "<td>".$formId->Tanggal_qc."</td>";
               echo 
               
               "<td>".$formId->Status."</td>";
               echo "<td>".$formId->Note."</td>";
               echo '<td>';
               echo "<a href='?p=edit_form_qc?id=".$formId->_id."' class='btn bg-gradient-info btn-block'>Edit</a>";
               echo "<a href='?p=delete_form_qc?id=".$formId->_id."' class='btn btn-danger'>Delete</a>";
               echo '</td>';
             echo "</tr>";
          };


        ?>
        

        

      </tbody>
    </table>
  </div>
  </div>