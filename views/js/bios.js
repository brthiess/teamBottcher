$( document ).ready(function() {
	$(".team-image-container a").hover(
				function() {	
					$(this).siblings(".caption").css("opacity", "1");
					$(this).child(".caption-text").css("opacity", "1");
				}, function() {
					$(this).siblings(".caption-text").css("opacity", "0");
					$(this).siblings(".caption").css("opacity", "0");
				});
	$(".bio-image-wrapper img").hover(
				function() {	
					var string = $(this).attr("src");
					string = string.replace("gray", "colour");
					console.log(string);
					$(this).attr("src", string);
				}, function() {
					var string = $(this).attr("src");
					string = string.replace("colour", "gray");
					$(this).attr("src", string);
				});
				
	$("#karrick-bio").focus(
				function() {	
					$(".bio-slider-container").css("margin-left", "0%");
					$(".karrick-text").css("opacity", "1");
					$(".brad-text").css("opacity", "0");
					$(".rob-text").css("opacity", "0");
					$(".tom-text").css("opacity", "0");
					$(".brendan-text").css("opacity", "0");
				});
	$("#brad-bio").focus(
				function() {	
					$(".bio-slider-container").css("margin-left", "-100%");
					$(".karrick-text").css("opacity", "0");
					$(".brad-text").css("opacity", "1");
					$(".rob-text").css("opacity", "0");
					$(".tom-text").css("opacity", "0");
					$(".brendan-text").css("opacity", "0");
				});
	$("#rob-bio").focus(
				function() {	
					$(".bio-slider-container").css("margin-left", "-200%");
					$(".karrick-text").css("opacity", "0");
					$(".brad-text").css("opacity", "0");
					$(".rob-text").css("opacity", "1");
					$(".tom-text").css("opacity", "0");
					$(".brendan-text").css("opacity", "0");
				});
	$("#tom-bio").focus(
				function() {	
					$(".bio-slider-container").css("margin-left", "-300%");
					$(".karrick-text").css("opacity", "0");
					$(".brad-text").css("opacity", "0");
					$(".rob-text").css("opacity", "0");
					$(".tom-text").css("opacity", "1");
					$(".brendan-text").css("opacity", "0");
				});			
	$("#brendan-bio").focus(
				function() {	
					$(".bio-slider-container").css("margin-left", "-400%");
					$(".karrick-text").css("opacity", "0");
					$(".brad-text").css("opacity", "0");
					$(".rob-text").css("opacity", "0");
					$(".tom-text").css("opacity", "0");
					$(".brendan-text").css("opacity", "1");
				});
});

//Transition Scrolling
$(function(){
    var target, scroll;

    $("a[href*=#]:not([href=#])").on("click", function(e) {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            target = $(this.hash);
            target = target.length ? target : $("[id=" + this.hash.slice(1) + "]");

            if (target.length) {
                if (typeof document.body.style.transitionProperty === 'string') {
                    e.preventDefault();
                  
                    var avail = $(document).height() - $(window).height();

                    scroll = target.offset().top;
                  
                    if (scroll > avail) {
                        scroll = avail;
                    }

                    $("html").css({
                        "margin-top" : ( $(window).scrollTop() - scroll ) + "px",
                        "transition" : "1s ease-in-out"
                    }).data("transitioning", true);
                } else {
                    $("html, body").animate({
                        scrollTop: scroll
                    }, 1000);
                    return;
                }
            }
        }
    });

    $("html").on("transitionend webkitTransitionEnd msTransitionEnd oTransitionEnd", function (e) {
        if (e.target == e.currentTarget && $(this).data("transitioning") === true) {
            $(this).removeAttr("style").data("transitioning", false);
            $("html, body").scrollTop(scroll);
            return;
        }
    });
});

