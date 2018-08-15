<?php
class student{

public $name;

public $length= count($marks);
public function calc_GPA(){
for($i=0;$i<$length;$i++){
if($marks[$i]>=90 && $marks[$i]<=100)
array_push($gpa,10);

else if($marks[$i]>=75 && $marks[$i]<=89)
array_push($gpa,9);

else if($marks[$i]>=65 && $marks[$i]<=74)
array_push($gpa,8);

else if($marks[$i]>=55 && $marks[$i]<=64)
array_push($gpa,7);

else if($marks[$i]>=50 && $marks[$i]<=54)
array_push($gpa,6);

else if($marks[$i]>=45 && $marks[$i]<=49)
array_push($gpa,5);

else if($marks[$i]>=40 && $marks[$i]<=44)
array_push($gpa,4);

else 
array_push($gpa,0);




}




} 
public function calc_cgpa(){
$res=0;$len=count($credits);
for($i=0;$i<$len;$i++){
$res+=$credits[$i]*$gpa[$i];

}
echo $res;
}

}



$Maths = $_GET["sub1"];
$TOC =$_GET["sub2"];
$COA= $_GET["sub3"];
$DBMS   =$_GET["sub4"];
$OOP  =$_GET["sub5"];
$CS   =$_GET["sub6"];


?>
