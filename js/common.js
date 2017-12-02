
function changeTab(obj) {
		var newId = obj.getAttribute("data-val");
		$('.selected').removeClass('selected');
		$('#'+newId).addClass('selected');
		$('a').removeClass('selected_link');
		$(obj).addClass('selected_link');
}

$(document).ready(function(){
      console.log("ready");

  $(window).on('scroll', function(obj){
			if(document.documentElement.clientHeight<800){
				if($(this).scrollTop() > 375){
					$(".nav-fixed").css("position","fixed");
					$(".nav-fixed").css("top","0px");
					$(".nav-fixed").css("z-index","999");
				}
				else{
					$(".nav-fixed").css("position","static");
				}

			}
			else{
   			if($(this).scrollTop() > 225){
   				$(".nav-fixed").css("position","fixed");
   				$(".nav-fixed").css("top","0px");
   				$(".nav-fixed").css("z-index","999");
   			}
   			else{
   				$(".nav-fixed").css("position","static");
   			}
		}
   });

});
//Math.round(document.documentElement.clientHeight * .14)
