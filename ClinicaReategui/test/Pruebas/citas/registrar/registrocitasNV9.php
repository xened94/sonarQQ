<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*googlechrome");
    $this->setBrowserUrl("http://localhost:8080/");
  }

  public function testMyTestCase()
  {
    $this->open("/ClinicaActualizada/index.php");
    $this->type("name=mail", "admin");
    $this->type("name=password", "admin");
    $this->click("//input[@value='Iniciar Sesion']");
    $this->waitForPageToLoad("30000");
    $this->pause("2000");
    $this->click("//li[2]/a/p");
    $this->waitForPageToLoad("30000");
    $this->pause("2000");
    $this->click("link=Registrar Cita");
    $this->waitForPageToLoad("30000");
    $this->pause("2000");
    $this->select("name=pacient_id", "label=--ELIJA EL PACIENTE--");
    $this->select("name=medic_id", "label=-- ELIJA EL MEDICO --");
    $this->type("name=symtoms", "");
    $this->type("id=inputEmail1", "");
    $this->type("name=time_at", "");
    $this->select("name=payment_id", "label=-- Elija pago --");
    $this->select("name=status_id", "label=-- Elija estado --");
    $this->type("name=price", "");
    $this->click("css=button.btn.btn-primary");
    $this->pause("3000");
    $this->waitForPageToLoad("3000");
   
  }
}
?>