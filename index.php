<?php require_once 'scripts.php'; ?>
<?php require_once 'modal.php'; ?>
<?php require_once 'modalEditar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            
        <div class="card text-left">
          <div class="card-header">
            Tabla dinamica con data table
          </div>
          <div class="card-body" >

		  <span class="btn btn-primary" data-toggle="modal" data-target="#openModal" >
			Agregar nuevo <span class="fa fa-plus-circle"></span>
		  </span>
      <div class="row mt-5">
        <div class="col-md-6">
            <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-white " id="basic-addon1"><i class="fa fa-calendar" ></i></i></span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" readonly>
           </div>
        </div>

        <div class="col-md-6">
          <div class="input-group mb-3">
          <span class="input-group-text bg-primary text-white"  id="basic-addon1 "><i class="fa fa-calendar" ></i></span>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" readonly>
          </div>
        </div>


      </div>
		  
            <hr>
            <div id="DataTable">

            </div>
          </div>
          <div class="card-footer text-muted">
           Prueba
          </div>
        </div>

        </div>
    </div>
</div>



</body>
</html>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script src="scriptsJS.js"></script>


