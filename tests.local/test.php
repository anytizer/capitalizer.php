<?php
namespace tests;

require_once("./vendor/autoload.php");

use anytizer\capitalizer;
use PHPUnit\Framework\TestCase;

$capitalizer = new capitalizer();
$word = $capitalizer->capitalize("user_id");
echo $word;
