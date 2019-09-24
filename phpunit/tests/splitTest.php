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

    /**
     * @see https://stackoverflow.com/questions/8998382/php-explode-at-capital-letters
     */
    public function testCapitalizedSplitter()
    {
        $capitalizer = new capitalizer();

        $word = "AgentsIndustries";
        $expected = "Agents Industries";
        $pieces = array_filter(preg_split('/(?=[A-Z])/', $word));
        $words = implode(" ", $pieces);

        $this->assertEquals($expected,  $words);
    }

    public function testCapitalizedSplitterMultiWords()
    {
        $capitalizer = new capitalizer();

        $word = "My Username";
        $expected = "My User Name";
        $output = $capitalizer->capitalize($word);

        $this->assertEquals($expected, $output);
    }

    public function testDoubleCapitalizedWordsJoined()
    {
        $capitalizer = new capitalizer();

        $word = "socialmedia login";
        $expected = "Social Media Login";
        $output = $capitalizer->capitalize($word);

        $this->assertEquals($expected, $output);
    }

    public function testDoubleCapitalizedWordsSplited()
    {
        $capitalizer = new capitalizer();

        $word = "SocialmediaLogin";
        $expected = "Social Media Login";
        $output = $capitalizer->capitalize($word);

        $this->assertEquals($expected, $output);
    }
}
