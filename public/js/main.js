// MAIN

$( document ).ready(function() {
	$(".show-up").on('mouseover', function(){
		$(".showValueBtn").html($(this).attr("data-value"));
	});
	$(".chooseOne").on('mouseleave', function(){
		$(".showValueBtn").html("Choisis ta catégorie &nbsp; <i class='fa fa-arrow-up'></i>");
	});
});



// CARROUSEL

jQuery(document).ready(function($){
	//set animation timing
	var animationDelay = 5000,
		//loading bar effect
		barAnimationDelay = 3800,
		barWaiting = barAnimationDelay - 3000, //3000 is the duration of the transition on the loading bar - set in the scss/css file
		//letters effect
		lettersDelay = 50,
		//type effect
		typeLettersDelay = 150,
		selectionDuration = 500,
		typeAnimationDelay = selectionDuration + 800,
		//clip effect 
		revealDuration = 600,
		revealAnimationDelay = 1500;
	
	initHeadline();
	

	function initHeadline() {
		//insert <i> element for each letter of a changing word
		singleLetters($('.cd-headline.letters').find('b'));
		//initialise headline animation
		animateHeadline($('.cd-headline'));
	}

	function singleLetters($words) {
		$words.each(function(){
			var word = $(this),
				letters = word.text().split(''),
				selected = word.hasClass('is-visible');
			for (i in letters) {
				if(word.parents('.rotate-2').length > 0) letters[i] = '<em>' + letters[i] + '</em>';
				letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>': '<i>' + letters[i] + '</i>';
			}
		    var newLetters = letters.join('');
		    word.html(newLetters).css('opacity', 1);
		});
	}

	function animateHeadline($headlines) {
		var duration = animationDelay;
		$headlines.each(function(){
			var headline = $(this);
			
			if(headline.hasClass('loading-bar')) {
				duration = barAnimationDelay;
				setTimeout(function(){ headline.find('.cd-words-wrapper').addClass('is-loading') }, barWaiting);
			} else if (headline.hasClass('clip')){
				var spanWrapper = headline.find('.cd-words-wrapper'),
					newWidth = spanWrapper.width() + 10
				spanWrapper.css('width', newWidth);
			} else if (!headline.hasClass('type') ) {
				//assign to .cd-words-wrapper the width of its longest word
				var words = headline.find('.cd-words-wrapper b'),
					width = 0;
				words.each(function(){
					var wordWidth = $(this).width();
				    if (wordWidth > width) width = wordWidth;
				});
				headline.find('.cd-words-wrapper').css('width', width);
			};

			//trigger animation
			setTimeout(function(){ hideWord( headline.find('.is-visible').eq(0) ) }, duration);
		});
	}

	function hideWord($word) {
		var nextWord = takeNext($word);
		
		if($word.parents('.cd-headline').hasClass('type')) {
			var parentSpan = $word.parent('.cd-words-wrapper');
			parentSpan.addClass('selected').removeClass('waiting');	
			setTimeout(function(){ 
				parentSpan.removeClass('selected'); 
				$word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
			}, selectionDuration);
			setTimeout(function(){ showWord(nextWord, typeLettersDelay) }, typeAnimationDelay);
		
		} else if($word.parents('.cd-headline').hasClass('letters')) {
			var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
			hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
			showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);

		}  else if($word.parents('.cd-headline').hasClass('clip')) {
			$word.parents('.cd-words-wrapper').animate({ width : '2px' }, revealDuration, function(){
				switchWord($word, nextWord);
				showWord(nextWord);
			});

		} else if ($word.parents('.cd-headline').hasClass('loading-bar')){
			$word.parents('.cd-words-wrapper').removeClass('is-loading');
			switchWord($word, nextWord);
			setTimeout(function(){ hideWord(nextWord) }, barAnimationDelay);
			setTimeout(function(){ $word.parents('.cd-words-wrapper').addClass('is-loading') }, barWaiting);

		} else {
			switchWord($word, nextWord);
			setTimeout(function(){ hideWord(nextWord) }, animationDelay);
		}
	}

	function showWord($word, $duration) {
		if($word.parents('.cd-headline').hasClass('type')) {
			showLetter($word.find('i').eq(0), $word, false, $duration);
			$word.addClass('is-visible').removeClass('is-hidden');

		}  else if($word.parents('.cd-headline').hasClass('clip')) {
			$word.parents('.cd-words-wrapper').animate({ 'width' : $word.width() + 10 }, revealDuration, function(){ 
				setTimeout(function(){ hideWord($word) }, revealAnimationDelay); 
			});
		}
	}

	function hideLetter($letter, $word, $bool, $duration) {
		$letter.removeClass('in').addClass('out');
		
		if(!$letter.is(':last-child')) {
		 	setTimeout(function(){ hideLetter($letter.next(), $word, $bool, $duration); }, $duration);  
		} else if($bool) { 
		 	setTimeout(function(){ hideWord(takeNext($word)) }, animationDelay);
		}

		if($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
			var nextWord = takeNext($word);
			switchWord($word, nextWord);
		} 
	}

	function showLetter($letter, $word, $bool, $duration) {
		$letter.addClass('in').removeClass('out');
		
		if(!$letter.is(':last-child')) { 
			setTimeout(function(){ showLetter($letter.next(), $word, $bool, $duration); }, $duration); 
		} else { 
			if($word.parents('.cd-headline').hasClass('type')) { setTimeout(function(){ $word.parents('.cd-words-wrapper').addClass('waiting'); }, 200);}
			if(!$bool) { setTimeout(function(){ hideWord($word) }, animationDelay) }
		}
	}

	function takeNext($word) {
		return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
	}

	function takePrev($word) {
		return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
	}

	function switchWord($oldWord, $newWord) {
		$oldWord.removeClass('is-visible').addClass('is-hidden');
		$newWord.removeClass('is-hidden').addClass('is-visible');
	}
});








// MENU

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


//this is where we apply opacity to the arrow
$(window).scroll( function(){

	//get scroll position
	var topWindow = $(window).scrollTop();
	//multipl by 1.5 so the arrow will become transparent half-way up the page
	var topWindow = topWindow * 1.5;

	//get height of window
	var windowHeight = $(window).height();

	//set position as percentage of how far the user has scrolled
	var position = topWindow / windowHeight;
	//invert the percentage
	position = 1 - position;

	//define arrow opacity as based on how far up the page the user has scrolled
	//no scrolling = 1, half-way up the page = 0
	$('.arrow-wrap').css('opacity', position);

});






//Code stolen from css-tricks for smooth scrolling:
$(function() {
	$('.arrow-wrap').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});
});