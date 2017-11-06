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
    $this->click("//li[6]/a/p");
    $this->pause("2000");
    $this->waitForPageToLoad("3000");
    $this->select("name=pacient_id", "label=PACIENTE");
    $this->select("name=medic_id", "label=MEDICO");
    $this->click("//div[3]/button");
    $this->pause("2000");
    $this->waitForPageToLoad("3000");
  }
}
?>