var windowWidth = $(window).width();
(function() {

    var width, height, largeHeader, canvas, ctx, points, target, animateHeader = true;

    // Main
    initHeader();
    initAnimation();
    addListeners();

    function initHeader() {
        width = window.innerWidth;
        height = window.innerHeight;
        target = {x: width/2, y: height/2};

        largeHeader = document.getElementById('large-header');
        largeHeader.style.height = height+'px';

        canvas = document.getElementById('demo-canvas');
        canvas.width = width;
        canvas.height = height;
        ctx = canvas.getContext('2d');

        // create points
        points = [];
        var ydiv;
        if(windowWidth > 800)
            ydiv=20;
        else
            ydiv=13;
        for(var x = 0; x < width; x = x + width/ydiv) {
            for(var y = 0; y < height; y = y + height/ydiv) {
                var px = x + Math.random()*width/ydiv;
                var py = y + Math.random()*height/ydiv;
                var p = {x: px, originX: px, y: py, originY: py };
                points.push(p);
            }
        }
        var xclose;
        if(windowWidth > 800)
            xclose = 5;
        else
            xclose = 1;
        // for each point find the 5 closest points
        for(var i = 0; i < points.length; i++) {
            var closest = [];
            var p1 = points[i];
            for(var j = 0; j < points.length; j++) {
                var p2 = points[j]
                if(!(p1 == p2)) {
                    var placed = false;
                    for(var k = 0; k < xclose; k++) {
                        if(!placed) {
                            if(closest[k] == undefined) {
                                closest[k] = p2;
                                placed = true;
                            }
                        }
                    }

                    for(var k = 0; k < xclose; k++) {
                        if(!placed) {
                            if(getDistance(p1, p2) < getDistance(p1, closest[k])) {
                                closest[k] = p2;
                                placed = true;
                            }
                        }
                    }
                }
            }
            p1.closest = closest;
        }

        // assign a circle to each point
        for(var i in points) {
            var c = new Circle(points[i], 2+Math.random()*2, 'rgba(255,255,255,0.6)');
            points[i].circle = c;
        }
    }

    // Event handling
    function addListeners() {
        if(!('ontouchstart' in window)) {
            window.addEventListener('mousemove', mouseMove);
        }
        window.addEventListener('scroll', scrollCheck);
        window.addEventListener('resize', resize);
    }

    function mouseMove(e) {
        var posx = posy = 0;
        if (e.pageX || e.pageY) {
            posx = e.pageX;
            posy = e.pageY;
        }
        else if (e.clientX || e.clientY)    {
            posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
            posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
        }
        target.x = posx;
        target.y = posy;
    }

    function scrollCheck() {
        if(document.body.scrollTop > height) animateHeader = false;
        else animateHeader = true;
    }

    function resize() {
        width = window.innerWidth;
        height = window.innerHeight;
        largeHeader.style.height = height+'px';
        canvas.width = width;
        canvas.height = height;
    }

    // animation
    function initAnimation() {
        animate();
        for(var i in points) {
            shiftPoint(points[i]);
        }
    }

    function animate() {
        if(animateHeader) {
            ctx.clearRect(0,0,width,height);
            for(var i in points) {
                // detect points in range
                if(Math.abs(getDistance(target, points[i])) < 4000) {
                    points[i].active = 0.3;
                    points[i].circle.active = 0.6;
                } else if(Math.abs(getDistance(target, points[i])) < 20000) {
                    points[i].active = 0.1;
                    points[i].circle.active = 0.3;
                } else if(Math.abs(getDistance(target, points[i])) < 40000) {
                    points[i].active = 0.02;
                    points[i].circle.active = 0.1;
                } else {
                    points[i].active = 0;
                    points[i].circle.active = 0;
                }

                drawLines(points[i]);
                points[i].circle.draw();
            }
        }
        requestAnimationFrame(animate);
    }

    function shiftPoint(p) {
        TweenLite.to(p, 1+1*Math.random(), {x:p.originX-50+Math.random()*100,
            y: p.originY-50+Math.random()*100, ease:Circ.easeInOut,
            onComplete: function() {
                shiftPoint(p);
            }});
    }

    // Canvas manipulation
    function drawLines(p) {
        if(!p.active) return;
        for(var i in p.closest) {
            ctx.beginPath();
            ctx.moveTo(p.x, p.y);
            ctx.lineTo(p.closest[i].x, p.closest[i].y);
            ctx.strokeStyle = 'rgba(230,230,250,'+ p.active+')';
            ctx.stroke();
        }
    }

    function Circle(pos,rad,color) {
        var _this = this;

        // constructor
        (function() {
            _this.pos = pos || null;
            _this.radius = rad || null;
            _this.color = color || null;
        })();

        this.draw = function() {
            if(!_this.active) return;
            ctx.beginPath();
            ctx.arc(_this.pos.x, _this.pos.y, _this.radius, 0, 2 * Math.PI, false);
            ctx.fillStyle = 'rgba(230,230,250,'+ _this.active+')';
            ctx.fill();
        };
    }

    // Util
    function getDistance(p1, p2) {
        return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2);
    }
    
    function add_bg_nav(){
        $(".navbar-toggle").click(function(){
            var nav = $('.navbar-collapse');
            nav.toggleClass("navbar-bg-add");
        });
    }
    add_bg_nav();



})();

    //onload functions
    function codeAddress() {
            var ma= document.querySelector('.main-title');
            var nb= document.querySelector('.navbar');
            var md= document.querySelector('.btn-scroll-down');
            ma.className += " fade-in one";
            nb.className += " nav-fade";
            md.className += " menu-down-fade";
        }
    window.onload = codeAddress;

    $('a[href^="#"]').click(function(){

var the_id = $(this).attr("href");

    $('html, body').animate({
        scrollTop:$(the_id).offset().top
    }, 'slow');

    return false;});

