<div class="row">
	<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Registrar Categoria</h4>
  </div>
  <div class="card-content table-responsive">

		<form class="form-horizontal" method="post" id="addcategory" action="index.php?view=addcategory" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Categoria <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="Por ejemplo: brackets, blanqueamiento " minlength="5" maxlength="25"   pattern="[a-z]+">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Categoria</button>

    </div>
  </div>
</form>
</div>
</div>
	</div>
</div>