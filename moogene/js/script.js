$( document ).ready(function() {
	$('img.product-image').watermark({
		path: 'http://fursysofficeconsultant.com/moogene/images/product-watermark.png',
		outputWidth: 'auto',
		outputHeight: 'auto',
	});

	$('.btn-close').click(function(){
		window.open('about:blank', '_self').close();
	});

});