//login/signup overlay
$('.signup').click(function(){
    fadeobjects();
    $('#signup .form-group').each(function(i){
        setTimeout(function(){
            $('#signup .form-group').eq(i).addClass('isShowing');
        },150*(i+4));
    });

    $('.signup-tab').addClass('active');
    $('.login-tab').removeClass('active');
    $('#login').css("display","none");
    $('#signup').css("display","block");
    loginopen();
    overlayopen();
});

$('.login').click(function(){
    fadeobjects();
    $('#login .form-group').each(function(i){
        setTimeout(function(){
            $('#login .form-group').eq(i).addClass('isShowing');
        },150*(i+4));
    });
    $('.login-tab').addClass('active');
    $('.signup-tab').removeClass('active');
    $('#signup').css("display","none");
    $('#login').css("display","block");
    loginopen();
    overlayopen();
});

$('.overlay-login .closebtn').click(function(){
       overlayclose();
    });

function fadeobjects(){
    setTimeout(function(){
        $('.overlay-login .closebtn').addClass('isShowing');
    },150);
    setTimeout(function(){
            $('.tab-group').addClass('isShowing');
        },300);
    setTimeout(function(){
            $('.overlay-login h1').addClass('isShowing');
        },450);    
    setTimeout(function(){
            $('#signup button').addClass('isShowing');
        },1200);    
    setTimeout(function(){
            $('#login button').addClass('isShowing');
            $('.forgot').addClass('isShowing');
        },900);    
     
}

function removeobjects(){
    $('#signup button').removeClass('isShowing');
    $('#login button').removeClass('isShowing');
    $('.forgot').removeClass('isShowing');
    $('.overlay-login .closebtn').removeClass('isShowing');
    $('.tab-group').removeClass('isShowing');
    $('.overlay-login h1').removeClass('isShowing');
    $('.form-group.isShowing').each(function(){
            $('.form-group.isShowing').removeClass('isShowing');
        });
}

