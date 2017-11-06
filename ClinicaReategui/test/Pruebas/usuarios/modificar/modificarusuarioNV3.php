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
    $this->click("//li[7]/a/p");
    $this->waitForPageToLoad("30000");
    $this->pause("2000");
    $this->click("link=Editar");
    $this->waitForPageToLoad("30000");
    $this->pause("2000");
    $this->type("id=name", "jonathan");
    $this->type("id=lastname", "castro");
    $this->type("id=username", "");
    $this->type("id=email", "correo@gmail.com");
    $this->type("id=inputEmail1", "jonathan123");
    $this->click("css=button.btn.btn-primary");
    $this->pause("2000");
    $this->waitForPageToLoad("5000");
  }
}
?>