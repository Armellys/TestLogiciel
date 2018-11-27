<?php
use PHPUnit\Framework\TestCase;

require_once './Test/poneys/src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    private $Poneys;

    protected function setUp(){
        $this->Poneys = new Poneys();
        $this->Poneys->setCount($_ENV['NBPONEY']);
    }

    protected function tearDown(){
        unset($this->Poneys);
    }

    /**
     * @dataProvider RemovePoneyProvider
     */
    public function testRemovePoneyFromField($a, $expected)
    {
        
        // Action
        $this->Poneys->removePoneyFromField($a);

        // Assert
        $this->assertEquals($expected, $this->Poneys->getCount());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testRemovePoneyFromFieldNegatif()
    {
       
        // Action
        $this->Poneys->removePoneyFromField(10);

        // Assert
        $this->assertEquals(8, $this->Poneys->getCount());
    }

    public function testPlaceAvailableTrue()
    {
       
        $this->assertTrue($this->Poneys->placeAvailable());

    }

    public function testPlaceAvailableFalse()
    { 
        //action
        $this->Poneys->addPoney(7);

        // Assert
        $this->assertFalse($this->Poneys->placeAvailable());
    }





    public function testAddPoney()
    {
        // Action
        $this->Poneys->addPoney(3);

        // Assert
        $this->assertEquals(11, $this->Poneys->getCount());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testAddTooMuchPoney()
    {
        // Action
        $this->Poneys->addPoney(10);

        // Assert
        $this->assertEquals(8, $this->Poneys->getCount());
    }



    public function testGetNames()
    {
        // Créer un bouchon pour la classe Poneys
        $stub = $this->createMock(Poneys::class);

        // Configurer le bouchon.
        $stub->method('getNames')->willReturn(array(0 => "Esmeralda",
                                                    1 => "pirate",
                                                    2 => "pomme"));

        //test
        $this->assertInternalType('array',$stub->getNames());
        foreach ($stub->getNames() as $key => $value){
            $this->assertInternalType('integer',$key);
            $this->assertInternalType('string',$value);
        }
        

    }

    /**
     * les dataproviders
     */

    public function RemovePoneyProvider()
    {
        // nombre à enlever , résultat attendu
        return [
            [5, 3], //8-5=3
            [3, 5], //8-3=5
            [8, 0], //8-8=0
            [7, 1] 
            //[10, 8] //8-10 =ERR donc 8
        ];
    }


}
?>
