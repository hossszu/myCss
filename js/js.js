var ctx = document.getElementById('header1').getContext('2d');
if(ctx != null){
    
    var lastX = ctx.canvas.width * Math.random();
    var lastY = ctx.canvas.height * Math.random();
    var hue = 0;

    ctx.canvas.width = '948';
    ctx.canvas.height = '100';
    ctx.scale(0.9, 0.8);
    //set & draw fill color of canvas
    ctx.fillStyle = 'rgba(0,0,0,.1)'; 
    ctx.fillRect(0, 0, ctx.canvas.width, ctx.canvas.height);
    
    //set & draw the border of canvas
    ctx.lineWidth = 2;
    ctx.strokeStyle = 'rgba(0,0,0,.4)';
    ctx.strokeRect(100, 17, ctx.canvas.width, ctx.canvas.height);  
      
    function line(){   
        
        //start drawing goodies                  
        ctx.save();
        //ctx.translate(ctx.canvas.width/2 , ctx.canvas.height/2);
        ctx.scale(0.9, 0.9);
        //ctx.translate(-ctx.canvas.width/2 , -ctx.canvas.height/2);
        ctx.beginPath();	
        ctx.lineWidth = 2 * Math.random() * 2;
        ctx.moveTo(lastX, lastY);

        lastX = ctx.canvas.width * Math.random();
        lastY = ctx.canvas.height * Math.random();
        ctx.lineTo(lastX,lastY);
        hue = hue + 10 * Math.random();
        ctx.strokeStyle = 'hsl(' + hue + ', 90%, 90%)';
        ctx.shadowColor = 'hsl(' + hue + ', 60%, 60%)';
        ctx.shadowBlur = 4;
        ctx.stroke();
        ctx.restore();
    }
   // setInterval(line, 250);
    function blank(){
        ctx.fillStyle = 'rgba(192,192,192,0.05)';
        ctx.fillRect(0,0, ctx.canvas.width, ctx.canvas.height);
    }
  //  setInterval(blank, 100);
}
// requestAnim shim layer by Paul Irish
//    window.requestAnimFrame = (function(){
//      return  window.requestAnimationFrame       ||
//              window.webkitRequestAnimationFrame ||
//              window.mozRequestAnimationFrame    ||
//              window.oRequestAnimationFrame      ||
//              window.msRequestAnimationFrame     ||
//              function(/* function */ callback, /* DOMElement */ element){
//                window.setTimeout(callback, 1000 / 60);
//              };
//    })();
//  

// example code from mr doob : http://mrdoob.com/lab/javascript/requestanimationframe/
//
//var canvas, context;
//
//init();
//animate();
//
//function init() {
//
//    canvas = document.createElement( 'canvas' );
//    canvas.width = 356;
//    canvas.height = 256;
//
//    context = canvas.getContext( '2d' );
//
//    document.body.appendChild( canvas );
//
//}
//
//function animate() {
//    requestAnimFrame( animate );
//    draw();
//
//}
//
//function draw() {
//
//    var time = new Date().getTime() * 0.002;
//    var x = Math.sin( time ) * 96 + 128;
//    var y = Math.cos( time * 0.9 ) * 96 + 128;
//
//    context.fillStyle = 'rgb(245,245,245)';
//    context.fillRect( 0, 0, 255, 255 );
//
//    context.fillStyle = 'rgb(255,0,0)';
//    context.beginPath();
//    context.arc( x, y, 10, 0, Math.PI * 2, true );
//    context.closePath();
//    context.fill();
//
//}