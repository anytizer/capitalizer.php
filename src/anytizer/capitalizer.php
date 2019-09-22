<?php
namespace anytizer;

/**
 * Class capitalizer
 * @package anytizer
 */
class capitalizer
{
	/**
	 * @var array List of words to capitalize
	 */
	private $capitalizable_words = array();

	/**
	 * capitalizer constructor.
	 */
	public function __construct()
	{
		/**
		 * Load the list of words to capitalize.
		 */
		$csv = dirname(__FILE__)."/words.csv";
		$this->capitalizable_words = file($csv, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

		/**
		 * Convert to upper case to ensure how they should look like
		 */
		$this->capitalizable_words = array_map("strtoupper", $this->capitalizable_words);
	}

	/**
	 * Capitalize a word that matches in our database.
	 *
	 * @param string $input
	 * @return string
	 */
	public function capitalize(string $input): string
	{
		$words = preg_split("/[\_|\ ]/is", $input);
		//$words = preg_split("/[^a-zA-Z0-9]/is", $input);

		$words = array_filter($words);
		foreach($words as $w => $word)
		{
            $word = $this->splitize($word);
			$test_word = preg_replace("/[^a-zA-Z0-9]/", "", $word);

			if(in_array(strtoupper($test_word), $this->capitalizable_words))
			{
				$words[$w] = strtoupper($word);
			}
			else
			{
				$words[$w] = ucfirst(trim($word));
			}
		}

		return implode(" ", $words);
	}

    /**
     * @todo Perhaps internal function, private.
     *
     * @param string $input
     * @return string
     */
    public function splitize(string $input): string
    {
        $words = [
            "bloodgroup" => "Blood Group",
            "fullname" => "Full Name",
            "lastname" => "Last Name",
            "middlename" => "Middle Name",
            "nickname" => "Nick Name",
            "socialmedia" => "Social Media",
            "twofactor" => "Two Factor",
            "username" => "User Name",
        ];

        $return = $input; // same word
        $search = strtolower($input);
        if(array_key_exists($search, $words))
        {
            $return = $words[$search];
        }
        else
        {
            /**
             * Special arrangement: Separate words
             * If two words joined together with case differences, split the words
             * eg. AgentsIndustries => Agents Industries
             * @todo Write a logic to split pre-capitalized words
             */
            // "AgentsDocuments" => "Agents Documents",

            if(!in_array(strtolower($return), array_map("strtolower", $this->capitalizable_words)))
            {
                $pieces = array_filter(preg_split('/(?=[A-Z])/', $input));
                $return = implode(" ", $pieces);
            }
        }

        return $return;
    }
}
