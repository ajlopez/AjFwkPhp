<?
	$Page->Title = 'Form';
	include_once($Page->Prefix.'includes/Header.inc.php');
	include_once($Page->Prefix . 'ajfwk/Tables.inc.php');
	include_once($Page->Prefix . 'ajfwk/GetParameters.inc.php');
	include_once($Page->Prefix . 'ajfwk/Forms.inc.php');
	
	TableOpen('', '400px');

	FieldStaticGenerate("Id",$Id);
	FieldTextGenerate("Name", "Name", "Name " . $Id, 30, True);
	FieldTextGenerate("Address", "Address", "Address " . $Id, 30, False);
	FieldTextGenerate("City", "City", "City " . $Id, 30, False);
	FieldTextGenerate("Amount", "Amount", "Amount " . $Id, 30, False);

	FieldOkGenerate();
	
	TableClose();
	
	include_once($Page->Prefix.'includes/Footer.inc.php');
?>
