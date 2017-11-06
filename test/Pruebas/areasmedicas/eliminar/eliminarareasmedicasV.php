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
    $this->click("//li[5]/a/p");
    $this->waitForPageToLoad("30000");
    $this->pause("2000");
    $this->click("//tr[2]/td[2]/a[2]/i");
    $this->pause("2000");
    $this->waitForPageToLoad("8000");
  }
}
?>