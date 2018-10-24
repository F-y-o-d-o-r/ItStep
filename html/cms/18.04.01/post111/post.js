var http = require('http'); 
var fs = require('fs');

function onRequest(req, res){



   if(req.method == 'POST'){


    req.on('data', function(chunk) {

      //grab form data as string
      var formdata = chunk.toString();

      //grab A and B values
      var a = eval(formdata.split("&")[0]);
      var b = eval(formdata.split("&")[1])

      var result = calc(a,b);

      console.log(chunk.toString());
      console.log(a);
      console.log(b);
      console.log(result);

      //fill in the result and form values
    var summ = result.toString();

    //respond
    res.setHeader('Content-Type', 'text/html');
    res.writeHead(200);
    res.end(summ);

    });

  } else {
var index = fs.readFileSync('./index.html');
    res.writeHead(200, {'Content-Type': 'text/html; charset=utf8'});
    res.end(index);
}

};
function calc(a,b){
  return  Number(a)+Number(b);
}
http.createServer(onRequest).listen(8888);
