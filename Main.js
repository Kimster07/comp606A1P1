
$(document).ready(function(){
    $('#btnShow').click(function(){
        $('#box').show('slow');
    }); //Show Function
    $('#btnHide').click(function(){
        $('#box').hide('slow');
    });  //Hide Function
    $('#btnToggle').click(function(){
        $('#box').toggle('fast');
    }); //Toggle Function Fast
    $('#btnToggle1').click(function(){
        $('#box').toggle('medium');
    }); //Toggle Function Medium
    $('#btnToggle2').click(function(){
        $('#box').toggle('2000');
    }); //Toggle Function for 2 Sec
    $('#btnFadeOut').click(function(){
        $('#box').fadeOut(1000);
    }); //Fade Out Function
    $('#btnFadeIn').click(function(){
        $('#box').fadeIn(1000);
    }); //Fade In Function
    $('#btnFadeTog').click(function(){
        $('#box').fadeToggle(1000);
    }); //Fade Toggle
    $('#btnFadeTo').click(function(){
        $('#box2').fadeTo("fast",0.5);
    }); //Fade To 0.5
    $('#btnFadeTo1').click(function(){
        $('#box2').fadeTo("slow",1.0);
    }); //Fade To 1.0
    $('#btnSlideDown').click(function(){
        $('#box').slideDown(3000);
    }); //Slide Down Function
    $('#btnSlideUp').click(function(){
        $('#box').slideUp(3000);
    }); //Slide Up Function
    $('#btnSlideTog').click(function(){
        $('#box').slideToggle(3000);
    }); //Slide Toggle
    $('#btnStop').click(function(){
        $('#box').stop();
    }); //Stop Animation

    $('#btnStop2').click(function(){
        $('#box2').stop();
    });

    $('#btnStop3').click(function(){
        $('#box3').stop();
    });

    $('#moveRight').click(function(){
        $('#box2').animate({
            left: 100,
            height: '150px',
            width:'150px',
            opacity: '0.5'
        });
    }); //Animate Function to Move Right

    $('#moveLeft').click(function(){
        $('#box2').animate({
            left: 0,
            height: '100px',
            width: '100px',
            opacity:'1'
        });
    }); //Animate Function to Move Left

    $('#moveAround').click(function(){
        var box = $('#box2');
        box.animate({
            left: 200
        });
        box.animate({
            top: 200
        });
        box.animate({
            left:0,
            top: 200
        });
        box.animate({
            left: 0,
            top:0
        });
    }); //Animate Function to move Box Around

    $(document).ready(function(){
        $("#btnAnimate").click(function(){
          var div = $("#box3");  
          div.animate({left: '100px'}, "slow");
          div.animate({fontSize: '3em'}, "slow");
        });
      });
});