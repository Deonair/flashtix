$(function() {
    $.mobile.pushStateEnabled = false;
    var welkomstMelding = 'Welkom!';
    $('#homecontent').prepend(
        '<p class="melding">' + welkomstMelding + '</p>');
    
    $('#homecontent').append('<p id="gratis">Gratis Tickets!</p>');
    $('#gratis').remove();
});

$('body').unbind('click', function(event) {
    alert('Je hebt over het scherm geveegd');
});

$('body').unbind('click', function(e) {
    alert(e.pageX);
    alert(e.pageY);
});

$('body').taphold(function(){
    datum= new Date();
    uur = datum.getHours();
    if(uur <=11){
        $('<p>Goedemorgen!</p>').prependTo('#homecontent');
    } else if(uur>= 12 && uur <=17){
        $('<p>Goedenmiddag!</p>').prependTo('#homecontent');
    } else if(uur >= 18 && uur <=24){
        $('<p>Goedenavond!</p>').prependto('#homecontent');
    }  
});
$().trigger('taphold');

$('#mycanvas').bind('click', function(e) {
    var mycanvas = document.getElementById('mycanvas');
    var ctx = mycanvas.getContext('2d');
    ctx.beginPath();
    ctx.moveTo(25,80);
    ctx.lineTo(200,80);
    ctx.stroke();
    
    ctx.beginPath();
    ctx.moveTo(25,60);
    ctx.lineTo(200,60);
    ctx.stroke();

    var grd=ctx.createLinearGradient(200,70,200,110);
    grd.addColorStop(0, '#f55b5b');
    grd.addColorStop(1, '#3112a3');
    ctx.fillStyle=grd;
    ctx.fillRect(25,25,100,100);

    ctx.font= '40pt Georgia';
    ctx.shadowBlur = 5;
    ctx.shadowColor = 'rgb(0,0,0)';
    ctx.fillText('tekst',50,100);

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
    x: e.pageX - this.offsetLeft,
    y: e.pageY - this.offsetTop
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
ctx.linewidth = 2;
//load image
newPosterObj = new Image();
newPosterObj.src = 'images/shakiraposter.jpg';

function animeren() {
    ctx.save();
    //canvas vegen
    ctx.clearRect(0,0,mycanvas.clientWidth, mycanvas.height);
    //teken poster
    ctx.drawImage(newPosterObj,posterObj.x,posterObj.y);
    posterObj.x +=3;
    ctx.restore();
    //increase radius
   
    cirkelObj.radius += 2;
    ctx.beginPath();
    ctx.arc(
        cirkelObj.x,
        cirkelObj.y,
        cirkelObj.radius,
        0,
        2*Math.PI,
        false);
        ctx.stroke();

    ctx.font= tekstObj.size + tekstObj.font;
    ctx.fillText('Flashtix ', tekstObj.x,tekstObj.y);
    //tekengrootte
    tekstObj.size +=2;
    ctx.restore();
}//einde animeren
setInterval(animeren,100);
});//einde canvas

$('#lastminutecontent > ul > li > a > img').css('border-radius','50%');

$('[href="#shakira-biopage"]').
append('<p class="melding">Uitverkocht!<p>');

$('[href="#ViennaBlues-biopage"]').
append('<p class="melding">Nog 10 kaarten !');

datum = new Date();
    if(datum.getDay()===3 || datum.getDay()===0) {
        $('#Rock').hide();
        $('#Helgi-concert').hide();
    }

datum = new Date();
    if(datum.getDay()===0 || datum.getDay()===6) {
        $('#MichaelBuble-concert').hide();
}

$('#lastminutecontent').append('<img id="theImg" src="images/newimage.jpg" height="100px"/>');

$('#lastminutecontent li') .each(function(){
    $(this).show();
});

$('<img class="poster" src="img/e32018.jpg" alt="pic" width="200px">')
.insertBefore('#lastminutecontent > ul');

$('#twittercontent').socialist( {
    networks: [ {name: 'twitter', id: 'shakira'}
] });

// POST-ajax methode
$('#submit').click(function () {
        var email = document.form.email.value;
        var concert = document.form.concert.value;
        
        $.ajax({
            type:'POST',
            url: 'getEticket.php',
            data: ({
                email: email,
                concert: concert
            }),
            cache: false,
            dataType: "text",
            success: onSuccess
        });
       $('#log').ajaxError(function (event, request, settings, exception) {
           $('#log').html("Error: " + settings.url + "<br>HTTP Code: " + request.status);
       }) ;
       function onSuccess(data){
           $('#form').append('<p>E-ticket voor het concert' + concert + '</p><img src="' + data + '" alt="pic" width="35%"');
           localStorage.setItem(concert,data);
           
       }
    });

    if(localStorage.getItem('bruce')!== null){
        eticket = localStorage.getItem('bruce');
        $('#etickets').append(
            '<p>E-ticket Concert Bruce Springsteen</p><img src="' + eticket + '" alt="pic" width="35%">');
    }
    if(localStorage.getItem('shakira')!==null) {
        eticket = localStorage.getItem('shakira');
        $('#etickets').append(
            '<p>Eticket Concert Shakira</p><img src="' + eticket + '" alt="pic" width="35%">');
    }

    $('#add').bind('click', function () {
        $('#agendalijst').append('<li class="agendaitem">' + '<input class="itembox" type="checkbox">' + '<input type="date" value="" id="itemdate">' + '<input id="itemtext" type="textarea" ' + 'placeholder="to do ..."></li>');
    });

    $('#sel').bind('click', function () {
       $('.itembox').each(function () {
           $(this).click();
       });
    });

    $('#sav').bind('click', function () {
       localStorage.clear();
       var teller = 0;
       $('.agendaitem').each(function () {
          itemdate = $(this).children('input:eq(1)').val();
          itemtext = $(this).children('input:eq(2)').val();
          if(itemdate === null) return;
          teller++;
          obj = {
              id: teller,
              datum: itemdate,
              tekst: itemtext
          };
          localStorage.setItem(teller,JSON.stringify(obj));
       });
    });

    for (var i=1;i<=localStorage.length;i++){
        if(localStorage.getItem(i)===null){continue}
        read_obj = JSON.parse(localStorage.getItem(i));
        tekst = read_obj.tekst;
        datum = read_obj.datum;
        $('#agendalijst').append(
            '<li class="agendaitem">' +
            '<input class="itembox" type="checkbox">'+
            '<input type="date" value="' + datum + 'id="itemdate">'+
            '<input id="itemtext" type="textarea" ' + 'value="' + tekst + '"></li>');
    }
});