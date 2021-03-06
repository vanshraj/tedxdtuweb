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
            $('.loader-overlay').fadeOut();
            $('body').css("overflow-y","scroll");
        }
    window.onload = codeAddress;
    $('body').css("overflow-y","hidden");
    $('a[href^="#"]').click(function(){

var the_id = $(this).attr("href");

    $('html, body').animate({
        scrollTop:$(the_id).offset().top
    }, 'slow');

    return false;});

//login signup 
$('.forgot_password').click(function(){
    $('.user_password').css('display','none');
    $('.send_password').css('display','block');
    $('.login_button').css('display','none');
    $('.forgot_password').css('display','none');
    $('.sign-in').css('display','inline-block');
    $('.new_account').css('display','none');
    $('.loginmodal-container h1').text('New password will be sent to your email.');
});
$('.sign-in').click(function(){
    $('.send_password').css('display','none');
    $('.login_button').css('display','block');
    $('.user_password').css('display','block');
    $('.forgot_password').css('display','inline-block');
    $('.sign-in').css('display','none');
    $('.new_account').css('display','inline-block');
    $('.loginmodal-container h1').text('Login to Your Account.');
});

//overlay of speakers

    $('.effect-zoe').click(function()
    {   
        overlayopen();

        var over = $(".overlay");
        $(".overlay iframe").css('display','block');
        if( windowWidth > 800 )
            over.css("height","80%");
        else 
            over.css("height","100%");
        
        over.css("opacity","1");
         
        var imgsrc = $(this).children('img').attr("src");
        $(".overlay img").attr("src",imgsrc);

        var videosrc = $(this).children('figcaption');
        videosrc = videosrc.children('a').attr('href');
        if(!videosrc){
            over.find(".col-md-8").eq(1).css({
                "display" : "none"
            });
        }else{
            over.find(".col-md-8").eq(1).css({
                "display" : "block"
            });
        }
        if(videosrc=="")
            $(".overlay iframe").css('display','none');
        $(".overlay iframe").attr('src',videosrc);
        
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
    };

    function overlayclose(){
        $('.overlay').css("opacity","0");
        $('.overlay').css("height","0%");
        $('.overlay-back').css("height","0%");
        $('.overlay-back').css("opacity","0");
        $('nav').css("display","block");
        $('body').css("overflow-y","scroll");
        $(".overlay iframe").attr('src','');
    };


//parallax javascript 
(function(){
    man_front = $('.man-front');
    cloud_back = $('.cloud-back');
    
    man = {
        scroll : man_front.offset().top - window.innerHeight,
        height : man_front.outerHeight(),
        top : man_front.offset().top
    };
    man.scrollTill = man.top + man.height;
    
    cloud = {
        scroll : cloud_back.offset().top - window.innerHeight,
        height : cloud_back.outerHeight(),
        top : cloud_back.offset().top
    }
    cloud.scrollTill = cloud.top + cloud.height;

    //parallax javascript 
    if(windowWidth > 800 )
        $(window).scroll(function(){
            var wScroll = window.scrollY;
            if(wScroll > man.scroll && wScroll < man.scrollTill){
                man_front.css({'transform':'translate( ' + (wScroll-100 - man.top)/30 +'% , 0px'});
            }else if(wScroll > cloud.scroll && wScroll < cloud.scrollTill){
                cloud_back.css({'transform':'translateX( -'+ (wScroll+800 - cloud.top)/70+'%'});
            }
            //var wScroll = $(this).scrollTop();

        });

})()

//collaapse menu on click anywhere
$(document).click(function(e) {
    if (!$(e.target).is('a')) {
        $('.collapse').removeClass('navbar-bg-add');
        $('.collapse').collapse('hide');        
    }
});


//
// Create Countdown
$(function() {

  var Countdown = function(options) {
    $.extend(this, {
      endDate: new Date(2017, 2, 18, 6, 0, 0, 0)
    }, options);

    this.cache();
    this.bind();

    return this;
  };
  $.extend(Countdown.prototype, {
    cache: function() {
      this.date = new Date();
      this.secCounter = parseInt((this.endDate - this.date) / 1000);
    },
    bind: function() {
      this.timer();
    },
    timer: function() {
      var timeInSec = this.secCounter,
        $daysCircle = $('.days').closest('.time-circle').find('.progress'),
        $secondsCircle = $('.seconds').closest('.time-circle').find('.progress'),
        $minutesCircle = $('.minutes').closest('.time-circle').find('.progress'),
        $hoursCircle = $('.hours').closest('.time-circle').find('.progress'),
        $seconds = $('.seconds'),
        $days = $('.days'),
        $minutes = $('.minutes'),
        $hours = $('.hours');

      function pad(number) {
        return (number < 10 ? '0' : '') + number
      }

      function setScale(type, degree) {
        type.css({
          '-webkit-transform': 'rotate(' + -degree * 6 + 'deg)',
          '-moz-transform': 'rotate(' + -degree * 6 + 'deg)',
          '-ms-transform': 'rotate(' + -degree * 6 + 'deg)',
          '-o-transform': 'rotate(' + -degree * 6 + 'deg)',
          'transform': 'rotate(' + -degree * 6 + 'deg)'
        });
      };

      var setInterv = setInterval(function() {

        (timeInSec > 0 ? timeInSec-- : timeInSec = 0);

        var getSeconds = timeInSec % 60,
          getMinutes = Math.floor(timeInSec / 60 % 60),
          getHours = Math.floor(timeInSec / 3600 % 24),
          getDays = Math.floor(timeInSec / 86400 ),
          getWeeks = Math.floor(timeInSec / 604800);

        $seconds.text(pad(getSeconds));
        $minutes.text(pad(getMinutes));
        $hours.text(pad(getHours));
        $days.text(pad(getDays));

        setScale($secondsCircle, getSeconds);
        setScale($minutesCircle, getMinutes);
        setScale($hoursCircle, getHours);
        setScale($daysCircle, getDays);

        if (timeInSec <= 0) {
          clearInterval(setInterv);
          console.log('End of counting');
        }

      }, 1000);
    }
  });
  window.Countdown = Countdown;
});

$(function() {
  var app = new Countdown({
    //properties
    // endDate: new Date(2017, 3, 18, 17, 0, 0, 0)
  });
});

$(function(){
    $(".arrow-up").on("click",function(){
        $("html,body").animate({
            scrollTop:"0px"
        },"slow")
    })
});
