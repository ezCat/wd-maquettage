<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset("/css/main.css") }}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/menubar.css')}}">
    <script src="{{ asset('/js/jquery-2.2.0.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.js')}}"></script>
</head>

<body>

<div id='cssmenu'>

    <ul style="float: right;">
           <li><a href="#"> Home </a></li>
           <li class='active'><a href='#'> Products </a></li>
           <li><a href='#'> About </a></li>
           <li><a href='#'> Contact </a></li>
       </li>
    </ul>

    <ul style="float: left">
        <li><a href="#" style="padding: 10px 0 0 0"> <span class="logo-wd"> WDINNOVE </span></a></li>
    </ul>

</div>

<div class="carrousel-fixed"></div>

</body>

<script type="text/javascript">
    (function($) {

  $.fn.menumaker = function(options) {
      
      var cssmenu = $(this), settings = $.extend({
        title: "WDINNOVE",
        format: "dropdown",
        sticky: false
      }, options);

      return this.each(function() {
        cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
        $(this).find("#menu-button").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('ul');
          if (mainmenu.hasClass('open')) { 
            mainmenu.hide().removeClass('open');
          }
          else {
            mainmenu.show().addClass('open');
            if (settings.format === "dropdown") {
              mainmenu.find('ul').show();
            }
          }
        });

        cssmenu.find('li ul').parent().addClass('has-sub');

        multiTg = function() {
          cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
          cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').hide();
            }
            else {
              $(this).siblings('ul').addClass('open').show();
            }
          });
        };

        if (settings.format === 'multitoggle') multiTg();
        else cssmenu.addClass('dropdown');

        if (settings.sticky === true) cssmenu.css('position', 'fixed');

        resizeFix = function() {
          if ($( window ).width() > 768) {
            cssmenu.find('ul').show();
          }

          if ($(window).width() <= 768) {
            cssmenu.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);

      });
  };
})(jQuery);

(function($){
$(document).ready(function(){

$(document).ready(function() {
  $("#cssmenu").menumaker({
    title: "WDINNOVE",
    format: "multitoggle"
  });

//   $("#cssmenu").prepend("<div id='menu-line'></div>");

// var foundActive = false, activeElement, linePosition = 0, menuLine = $("#cssmenu #menu-line"), lineWidth, defaultPosition, defaultWidth;

// $("#cssmenu > ul > li").each(function() {
//   if ($(this).hasClass('active')) {
//     activeElement = $(this);
//     foundActive = true;
//   }
// });

// if (foundActive === false) {
//   activeElement = $("#cssmenu > ul > li").first();
// }

// defaultWidth = lineWidth = activeElement.width();

// defaultPosition = linePosition = activeElement.position().left;

// menuLine.css("width", lineWidth);
// menuLine.css("left", linePosition);

// $("#cssmenu > ul > li").hover(function() {
//   activeElement = $(this);
//   lineWidth = activeElement.width();
//   linePosition = activeElement.position().left;
//   menuLine.css("width", lineWidth);
//   menuLine.css("left", linePosition);
// }, 
// function() {
//   menuLine.css("left", defaultPosition);
//   menuLine.css("width", defaultWidth);
// });

});


});
})
(jQuery);

</script>
<html>
