<?
	$Page->Title = 'Table';
	include_once($Page->Prefix.'includes/Header.inc.php');
	include_once($Page->Prefix . 'ajfwk/Tables.inc.php');

	$titles = array('Id', 'Name', 'Address', 'City', 'Amount');
	
	TableOpen($titles);

	for ($k = 1; $k <= 10; $k++) {
		RowOpen();
		DatumLinkGenerate($k,"view.php?Id=".$k);
		DatumGenerate('Name ' . $k);
		DatumGenerate('Address ' . $k);
		DatumGenerate('City ' . $k);
		DatumNumGenerate($k * 100);
		RowClose();
	}

	TableClose();
	
	include_once($Page->Prefix.'includes/Footer.inc.php');
?>
