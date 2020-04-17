<?php
	namespace PhpXlsxWriter;

	require_once('..\vendor\autoload.php');

	use PhpXlsxWriter\XlsxWriter;

	$rows = array(
		array('2003', '1', '-50.5', '2010-01-01 23:00:00', '2012-12-31 23:00:00'),
		array('2003', '=B1', '23.5', '2010-01-01 00:00:00', '2012-12-31 00:00:00'),
	);

	$writer = new XLSXWriter();

	$writer->setAuthor('Some Author');

	foreach($rows as $row) {
		$writer->writeSheetRow('Sheet1', $row);
	}

	$writer->writeToFile(basename(__FILE__, '.php') . '.xlsx');
