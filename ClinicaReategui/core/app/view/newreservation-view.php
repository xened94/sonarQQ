<?php
$pacients = PacientData::getAll();
$medics = MedicData::getAll();

$statuses = StatusData::getAll();
$payments = PaymentData::getAll();

?>

<div class="row">
<div class="col-md-10">
<div class="card">    
<div class="card-header" data-background-color="green">
      <h4 class="title">Registrar Cita</h4>
</div>

<form class="form-horizontal" role="form" method="post" action="./?action=addreservation" >

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label" >Paciente <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-lg-6">
<select name="pacient_id" class="form-control" required>
<option value="">--ELIJA EL PACIENTE--</option>
  <?php foreach($pacients as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->id." - ".$p->name." ".$p->lastname; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Medico <SUP><font size="2" color="black">*</h3></font></SUP></label>
    <div class="col-lg-6">
<select name="medic_id" class="form-control" required>
<option value="">-- ELIJA EL MEDICO --</option>
  <?php foreach($medics as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->id." - ".$p->name." ".$p->lastname; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label" >Sintomas</label>

    <div class="col-lg-6">
    <input class="form-control"  name="symtoms" placeholder="Por ejemplo: vomito, dolor de cabeza " minlength="5" maxlength="25" required pattern="[a-z- ]+">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha <SUP><font size="2" color="black">*</h3></font></SUP></label>

    <div class="col-lg-4">
      <input type="date" name="date_at" required class="form-control" id="inputEmail1" placeholder="Fecha" minlength="5" maxlength="10">
    </div>
    </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Hora <SUP><font size="2" color="black">*</h3></font></SUP></label>

    <div class="col-lg-4">
      <input type="time" name="time_at" required class="form-control" id="inputEmail1" placeholder="Hora" >
    </div>
    </div>
  
  <!--div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nota</label>
    <div class="col-lg-10">
    <textarea class="form-control" name="note" placeholder="Nota"></textarea>
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Enfermedad</label>
    <div class="col-lg-10">
    <textarea class="form-control" name="sick" placeholder="Enfermedad"></textarea>
    </div>
  </div-->
   
       <!--div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Medicamentos</label>
    <div class="col-lg-10">
    <textarea class="form-control" name="medicaments" placeholder="Medicamentos"></textarea>
    </div>
  </div-->
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado de la cita <SUP><font size="2" color="black">*</font></SUP></label>

    <div class="col-lg-2">
<select name="status_id" class="form-control" required>
  <option value="">-- Elija estado --</option>
  <?php foreach($statuses as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>


  <div class="form-group">
  <label for="inputEmail1" class="col-lg-2 control-label">Estado del pago <SUP><font size="1" color="black">*</h3></font></SUP></label>

<div class="col-lg-2">
<select name="payment_id" class="form-control" required>
  <option value="">-- Elija pago --</option>
  <?php foreach($payments as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
  <?php endforeach; ?>
</select>
    </div>
</div>

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Costo <SUP><font size="2" color="black">*</h3></font></SUP></label>

    <div class="col-lg-2">
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-money"></i></span>
  <input type="number" class="form-control" name="price" placeholder="0 - 10.00" minlength="3"  maxlength="6" required pattern="[1-9]+">
</div>
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Cita</button>
    </div>
  </div>
  
</form>
</div>
</div>
</div>