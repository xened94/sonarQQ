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
    $this->open("http://localhost:8080/ClinicaActualizada/index.php");
    $this->assertEquals("Clinica Reategui", $this->getTitle());
    $this->type("name=mail", "admin");
    $this->type("name=password", "admin");
    $this->click("//input[@value='Iniciar Sesion']");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Clinica Reategui", $this->getTitle());
    $this->assertEquals("Clinica Reategui", $this->getTitle());
    $this->click("//li[4]/a/p");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Clinica Reategui", $this->getTitle());
    $this->click("link=Registrar Medico");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Clinica Reategui", $this->getTitle());
    $this->type("id=name", "jonathan");
    $this->type("id=lastname", "castro");
    $this->type("id=address", "bacaflor");
    $this->type("id=email", "asd@gmail.com");
    $this->type("id=phone", "334132");
    $this->click("css=button.btn.btn-primary");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Clinica Reategui", $this->getTitle());
    $this->assertEquals("Clinica Reategui", $this->getTitle());
  }
}
?>