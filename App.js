var http = require('http');
var fs = require('fs');
fs.readFile('./index1.html',function(err,html){
if(err){

}
http.createServer(function(req,res){
res.writeHeader(200,{"Content-Type":"text/html"});
res.write(html);
res.end();

}).listen(8000);
console.log('running on 8000');

});
