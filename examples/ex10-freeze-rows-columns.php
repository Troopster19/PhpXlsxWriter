<?php
	namespace PhpXlsxWriter;

	require_once('..\vendor\autoload.php');

	use PhpXlsxWriter\XlsxWriter;

	$chars = 'abcdefgh';

	$writer = new XLSXWriter();

	$writer->writeSheetHeader('Sheet1', array(
		'c1' => 'string',
		'c2' => 'integer',
		'c3' => 'integer',
		'c4' => 'integer',
		'c5' => 'integer'
	), [
		'freeze_rows' => 1,
		'freeze_columns' => 1
	]);

	for($i = 0; $i < 250; $i++)
	{
		$writer->writeSheetRow('Sheet1', array(
			str_shuffle($chars),
			rand() % 10000,
			rand() % 10000,
			rand() % 10000,
			rand() % 10000
		));
	}

	$writer->writeToFile(basename(__FILE__, '.php') . '.xlsx');
