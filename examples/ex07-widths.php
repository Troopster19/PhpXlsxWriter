<?php
	namespace PhpXlsxWriter;

	require_once('..\vendor\autoload.php');

	use PhpXlsxWriter\XlsxWriter;

	$writer = new XLSXWriter();

	$writer->writeSheetHeader('Sheet1', array(), $col_options = ['widths' => [10, 20, 30, 40]]);

	$writer->writeSheetRow('Sheet1', $rowdata = array(300, 234, 456, 789), $row_options = ['height' => 20]);
	$writer->writeSheetRow('Sheet1', $rowdata = array(300, 234, 456, 789), $row_options = ['height' => 30]);
	$writer->writeSheetRow('Sheet1', $rowdata = array(300, 234, 456, 789), $row_options = ['height' => 40]);

	$writer->writeToFile(basename(__FILE__, '.php') . '.xlsx');
