<?

	SetValue($_IPS['VARIABLE'], $_IPS['VALUE']);

	$parentid = IPS_GetParent($_IPS['VARIABLE']);
	$helligkeitid = IPS_GetObjectIDByName('Helligkeit', $parentid);
	$mode = GetValueBoolean($modeid);
	$helligkeit = GetValueInteger($helligkeitid);

	LM_display($parentid, $helligkeit, $mode);

?>
