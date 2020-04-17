<?php
	namespace PhpXlsxWriter;

	require_once('..\vendor\autoload.php');

	use PhpXlsxWriter\XlsxWriter;

	$chars = 'abcdefgh';

	$writer = new XLSXWriter();

	$writer->writeSheetHeader('Sheet1', array(
		'col-string' => 'string',
		'col-numbers' => 'integer',
		'col-timestamps' => 'datetime'
	), [
		'auto_filter' => true,
		'widths' => [
			15,
			15,
			30
		]
	]);

	for($i = 0; $i < 1000; $i++)
	{
		$writer->writeSheetRow('Sheet1', array(
			str_shuffle($chars),
			rand() % 10000,
			date('Y-m-d H:i:s', time() - (rand() % 31536000))
		));
	}

	$writer->writeToFile(basename(__FILE__, '.php') . '.xlsx');
