
(function(window, $) {

	window.requestAnimFrame = (function(){
	  return  window.requestAnimationFrame       ||
	          window.webkitRequestAnimationFrame ||
	          window.mozRequestAnimationFrame    ||
	          function( callback ){
	            window.setTimeout(callback, 1000 / 60);
	          };
	})();
	
	var y = 0,
		f = 0.45;

	function move() {
		y -= f;
		$('#banner').css('background-position', 'center ' + y + 'px');
	  requestAnimationFrame(move);
	}
	move();

})(window, jQuery);