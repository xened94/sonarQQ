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
    $this->Pause("1000");
    $this->type("name=mail", "admin");
    $this->type("name=password", "admin");
    $this->click("//input[@value='Iniciar Sesion']");
    $this->Pause("2000");
    $this->waitForPageToLoad("5000");
   }
}
  ?>