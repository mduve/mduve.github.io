$.fn.hasVerticalScrollBar = function () {
  if (this[0].clientHeight < this[0].scrollHeight) {
    return true
  } else {
    return false
  }
} 

var detectScrollBar = function(){
	if ($('.left').hasVerticalScrollBar() && $('body').hasClass('design')) {
		$('.left nav').css('margin','0 1rem 0 0');
	} else {
		$('.left nav').css('margin','0 0 0 0');
	};				
}

$(window).on('resize', function(){
	detectScrollBar();				
});