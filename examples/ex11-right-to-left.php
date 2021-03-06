<?php
	namespace PhpXlsxWriter;

	require_once('..\vendor\autoload.php');

	use PhpXlsxWriter\XlsxWriter;

	$header = array(
		'c1-text' => 'string',//text
		'c2-text' => '@'//text
	);

	$rows = array(
		array(
			'abcdefg',
			'hijklmnop'
		)
	);

	$writer = new XLSXWriter();

	$writer->setRightToLeft(true);

	$writer->writeSheetHeader('Sheet1', $header);

	foreach($rows as $row) {
		$writer->writeSheetRow('Sheet1', $row);
	}

	$writer->writeToFile(basename(__FILE__, '.php') . '.xlsx');
