
<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">

</div>
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Pacientes</h4>
  </div>
  <div class="card-content table-responsive">
	<a href="index.php?view=newpacient" class="btn btn-default"><i class='fa fa-male'></i> Registrar Paciente</a>
		<?php

		$users = PacientData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<th>Dirección</th>
			<th>Alergia</th>
			<th>Telefono</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td><?php echo $user->address; ?></td>
				<td><?php echo $user->alergy; ?></td>
				<td><?php echo $user->phone; ?></td>
				<td style="width:280px;">

					
				<a href="index.php?view=pacienthistory&id=<?php echo $user->id;?>" class="btn btn-default btn-xs">Historial</a>
				<a href="index.php?view=editpacient&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
			
			     <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal">Eliminar</a>
			 	 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">


				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title" id="myModalLabel"><strong>¡ESPERAAAAAAAAAAAAAAAAAAAAAAAAAA!</strong></h4>
				      </div>
				      <div class="modal-body">
				        <h3>¿Estás seguro que quieres eliminar un paciente?</h3>
				      </div>
				      <div class="modal-footer">
        
				        <a href="index.php?view=delpacient&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">
				        Si</a>
				        <a href="index.php?view=pacients" class="btn btn-warning btn-xs">No</a>
      			</div>
    		</div>
		</div>
	</div>



				</td>
				</tr>
				<?php

			}
			?>
			</table>
			</div>
			</div>
			<?php



		}else{
			echo "<p class='alert alert-danger'>No hay pacientes</p>";
		}


		?>


	</div>
</div>