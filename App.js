
var express = require('express');
var app = express();
var path = require('path');
app.get('/', function(req, res) {
    res.sendFile(path.join(__dirname + '/index1.html'));

});

app.listen(8080);
app.use(express.static('public'));
