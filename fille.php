<?php 
function xor_encrypt($in)
{
	$key = '<censored>';
	$text = $in;
	$outText = '';

	for($i=0; $i<strlen($text);$i++)
	{
		$outText .= $text[$i]^$key[$i % strlen($key)];
	}
	return $outText;
}
echo 'Raw data' ." dc7378f2b4cd770477cdab99a3f895d3a1541527592" . "\n";
$basedata = base64_encode("dc7378f2b4cd770477cdab99a3f895d3a1541527592");
echo 'base: ' . $basedata . '\n' ;
$xordata = xor_encrypt($basedata);
echo "xordata: " . $xordata . '\n';
$jsondata = json_encode($xordata,true);
echo "jsondata: " . $tempdata .  '\n';
?>
