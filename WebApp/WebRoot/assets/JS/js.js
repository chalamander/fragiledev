// JS Script

var titleDead = false;
var pasedState = 0;

var x = document.getElementById("myAudio");
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('01e18c2040acf98343e4', {
      encrypted: true
    });

    var channel = pusher.subscribe('test_channel');
    channel.bind('my_event', function(data) {

      var json = JSON.parse(data.message);

      if(+json['gs'] == +1){
        $('body').css('background-color','#f50505')

        $('#pageTitle').removeClass("animated");
        $('#pageTitle').removeClass("zoomIn");
        $('#pageTitle').addClass("animated");
        $('#pageTitle').addClass("hinge");

        slides = 20;

        //Add the title:
        $('#pageTitle').html('<div class="alert alert-danger" role="alert"><strong>Oh mini fridges!</strong> you did a bad thing.</div>');

        titleDead = true;



        if(pasedState != +json['gs']){
          pasedState = +json['gs']
          x.play();
        }

      }else if(+json['gs'] == +0){

        if(titleDead){

         $('#pageTitle').html('Skate Wave');

         titleDead = false;
         slides = 10;

       }


       $('body').css('background-color','#333454')

       $('#pageTitle').removeClass("animated");
       $('#pageTitle').removeClass("hinge");
       $('#pageTitle').addClass("animated");
       $('#pageTitle').addClass("zoomIn");



       if(pasedState != +json['gs']){
        pasedState = +json['gs']
        x.play();
      }


    }

    $('#timeTarget').html(json['time']);
    $('#scoreTarget').html(json['score']);
    


  });

var slides = 11; //number of slides
var i = 1; //first slide
var delay = 100; //set delay
var timer;







function pauseAudio() {
  x.pause();
}



function pngani() {
  if (i <= slides) {


    $('#show').attr('src', 'https://cdn.webaddressgoeshere.com/BrumHack/' + '00' + i + '.png');
    
    if(slides >= 20){
      $('#pageTitle').removeClass("animated");
      $('#pageTitle').removeClass("rollOut");
      $('#pageTitle').addClass("animated");
      $('#pageTitle').addClass("rollOut");
    }

  }
  
  if( i > slides){
    i = 1;
  }else{
    i++;
  }
}



$(document).ready(function(){

  timer = setInterval(pngani, delay);
});