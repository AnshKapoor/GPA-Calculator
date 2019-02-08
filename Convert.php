<?php
require_once('/convertapi-php-master/lib/ConvertApi/autoload.php');
use \ConvertApi\ConvertApi;
//ConvertApi::setApiSecret('NB8EreFDNukmE3Gd');
//$result = ConvertApi::convert('txt', [
  //  'File' => 'http://ggsipu.ac.in/ExamResults/2018/010818/btech/2015%20Batch%20Onwards/6TH%20SEMESTER/031_IT_6thSEM_2015%20Batch%20Onwards.pdf',
//], 'pdf'
//);
//$result->saveFiles('convertedIPU');
$Vdata = file_get_contents("convertedIPU");
$your_array = explode("\n", $Vdata);
?>
<script>
var abc = <?php echo json_encode($Vdata) ?>;

var regexForStudents = /Result of Programme Code:([^]*?)\f/g;
var regexForSubjects = /S\.No\. Paper([^]*?)RESULT TAB/g;
var students = abc.match(regexForStudents);
var subjects = abc.match(regexForSubjects);
document.write(subjects);



</script>