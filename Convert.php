<?php
require_once('/convertapi-php-master/lib/ConvertApi/autoload.php');
use \ConvertApi\ConvertApi;
ConvertApi::setApiSecret('NB8EreFDNukmE3Gd');
$result = ConvertApi::convert('txt', [
    'File' => 'http://ggsipu.ac.in/ExamResults/2018/101018/Revised%20result%20of%20NAGWANG_2015_015_B.Tech.(IT)_USS_DECLARE_RESULT_MJ2018.pdf',
], 'pdf'
);
$result->saveFiles('convertedIPU');
$Vdata = file_get_contents("convertedIPU");
$re = '/(\d+)\([A-Z]\+?\)/';
preg_match_all($re, $Vdata, $matches);

//$values = var_dump(array_map('intval',$matches[0]));
$values = array_map('intval',$matches[0]);
foreach($values as $value){
    echo "<p> $value </p>";
}



?>