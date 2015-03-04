$( document ).ready(function() {
	$(".team-image-container .caption-hover").hover(
				function() {	
					$(this).siblings(".caption").css("height", "100%");
					$(".team-image-container .caption-text").css("opacity", "1");
				}, function() {
					$(".team-image-container .caption").css("height", "0%");
					$(".team-image-container .caption-text").css("opacity", "0");
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

