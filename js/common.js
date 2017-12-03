
function changeTab(obj) {
		var newId = obj.getAttribute("data-val");
		$('.selected').removeClass('selected');
		$('#'+newId).addClass('selected');
		$('a').removeClass('selected_link');
		$(obj).addClass('selected_link');
}

$(document).ready(function(){
      console.log("ready");

			var yourNavigation = $(".nav-fixed");
			    stickyDiv = "sticky";
			    yourHeader = $('.header').height();

			$(window).scroll(function() {
			  if( $(this).scrollTop() > yourHeader ) {
			    yourNavigation.addClass(stickyDiv);
			  } else {
			    yourNavigation.removeClass(stickyDiv);
			  }
			});

});
//Math.round(document.documentElement.clientHeight * .14)
