<?php
# this are comments
# <?php are requaried in order to run properly
# the benith is a function
function xor_decrypt()
{
	#every variable must have $ before
	$key = "qw8J";
	$text = json_encode(array("showpassword"=>"yes","bgcolor"=>"#ffffff"));
	
	#$text = $in;
	$outText = '';

	for($i=0; $i<strlen($text);$i++)
	{
		$outText .= $text[$i]  ^  	$key[$i % strlen($key)];

	}
	return $outText;
}
#the variable is declared when a value is added 
#expl it can be number if number is assied or string if string is assigned
#ClVLIh4ASCsCBE8lAxMacFMZV2hdVVotEhhUJQNVAmhSEV4sFxFeaAw%3D
#echo "ok";
$cookie = "ClVLIh4ASCsCBE8lAxMacFMZV2hdVVotEhhUJQNVAmhSEV4sFxFeaAw%3D";
$basedata = base64_decode($cookie);
echo "basedata: " . $basedata . "\n";
$xordata = xor_decrypt();
echo "xordata: ".$xordata ."\n";
echo base64_encode($xordata);
$jsondata = json_decode($xordata,true);
echo "jsondata: " . $jsondata . "\n";










?>
