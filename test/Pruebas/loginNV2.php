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
    $this->type("name=password", "");
    $this->click("//input[@value='Iniciar Sesion']");
    $this->waitForPageToLoad("3000");
    $this->pause("3000");
  }
}
?>