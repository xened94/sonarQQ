<?php
$categories = CategoryData::getAll();

?>
<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Registrar Medico</h4>
  </div>
  <div class="card-content table-responsive">
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addmedic" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Area <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">
    <select name="category_id" class="form-control" required>
    <option value="">-- SELECCIONE --</option>      
    <?php foreach($categories as $cat):?>
    <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>      
    <?php endforeach;?>
    </select>
    </div>
  </div>

<!--=============================CAMPOS FORMULARIO==========================================-->

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">
       <input name="name" class="form-control" id="name"  placeholder="Por ejemplo: frank, jonathan " minlength="5" maxlength="35" required pattern="[a-z- ]+">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">
       <input name="lastname" class="form-control" id="lastname"  placeholder="Por ejemplo: ruiz, espinola " minlength="5" maxlength="35" required pattern="[a-z- ]+">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Dirección <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">
       <textarea name="address" class="form-control" id="address"  placeholder="Por ejemplo: obaca flor #811 sto domiguito " minlength="5" maxlength="35" required pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9- ]+(?:\.[a-zA-Z0-9-]+)*$"></textarea>  
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email<SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">

      <input type="email" name="email" class="form-control" id="email" placeholder="Por ejemplo: frankespinola@outlook.es  " minlength="5" maxlength="30" required pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-3">
      <input type="text" name="phone" class="form-control" id="phone" placeholder="Por ejemplo: +51 965732316 " minlength="5" maxlength="15" required pattern="[1-9]+">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Medico</button>
    </div>
  </div>
</form>
</div>
</div>
	</div>
</div>