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
    $this->open("/ClinicaActualizada/");
    $this->pause("2000");
    $this->type("name=mail", "admin");
    $this->type("name=password", "admin");
    $this->click("//input[@value='Iniciar Sesion']");
    $this->waitForPageToLoad("3000");
    $this->pause("3000");
    $this->click("//li[4]/a/p");
    $this->pause("3000");
    $this->waitForPageToLoad("3000");
    $this->pause("1000");
    $this->click("link=Registrar Medico");
     $this->waitForPageToLoad("4000");
    $this->select("name=category_id", "label=Modulo 1");
    $this->type("id=name", "jonathan");
    $this->type("id=lastname", "castro");
    $this->type("id=address"," bacaflor");
    $this->type("id=email","correo@gmail.com");
    $this->type("id=phone", "313131");
    $this->click("css=button.btn.btn-primary");
    $this->pause("2000");
    $this->waitForPageToLoad("20000");
  }
}
?>