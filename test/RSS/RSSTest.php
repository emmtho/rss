<?php
require_once(__DIR__ . '/../../src/RSS/RSS.php');
/**
 *
 */
class RSSTester extends \PHPUnit_Framework_TestCase
{

  public function testRSS()
  {
    $this->class = new \Anax\RSS\RSS();

    $xml = "http://dbwebb.se/forum/feed.php";
    $xmlDoc = new \DOMDocument();
    $xmlDoc->load($xml);

    $test1 = $this->class->setupAndGetTitle($xmlDoc);
    $this->assertEquals('Databaser och Webbprogrammering', $test1);

    $test2 = $this->class->getContent($xmlDoc);
    $this->assertEquals(null ,$test2);

  }

}



 ?>
