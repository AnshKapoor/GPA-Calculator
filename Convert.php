<?php
require_once('/convertapi-php-master/lib/ConvertApi/autoload.php');
use \ConvertApi\ConvertApi;
//ConvertApi::setApiSecret('NB8EreFDNukmE3Gd');
//$result = ConvertApi::convert('txt', [
  //  'File' => 'http://ggsipu.ac.in/ExamResults/2018/010818/btech/2015%20Batch%20Onwards/6TH%20SEMESTER/031_IT_6thSEM_2015%20Batch%20Onwards.pdf',
//], 'pdf'
//);
//$result->saveFiles('convertedIPU');
//$Vdata = file_get_contents("convertedIPU");
//$your_array = explode("\n\n", $Vdata);
$value = file_get_contents("430356e4-2f91-11e9-8f58-0cc47a792c0a_id_430356e4-2f91-11e9-8f58-0cc47a792c0a.html");
$value = preg_replace('/(<[^>]*) style=("[^"]+"|\'[^\']+\')([^>]*>)/i', '$1$3', $value);
echo $value;
?>
