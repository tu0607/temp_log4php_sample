# temp_log4php_sample

## What's this?

This repository is a sample project for reproducing an error when using PHPUnit9 + log4php-LoggerAppenderConsole. 

## How to reproduce the error

`composer runtest`

## Solution

```vendor/apache/log4php/src/main/php/appenders/LoggerAppenderConsole.php
<?php
 class LoggerAppenderConsole extends LoggerAppender {

	/** The standard otuput stream.  */
	// const STDOUT = 'php://stdout';
	const STDOUT = 'php://output'; // <- change STDOUT to 'php://output'
	
	/** The standard error stream.*/
	const STDERR = 'php://stderr';

	/** The 'target' parameter. */
	protected $target = self::STDOUT;
	
	/**
	 * Stream resource for the target stream.
	 * @var resource
	 */
	protected $fp = null;
```