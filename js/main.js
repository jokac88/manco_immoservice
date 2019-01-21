$(document).ready(function () {
	setTimeout(function () {
		$("#loader").hide();
	}, 1500);
});

$(window).scroll(function () {
	var navbar = $("#navbar").outerHeight();
	if ($(window).scrollTop() >= navbar) {
		$(".logo").css({
			"width": "60px"
		});
		$("#navbar").addClass("change");
		$("#nav").addClass("change");
	} else {
		$(".logo").css({
			"width": "50px"
		});
		$("#navbar").removeClass("change");
		$("#nav").removeClass("change");
	}
});

$(document).ready(function () {
	var owl = $("#home .owl-carousel");
	owl.owlCarousel({
		rewind: true,
		items: 1,
		nav: false,
		dots: false,
		lazyLoad: true,
		autoplay: false
	});
});

$(document).ready(function () {
	var owl = $("#reference .owl-carousel");
	owl.owlCarousel({
		rewind: true,
		items: 1,
		nav: false,
		dots: true,
		lazyLoad: true,
		autoplay: true,
		autoplayTimeout: 3000,
	});
});

$(document).ready(function () {
	if ($("#back-to-top").length) {
		var scrollTrigger = 500, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$("#back-to-top").addClass("show");
				} else {
					$("#back-to-top").removeClass("show");
				}
			};
		backToTop();
		$(window).on("scroll", function () {
			backToTop();
		});
		$("#back-to-top").on("click", function (e) {
			e.preventDefault();
			$("html, body").animate({
				scrollTop: 0
			}, 1000);
		});
	}
});

$(document).ready(function () {
	$(".hamburger").click(function () {
		if ($(this).hasClass("is-active")) {
			$(this).removeClass("is-active");
			$("#sidenav").removeClass("active");
			$("#sidenav").addClass("no-active");
			$("#close-nav").removeClass("active");
			$("#close-nav").addClass("no-active");
			$("body").css("overflow", "auto");
		} else {
			$(this).addClass("is-active");
			$("#sidenav").removeClass("no-active");
			$("#sidenav").addClass("active");
			$("#close-nav").removeClass("no-active");
			$("#close-nav").addClass("active");
			$("body").css("overflow", "hidden");
		}
	});
	$("#close-nav").click(function () {
		$(this).removeClass("active");
		$(this).addClass("no-active");
		$(".hamburger").removeClass("is-active");
		$("#sidenav").removeClass("active");
		$("#sidenav").addClass("no-active");
		$("body").css("overflow", "auto");
	});
	$(".profile").click(function () {
		$(".hamburger").removeClass("is-active");
		$("#sidenav").removeClass("active");
		$("body").css("overflow", "auto");
	});
});

$("body").scrollspy({
	target: "#nav"
});

$(document).ready(function () {
	$(".nav-link").click(function () {
		var href = $(this).attr("href");
		$("html, body").animate({
			scrollTop: $(href).offset().top
		}, 1000);
		$("#sidenav").removeClass("active");
		$(".hamburger").removeClass("is-active");
		$("#close-nav").removeClass("active");
	});
});
