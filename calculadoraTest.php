<?php
require_once 'calculadora.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * calculadora test case.
 */
class calculadoraTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var calculadora
     */
    private $calculadora;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated calculadoraTest::setUp()
        
        $this->calculadora = new calculadora(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated calculadoraTest::tearDown()
        $this->calculadora = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests calculadora->suma()
     */
    public function testSuma()
    {
       
        $result= $this->calculadora->suma(1,2);
        $this->assertEquals(3, $result);
    }

    /**
     * Tests calculadora->multiplicacion()
     */
    public function testMultiplicacion()
    {
        $result= $this->calculadora->multiplicacion(1,3);
        $this->assertEquals(3, $result);
    }

    /**
     * Tests calculadora->divicion()
     */
    public function testDivicion()
    {
        // TODO Auto-generated calculadoraTest->testDivicion()
        $this->markTestIncomplete("divicion test not implemented");
        
        $this->calculadora->divicion(/* parameters */);
    }

    /**
     * Tests calculadora->resta()
     */
    public function testResta()
    {
        // TODO Auto-generated calculadoraTest->testResta()
        $this->markTestIncomplete("resta test not implemented");
        
        $this->calculadora->resta(/* parameters */);
    }
}

