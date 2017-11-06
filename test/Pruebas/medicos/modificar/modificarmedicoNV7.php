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
    $this->click("link=Medicos");
    $this->waitForPageToLoad("30000");
    $this->pause("2000");
    $this->click("link=Editar");
    $this->waitForPageToLoad("30000");
    $this->pause("2000");
    $this->select("name=category_id", "label=Modulo 1");
    $this->type("id=name", "123");
    $this->type("id=lastname", "castro");
    $this->type("id=address", "baca flor");
    $this->type("id=email", "correo@gmail.com");
    $this->type("id=phone", "202324");
    $this->click("css=button.btn.btn-primary");
    $this->pause("2000");
    $this->waitForPageToLoad("3000");
  }
}
?>