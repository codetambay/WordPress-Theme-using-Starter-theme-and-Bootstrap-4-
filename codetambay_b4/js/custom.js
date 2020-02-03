
/* 
    Author      : baymax
    Date        : Jan 2020
    Url         : https://codetambay.com/
    Github      : 
    File Name   : custom.css
    Description : WordPress Theme, Responsive, Bootstrap 4, Starter Theme
    Version     : 0.1
*/
(function($){

    // carousel item count
    var itemcount = $('#home .carousel-item').length;//count carousel image 
    
    // carousel indicator
	for (var i=0; i < itemcount; i++) {
		var insertIndicatorElem = '<li data-target="#home" data-slide-to="' + i + '"';
		insertIndicatorElem += '></li>';
		$('#home ol').append(insertIndicatorElem);
	}  
    $('#home ol li').first().addClass( "active" );



    // carousel item active class
    $('#home .carousel-item').first().addClass( "active" );

})(jQuery);
