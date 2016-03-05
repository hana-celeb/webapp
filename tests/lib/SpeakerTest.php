<?php
require('src/lib/speaker.php');

class SpeakerTest extends PHPUnit_Framework_TestCase
{
  public function testCanSayHelloWorld()
  {
    $this->assertEquals('Hello World!', Speaker::sayHelloWorld());
  }
}
