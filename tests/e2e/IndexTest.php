<?php
class IndexTest extends PHPUnit_Extensions_Selenium2TestCase {

    
    public function setUp() {
        $targetUrl = 'http://localhost:8000/';

        $this->setHost('127.0.0.1');
        $this->setPort(4444);
        $this->setBrowser('firefox');
        $this->setBrowserUrl($targetUrl);
    }

    public function testCatchText() {
        $this->url('/');

        $screenshot = $this->currentScreenshot();
        file_put_contents( __DIR__.'/../../reports/screenshot.png', $screenshot);

        $element = $this->byId('catch');
        $this->assertEquals('I love Docker!', $element->text());
    }
}
