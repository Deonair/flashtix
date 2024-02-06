$('#mycanvas').bind('click', function(e){
  var mycanvas = document.getElementById('mycanvas');
  var ctx = mycanvas.getContext('2d');
  ctx.beginPath();
  ctx.moveTo(25,80);
  ctx.lineTo(200,80);
  ctx.stroke();

  var grd = ctx.createLinearGradient(200,70,200,110);
grd.addColorStop(0, '#f55b5b');
grd.addColorStop(1, '#3112a3');
ctx.fillStyle=grd;
ctx.fillRect(25,25,100,100 );
ctx.strokeRekt(25,25,100,100);

  ctx.font= '40pt Georgia';
  ctx.shadowBlur = 5;
  ctx.shadowColor = 'rgb(0, 0, 0)';
  ctx.filltext('tekst',50,100);

  ctx.beginPath();
  var x = 220;
  var y = 100;
  var radius = 25;
  var beginhoek = 0;
  var eindhoek = (Math.PI/180)*360;
  var klok = false;
  ctx.arc(x,y,radius,beginhoek,eindhoek,klok);
  ctx.fill();
  ctx.stroke();

  ctx.save();
  ctx.beginPath();
  x = e.pageX - this.offsetLeft;
  y = e.pageY - this.offsetTop;
  radius = 15;
  ctx.arc(x,y,radius,beginhoek,eindhoek,klok);
  ctx.fill();
  ctx.stroke();
  ctx.restore();

cirkelObj={
  radius: 10, maxRadius: 100,
  x:e.pageX - this.offsetLeft,
  Y:e.pageY - this.offsetTop
}
tekstObj={
  size: 10,
  font: 'pt Georgia',
  maxSize: 50,
  x: e.pageX - this.offsetLeft,
  y: e.pageY - this.offsetTop
}
posterObj={
  x: e.pageX - this.offsetLeft,
  y: e.pageY - this.offsetTop
}

ctx.lineWidth = 2;
//load image
newPosterObj = new Image();
newPosterObj.src = 'img/shakira.png'
});//einde canvas
