<?php $user = PacientData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">

<div class="card">

  <div class="card-header" data-background-color="blue">
      <h4 class="title">Editar Paciente</h4>
  </div>

  <div class="card-content table-responsive">
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatepacient" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" required value="<?php echo $user->name;?>" class="form-control" id="name" placeholder="Nombre"  minlength="5" maxlength="25" pattern="[a-z- ]+">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="lastname" required value="<?php echo $user->lastname;?>" required class="form-control" id="lastname" placeholder="Apellido" minlength="0" maxlength="25" required pattern="[a-z- ]+">
    </div>
  </div>



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Genero*</label>
        <div class="col-md-6">

      <label class="checkbox-inline">
        <input type="radio" id="inlineCheckbox1" name="gender" required <?php if($user->gender=="h"){ echo "checked"; }?> value="h"> Hombre
      </label>

    <label class="checkbox-inline">
        <input type="radio" id="inlineCheckbox2" name="gender" required <?php if($user->gender=="m"){ echo "checked"; }?> value="m"> Mujer
    </label>

    </div>

  </div>



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento</label>
    <div class="col-md-6">
      <input type="date" name="day_of_birth" required class="form-control" value="<?php echo $user->day_of_birth; ?>"  id="address1" placeholder="Fecha de Nacimiento" minlength="5" maxlength="10">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <textarea type="text" name="address" value="<?php echo $user->address;?>" class="form-control" required id="address" placeholder="Direccion" minlength="5" maxlength="35" required pattern="[a-z]+"></textarea>
    </div>
  </div>



  <!-- class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" value="<?php echo $user->email;?>" class="form-control" id="email" placeholder="Email">
    </div>
  </div-->


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
    <div class="col-md-6">
      <input type="text" name="phone"  required value="<?php echo $user->phone;?>"  class="form-control" id="phone" placeholder="Telefono"  minlength="5" maxlength="9" required pattern="[1-9]+">
    </div>
  </div>


  <!--div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Enfermedad</label>
    <div class="col-md-6">
      <textarea name="sick" class="form-control" id="sick" placeholder="Enfermedad"><?php echo $user->sick;?></textarea>
    </div>
  </div-->
  <!--div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Medicamentos</label>
    <div class="col-md-6">
      <textarea name="medicaments" class="form-control" id="sick" placeholder="Medicamentos"><?php echo $user->medicaments;?></textarea>
    </div>
  </div-->


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Alergia</label>
    <div class="col-md-6">
      <input name="alergy" type="text" required value="<?php echo $user->alergy;?>" class="form-control"  id="alergy" placeholder="Alergia" minlength="5" maxlength="15" required pattern="[a-z- ]+">
    </div>
  </div>


  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Paciente</button>
    </div>
  </div>


           </form>
        </div>
       </div>
    </div>
</div>