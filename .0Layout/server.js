var connect  = require('connect');
var compiler = require('connect-compiler');
var static = require('serve-static');

var server = connect();

server.use(  static(__dirname + '/app'));

server.listen(8080,()=>{
    console.log("Server Listen on port 8080");
});

var livereload = require('livereload');
var lrserver = livereload.createServer({
    port: 8081,
    debug: true    
});
lrserver.watch(__dirname + "/app");