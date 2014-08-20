/*-----------------------------------------------------------------------------------*/
/*	AJAX PORTFOLIO
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function($){
'use strict';
	
	$('body').on('click', 'ul.grid li a, .gallery-wrapper a', function(){
		var url = $(this).attr('href');
		
		$('.content-wrapper').prepend('<div id="spinningSquaresG"><div id="spinningSquaresG_1" class="spinningSquaresG"></div><div id="spinningSquaresG_2" class="spinningSquaresG"></div><div id="spinningSquaresG_3" class="spinningSquaresG"></div><div id="spinningSquaresG_4" class="spinningSquaresG"></div><div id="spinningSquaresG_5" class="spinningSquaresG"></div><div id="spinningSquaresG_6" class="spinningSquaresG"></div><div id="spinningSquaresG_7" class="spinningSquaresG"></div><div id="spinningSquaresG_8" class="spinningSquaresG"></div></div>');
		
		$.get(url, function(data){
			var filtered = jQuery(data).filter('section').removeClass('content');
			
			$(filtered).find(".rslides").responsiveSlides({
			  speed: 500,
			  timeout: 4000,
			  pager: true
			});
			
			$(filtered).find('.tab-container').easytabs();
			
			$(filtered).find('.accordion > dd.active').show();
			  
			$(filtered).find('.accordion > dt > a').click(function() {
				if( $(this).parent().hasClass('active') ){
					$(this).parents('.accordion').find('dt').removeClass('active');
					$(this).parents('.accordion').find('dd').removeClass('active').slideUp();
					return false;
				} else {
					$(this).parents('.accordion').find('dt').removeClass('active');
					$(this).parents('.accordion').find('dd').removeClass('active').slideUp();
					$(this).parent().addClass('active').next().addClass('active').slideDown();
					return false;
				}
			});
			
			$(filtered).imagesLoaded(function(){
				$('ul.grid, .gallery-wrapper').animate({ 'left' : '-100%', 'opacity' : '0' }, function(){
					$('ul.grid, .gallery-wrapper').css('max-height', '0px');
					$("html, body").animate({ scrollTop: 0 }, 200);
					$('#loader').html(filtered);
					$('#spinningSquaresG').remove();
					$('#loader').slideDown(function(){
						jQuery(window).trigger('resize');
					});
				});
			});
		});
		return false;
	});
	
	$('body').on('click', '.post-nav', function(){
		var url = $(this).attr('href');
		
		$('.content-wrapper').prepend('<div id="spinningSquaresG"><div id="spinningSquaresG_1" class="spinningSquaresG"></div><div id="spinningSquaresG_2" class="spinningSquaresG"></div><div id="spinningSquaresG_3" class="spinningSquaresG"></div><div id="spinningSquaresG_4" class="spinningSquaresG"></div><div id="spinningSquaresG_5" class="spinningSquaresG"></div><div id="spinningSquaresG_6" class="spinningSquaresG"></div><div id="spinningSquaresG_7" class="spinningSquaresG"></div><div id="spinningSquaresG_8" class="spinningSquaresG"></div></div>');
		
		$.get(url, function(data){
			var filtered = jQuery(data).filter('section').removeClass('content');
			
			$(filtered).find(".rslides").responsiveSlides({
			  speed: 500,
			  timeout: 4000,
			  pager: true
			});
			
			$(filtered).find('.tab-container').easytabs();
			
			$(filtered).find('.accordion > dd.active').show();
			  
			$(filtered).find('.accordion > dt > a').click(function() {
				if( $(this).parent().hasClass('active') ){
					$(this).parents('.accordion').find('dt').removeClass('active');
					$(this).parents('.accordion').find('dd').removeClass('active').slideUp();
					return false;
				} else {
					$(this).parents('.accordion').find('dt').removeClass('active');
					$(this).parents('.accordion').find('dd').removeClass('active').slideUp();
					$(this).parent().addClass('active').next().addClass('active').slideDown();
					return false;
				}
			});
			
			$(filtered).imagesLoaded(function(){
				$('#loader').animate({ 'left' : '-100%', 'opacity' : '0' }, function(){
					$("html, body").animate({ scrollTop: 0 }, 200);
					$('#spinningSquaresG').remove();
					$('#loader').html(filtered).animate({ 'left' : '0', 'opacity' : '1' });
				});
			});
		});
		return false;
	});
	
	$('body').on('click', 'a.close', function(){
		
		$('#loader').slideUp(function(){
			$('ul.grid, .gallery-wrapper').css('max-height', '');
			$('ul.grid, .gallery-wrapper').animate({ 'left' : '0', 'opacity' : '1' },function(){
				jQuery(window).trigger('resize');
			});
		});
		
		return false;
	});

});
