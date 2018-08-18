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
function printvalues(){
var values = $("input[name='sub[]']")
              .map(function(){return $(this).val();}).get();
var pickedsemester = function({a}){

return {a};
}
console.log(pickedsemester(subject_credits));
}
