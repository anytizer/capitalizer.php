<?php
namespace tests;

use anytizer\capitalizer;
use PHPUnit\Framework\TestCase;

class splitTest extends TestCase
{
	//private $capitalizer;
	public function setup(): void
	{
		//$this->capitalizer = new capitalizer();
	}

	public function testSplitize()
	{
		$capitalizer = new capitalizer();

		$this->assertEquals("Social Media", $capitalizer->splitize("Socialmedia"));
	}

    public function testSplitizeGeneralExpectations()
    {
        $capitalizer = new capitalizer();

        $this->assertEquals("Social Media", $capitalizer->capitalize("Socialmedia"));
    }

    public function testCapitalizeMultipleWords()
    {
        $capitalizer = new capitalizer();

        $this->assertEquals("Blood Group Name", $capitalizer->capitalize("bloodgroup name"));
        $this->assertEquals("Blood Group ID", $capitalizer->capitalize("bloodgroup_id"));
    }

    public function testCapitalizeMultipleWordsJoined()
    {
        $capitalizer = new capitalizer();

        $this->assertEquals("Person Blood Group", $capitalizer->capitalize("person_bloodgroup"));
    }
}
