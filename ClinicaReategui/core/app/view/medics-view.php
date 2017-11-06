<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Medicos</h4>
  </div>
  <div class="card-content table-responsive">

<div class="btn-group">
	<a href="index.php?view=newmedic" class="btn btn-default">Registrar Medico</a>

</div>
		<?php

		$users = MedicData::getAll();
		if(count($users)>0){
			
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<th>Direccion</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Area</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td><?php echo $user->address; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo $user->phone; ?></td>
				<td><?php if($user->category_id!=null){ echo $user->getCategory()->name; } ?></td>
				<td style="width:280px;">

				<a href="index.php?view=medichistory&id=<?php echo $user->id;?>" class="btn btn-default btn-xs">Historial</a>
				<a href="index.php?view=editmedic&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>

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
        
        <a href="index.php?view=delmedic&id=<?php echo $user->id;?>" rel="tooltip" title="Si" class="btn btn-danger btn-xs">Si</a>

        <a href="?view=medics" rel="tooltip" title="No" class="btn btn-warning btn-xs">No</a>









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
			echo "<p class='alert alert-danger'>No hay medicos</p>";
		}


		?>

 </div>
 </div>

	
