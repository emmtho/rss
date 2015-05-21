<?php
require_once(__DIR__ . '/../../src/RSS/RSS.php');
/**
 *
 */
class RSS extends \PHPUnit_Framework_TestCase
{
  public function connectToClass(){
    $this->class = new Anax\RSS\RSS();
  }

  public function testRSS(){
    $xml = "http://dbwebb.se/forum/feed.php";
    $xmlDoc = new \DOMDocument();
    $xmlDoc->load($xml);

    $test1 = $this->class->setupAndGetTitle($xmlDoc);
    $this->assertEquals('Databaser och Webbprogrammering', $test1);

    $this->class->setupAndGetTitle($xmlDoc);
    $this->class->getContent($xmlDoc);
  }

}



 ?>
