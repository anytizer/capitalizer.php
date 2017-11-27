# capitalizer.php

Capitalize most frequently used shortcodes.


## Installation

    composer require anytizer/capitalizer.php


## Usage Example

	<?php
	require_once("libraries/classes/common/class.capitalizer.inc.php");

    $capitalizer = new capitalizer();
    $word = $capitalizer->capitalize($word);


## Output

 * __IP Address__ for "ip_address"
 * __User ID__ for "user id"
