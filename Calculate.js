var subjects_credits = { semester4:{Maths:4,
TOC:4,
COA:4,
DBMS:4,
OOP:3,
CS:4
},
semester3:{Maths_3:4,
FCS:4,
STLD:4,
CnS:4,
DS:4,
CGMM:4
 },
semester2:{Maths_2:4,
Physics_2:3,
ED:3,
IP:3,
EM:3,
Communication:3,
EVS:3
 },
semester1:{
Maths_1:4,
Physics_1:3,
MP:3,
ET:3,
HV:1,
FCS:2,
Chemistry:3

}
}
function Mark_GP(values){
var GP_Array = new Array();
for(var j=0;j<values.length;j++){
if(values[j]>=90&&values[j]<=100)
GP_Array[j]=10;
else if(values[j]>=75&&values[j]<=89)
GP_Array[j]=9;
else if(values[j]>=65&&values[j]<=74)
GP_Array[j]=8;
else if(values[j]>=55&&values[j]<=64)
GP_Array[j]=7;
else if(values[j]>=50&&values[j]<=54)
GP_Array[j]=6;
else if(values[j]>=45&&values[j]<=49)
GP_Array[j]=5;
else if(values[j]>=40&&values[j]<=44)
GP_Array[j]=4;
else
GP_Array[j]=0;





}
return GP_Array;

}
var total_credits=0;
var i =0;
var  Total_Gpa = 0;
var GPAs = new Array();                  // var values contains marks received from user
                                             // 
var semester = subjects_credits.semester4;
function printvalues(){
var values = $("input[name='sub[]']")
              .map(function(){return $(this).val();}).get();
GPAs = Mark_GP(values);

Object.keys(semester).forEach(function(key){
 total_credits+=semester[key];
 Total_Gpa+=semester[key]*GPAs[i];
i++ 


})

var toreturn = Total_Gpa/total_credits;
$("#gpa").html(toreturn);
$("#Analyse-button").prop('disabled',false);
}