function loginopen(){
    var over = $(".overlay-login");
    if(windowWidth<800)
        over.css("height","480px");
    else
        over.css("min-height","520px")
    over.css("opacity","1"); 
}
   
    $('.overlay-login').find('input, textarea').on('keyup blur focus', function (e) {
      
      var $this = $(this),
          label = $this.prev('label');

          if (e.type === 'keyup') {
                if ($this.val() === '') {
              label.removeClass('active highlight');
            } else {
              label.addClass('active highlight');
            }
        } else if (e.type === 'blur') {
            if( $this.val() === '' ) {
                label.removeClass('active highlight'); 
                } else {
                label.removeClass('highlight');   
                }   
        } else if (e.type === 'focus') {
          
          if( $this.val() === '' ) {
                label.removeClass('highlight'); 
                } 
          else if( $this.val() !== '' ) {
                label.addClass('highlight');
                }
        }

    });

    $('.forgot').click(function(){
        $('#signup').css('display','none');
        $('#login').css('display','none');
        // $('.tab-group').css('display','none');
        $('#forgot-pwd').css('display','block');
    });

    $('.tab p').on('click', function (e) {
      
      e.preventDefault();
      
      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');
      
      target = $(this).attr('href');
      target = "#"+target;

      $(target + ' .form-group').each(function(){
        $(target + ' .form-group').addClass('isShowing');
    });

      $('.tab-content > div').not(target).hide();
      
      $(target).fadeIn(600);
      
    });


//overlay of speakers

    $('.effect-zoe').click(function()
    {   
        overlayopen();

        var over = $(".overlay");
        
        if( windowWidth > 800 )
            over.css("height","80%");
        else 
            over.css("height","100%");
        
        over.css("opacity","1");
         
        var imgsrc = $(this).children('img').attr("src");
        $(".overlay img").attr("src",imgsrc);
        
        var speakerName = $(this).children('figcaption');
        speakerName = speakerName.children('h2').html();
        $(".overlay h1").html(speakerName);

        var speakerInfo = $(this).children('.speaker-info').html();
        $(".overlay p").html(speakerInfo);
    });

    $('.overlay .closebtn').click(function(){
       overlayclose();
    });

    $('.overlay-back').click(function(){
        overlayclose();
    });

    function overlayopen(){
        $('nav').css("display","none");
        $('body').css("overflow-y","hidden");
        $('.overlay-back').css("height","100%");
        $('.overlay-back').css("opacity","1");
        $('#forgot-pwd').css('display','none');
    };

    function overlayclose(){
        $('.overlay').css("opacity","0");
        $('.overlay').css("height","0%");

        $('.overlay-login').css("opacity","0");
        $('.overlay-login').css("height","0");
        removeobjects();
        $('.overlay-back').css("height","0%");
        $('.overlay-back').css("opacity","0");
        $('nav').css("display","block");
        $('body').css("overflow-y","scroll");
    };

//parallax javascript 

$(window).scroll(function(){

    var wScroll = $(this).scrollTop();
    var wScrollB = wScroll + $(window).height();

    if( windowWidth > 800)
    {
        $('.man-front').css({'transform':'translate( ' + (wScrollB- $('.man-front').offset().top)/40 +'% , 0px'});
    
        $('.cloud-back').css({'transform':'translateX( -'+ (wScrollB- $('.cloud-back').offset().top)/60+'%'});

        $(".inspire").css({'transform':'translate( 0px, ' + (wScrollB- $('.inspire').offset().top)/6+'%)'});
    }
    
    
    $('.front-x').css({'transform':'translate(0px, -'+ (wScroll)/7+'%)'});
   
    // if (wScroll>= $('#about').offset().top/1.1)
    // {  $('.navbar-default').css("box-shadow","5px -69px 190px 220px rgba(0,0,0,1)"); }

    // else { $('.navbar-default').css("box-shadow","5px -149px 90px 200px rgba(0,0,0,1)"); }

});
