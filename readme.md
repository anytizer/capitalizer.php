# capitalizer.php

Capitalizes most frequently used short codes.


## Installation

    composer require anytizer/capitalizer.php:dev-master


## Usage Example

    <?php
    require_once("vendor/autoload.php");
    
    use anytizer\capitalizer;
    
    $raw_word = "api_key";
    $capitalizer = new capitalizer();
    $word = $capitalizer->capitalize($raw_word);
    
    echo $word;

You should expect __API Key__ as output. See a complete list of capitalizable words in [words.csv](src/libraries/classes/anytizer/words.csv).


## Output Examples

 * __IP Address__ for "ip_address"
 * __User ID__ for "user id"
