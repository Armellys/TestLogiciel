<?php
use PHPUnit\Framework\TestCase;

require_once './src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class UnTest extends TestCase
{
    private $Poneys;

    protected function setUp(){
        $this->Poneys = new Poneys();
        $this->Poneys->setCount(8);
    }

    protected function tearDown(){
        unset($this->Poneys);
    }

   

    public function testPlaceAvailableTrue()
    {
       
        $this->assertTrue($this->Poneys->placeAvailable());

    }



}
?>
