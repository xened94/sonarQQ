<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Usuarios</h4>
  </div>
  <div class="card-content table-responsive">


	<a href="index.php?view=newuser" class="btn btn-default"><i class='fa fa-user'></i> Registrar Usuario</a>
<br>
		<?php

		?>
		<?php

		$users = UserData::getAll();
		if(count($users)>0){
	
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<th>Nombre de Usuario</th>
			<th>Activo</th>
				<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>

				<td><?php echo $user->username; ?></td>
				<td>
					<?php if($user->is_active):?>
						<i class="fa fa-check"></i>
					<?php endif; ?>
				</td>
					
			       <td style="width:60px;">

				<a href="index.php?view=edituser&id=<?php echo $user->id;?>" rel="tooltip" title="Editar" class="btn btn-warning btn-xs">Editar</a> 

				



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
        
      
        <a href="index.php?view=delusers&id=<?php echo $user->id;?>" rel="tooltip" title="Si" class=" btn btn-danger btn-xs">Si</a>

        <a href="?view=users" rel="tooltip" title="No" class="btn btn-warning btn-xs">No</a>




				</tr>
				<?php

			}
			?>
			</table>
			<?php



		}else{
		
		}


		?>

</div>
</div>
	</div>
</div>