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
        $this->waitForPageToLoad("30000");
    $this->type("name=password", "admin");
    $this->type("name=mail", "admin");
    $this->click("//input[@value='Iniciar Sesion']");
    $this->waitForPageToLoad("3000");
    $this->pause("2000");
    $this->click("//li[3]/a/p");
    $this->waitForPageToLoad("30000");
    $this->pause("2000");
    $this->click("link=Eliminar");
    $this->pause("2000");
    $this->click("link=Si");
    $this->pause("2000");
    $this->waitForPageToLoad("3000");
  }
}
?>