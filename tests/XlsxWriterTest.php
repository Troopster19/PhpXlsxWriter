<?php
	namespace PhpXlsxWriter;

	use PhpXlsxWriter\XlsxWriter;
	use PHPUnit\Framework\TestCase;

	class XlsxWriterTest extends TestCase
	{
		public function testWebQueryDefaults()
		{
			$this->assertIsObject(new XlsxWriter());
		}
	}
?>
