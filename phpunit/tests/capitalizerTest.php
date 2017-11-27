<?php
namespace tests;

use common\capitalizer;
use PHPUnit\Framework\TestCase;

class capitalizerTest extends TestCase
{
    private $capitalizer;

    public function setup()
    {
        $this->capitalizer = new capitalizer();
    }
	
	public function test01()
    {
        $this->assertEquals("IP Address", $this->capitalizer->capitalize("ip_address"));
    }

    public function test02()
    {
        $this->assertEquals("Amount VAT", $this->capitalizer->capitalize("amount_vat"));
    }
}