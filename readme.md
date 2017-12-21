# capitalizer.php

Capitalizes most frequently used short codes.


## Installation

    composer require anytizer/capitalizer.php:dev-master


## Usage Example

	<?php
	require_once("libraries/classes/common/class.capitalizer.inc.php");
	use common\capitalizer;

    $raw_word = "api_key";
    $capitalizer = new capitalizer();
    $word = $capitalizer->capitalize($raw_word);

You should expect __API Key__ as output. See a complete list of capitalizable words in [words.csv](src/libraries/classes/common/words.csv).


## Output

 * __IP Address__ for "ip_address"
 * __User ID__ for "user id"
