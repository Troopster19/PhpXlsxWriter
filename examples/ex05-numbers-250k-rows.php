<?php
	namespace PhpXlsxWriter;

	require_once('..\vendor\autoload.php');

	use PhpXlsxWriter\XlsxWriter;

	$writer = new XLSXWriter();

	$writer->writeSheetHeader('Sheet1', array('c1'=>'integer','c2'=>'integer','c3'=>'integer','c4'=>'integer') );//optional

	for($i = 0; $i < 250000; $i++)
	{
		$writer->writeSheetRow('Sheet1', array(rand() % 10000, rand() % 10000, rand() % 10000, rand() % 10000) );
	}

	$writer->writeToFile(basename(__FILE__, '.php') . '.xlsx');
