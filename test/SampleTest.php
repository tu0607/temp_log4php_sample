<?php
require_once dirname(__FILE__)."/../vendor/autoload.php";

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function test_Log4Php(): void
    {
        Logger::configure(dirname(__FILE__).'/log4php.xml');
        $logger = Logger::getLogger("myLogger");
        $logger->warn("I'm not feeling so good...");
    }
}
