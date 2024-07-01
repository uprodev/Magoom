@@include('files/utils.js');


window.addEventListener("DOMContentLoaded", () => {
	if (isMobile()) {
		document.body.classList.add('mobile');
	}

	if (iOS()) {
		document.body.classList.add('mobile-ios');
	}

	if (isSafari()) {
		document.body.classList.add('safari');
	}

	gsap.registerPlugin(ScrollTrigger);

	replaceImageToInlineSvg('.img-svg');
	initSmoothScrollByAnchors();
	initAnchorsLinkOffset();
	initCssVariableHeight();
	initCssVariableWidth();
	initParallax();

	// ==== sections =====================================================
	@@include('../sections/header/header.js')
	@@include('../sections/home-intro/home-intro.js')
	@@include('../sections/services/services.js')
	@@include('../sections/reviews/reviews.js')
	@@include('../sections/footer/footer.js')
	// ==== // sections =====================================================

	// ==== components =====================================================
	@@include('../components/spoiler/spoiler.js')
	// ==== // components =====================================================

	

	document.body.classList.add('page-loaded');
});
