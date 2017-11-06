<div class="row">
	<div class="col-md-10">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Registrar Paciente</h4>
  </div>
  <div class="card-content table-responsive">

		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addpacient" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">
      <input  type="text" name="name" required class="form-control" id="name"  placeholder="Por ejemplo: frank, jonathan " minlength="5" maxlength="25" pattern="[a-z- ]+">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido <SUP><font size="2" color="black" maxlength="20">*</h3></font></SUP></label>
    <div class="col-md-6">
       <input  name="lastname" required class="form-control" id="lastname"  placeholder="Por ejemplo: espinola, ruiz " minlength="0" maxlength="25" required pattern="[a-z- ]+">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Genero <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">
<label class="checkbox-inline">
  <input type="radio" id="inlineCheckbox1" name="gender" required value="h"> Hombre
</label>
<label class="checkbox-inline">
  <input type="radio" id="inlineCheckbox2" name="gender" required value="m"> Mujer
</label>

    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">
      <input type="date" name="day_of_birth" class="form-control" required id="address1" placeholder="Fecha de Nacimiento" minlength="5" maxlength="10">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Dirección <SUP><font size="2" color="black">*</h3></font></SUP> </label>
    <div class="col-md-6">
      <textarea name="address" class="form-control" id="address"  placeholder="Por ejemplo: obaca flor #811 sto domiguito " minlength="5" maxlength="35" required pattern="[a-z]+"></textarea>
    </div>
  </div>

  <!--div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" id="email1" placeholder="Email">
    </div>
  </div-->

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">

      <input type="number" name="phone" required class="form-control" id="phone" placeholder="Por ejemplo: 965732316 " minlength="5" maxlength="9" required pattern="[1-9]+">

    </div>
  </div>

  <!--div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Enfermedad</label>
    <div class="col-md-6">
      <textarea name="sick" class="form-control" id="sick" placeholder="Enfermedad"></textarea>
    </div>
  </div-->

  <!--div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Medicamentos</label>
    <div class="col-md-6">
      <textarea name="medicaments" class="form-control" id="sick" placeholder="Medicamentos"></textarea>
    </div>
  </div-->
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Alergia <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">
      <input name="alergy" type="text" class="form-control" id="alergy"  placeholder="Por ejemplo: omeprazol, amoxicilina " minlength="5" maxlength="15" required pattern="[a-z- ]+">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Paciente</button>
    </div>
  </div>
</form>
</div>
</div>
	</div>
</div>