<?
	$Page->Title = 'View';
	include_once($Page->Prefix.'includes/Header.inc.php');
	include_once($Page->Prefix . 'ajfwk/Tables.inc.php');
	include_once($Page->Prefix . 'ajfwk/GetParameters.inc.php');
	include_once($Page->Prefix . 'ajfwk/Forms.inc.php');
	
	TableOpen('', '200px');

	FieldStaticGenerate("Id",$Id);
	FieldStaticGenerate("Name","Name " . $Id);
	FieldStaticGenerate("Address","Address " . $Id);
	FieldStaticGenerate("City","City " . $Id);
	FieldStaticGenerate("Amount","Amount " . ($Id*100));

	TableClose();
	
	include_once($Page->Prefix.'includes/Footer.inc.php');
?>
