var http = require('http');
var url = require('url');
var fs = require('fs');


function onRequest(req, res) {

  
  if (req.url == '/time') {
    setTimeout(function() {
      res.end('Время: ' + new Date());
    }, 1500);
  } else {
var stream = fs.createReadStream('index.html');
  stream.pipe(res);
}
}



  http.createServer(onRequest).listen(8888);
