$(window).scroll(function() {
	if ($(".navbar").offset().top > 50) {
		$("#arrow-top").fadeIn(400);
	} else {
		$("#arrow-top").fadeOut(400);
	}

	var selector1 = '#nav_pres';
	var selector2 = '#nav_actu';
	var selector3 = '#nav_phot';
	var selector4 = '#nav_cont';

	var windscroll = $(window).scrollTop();
	var sec1 = $('#presentation').offset().top - 50;
	var sec2 = $('#actualites').offset().top - 50;
	var sec3 = $('#portfolio').offset().top - 50;
	var sec4 = $('#contact').offset().top - 50;

	if (windscroll >= sec4) {
		$(selector4).next().show(200);
		$(selector1).next().hide(200);
		$(selector2).next().hide(200);
		$(selector3).next().hide(200);
	} else if (windscroll >= sec3) {
		$(selector3).next().show(200);
		$(selector1).next().hide(200);
		$(selector2).next().hide(200);
		$(selector4).next().hide(200);
	} else if (windscroll >= sec2) {
		$(selector2).next().show(200);
		$(selector1).next().hide(200);
		$(selector3).next().hide(200);
		$(selector4).next().hide(200);
	} else if (windscroll >= sec1) {
		$(selector1).next().show(200);
		$(selector2).next().hide(200);
		$(selector3).next().hide(200);
		$(selector4).next().hide(200);
	} else {
		$(selector1).next().hide(200);
		$(selector2).next().hide(200);
		$(selector3).next().hide(200);
		$(selector4).next().hide(200);
	}
});

$(document).ready(function(){
	$('.owl-carousel').owlCarousel();

	$(".nav-item").mouseover(function() {
		var underliner = $(this).next();
		if(!underliner.is(':visible')) {			
			underliner.show(200);

			$(this).data('clicked', false);
			$(this).click(function() {
				$(this).data('clicked', true);
			});

			$(this).mouseout(function() {
				if(!$(this).data('clicked')) {
					underliner.hide(200);
				}
			});
		}
	});
});

function scroll_top() {
	window.scroll(0,0);
}

function send_mail() {
	if ($.trim($('#user').val()) == '' || $.trim($('#mail').val()) == '' || $.trim($('#subject').val()) == '' || $.trim($('#message').val()) == '') {
		$.notify({
			message:'Veuillez remplir tous les champs.',
			type: 'warning',
		}, {
			allow_dismiss: false ,
			type: 'warning',
			offset: 20,
			spacing: 10,
			z_index: 1031,
			mouse_over: null,
			animate: {
				enter: 'animated fadeInDown',
				exit: 'animated fadeOutUp'
			},
			placement: {
				align: 'center'
			},
			offset: {
				y: 70
			},
			delay: 3000
		});
	} else {
		$('#submit_mail').prop("disabled",true);
	
		$.post( "send_mail.php", $( "#form_mail" ).serialize())
			.done(function() {
				$.notify({
					message:'Mail envoyé avec succès !',
					type: 'success',
				}, {
					allow_dismiss: false ,
					type: 'success',
					offset: 20,
					spacing: 10,
					z_index: 1031,
					mouse_over: null,
					animate: {
						enter: 'animated fadeInDown',
						exit: 'animated fadeOutUp'
					},
					placement: {
						align: 'center'
					},
					offset: {
						y: 70
					},
					delay: 3000
				});

				$("#user").val("");
				$("#mail").val("");
				$("#subject").val("");
				$("#message").val("");
				$('#submit_mail').prop("disabled",false);
			})
		;
	}
}

function zoom_onclick(image) {
	if ($('#carousel_pictures').hasClass('dragged')) {
		$('#carousel_pictures').removeClass('dragged');
		return false;
	}
	
	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var modalImg = document.getElementById("img_modal");
	var captionText = document.getElementById("caption");

	modal.style.display = "block";
	modalImg.src = image.src;
	captionText.innerHTML = image.alt;

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
		modal.style.display = "none";
	}
}

function dragged(element) {
	$(element).addClass('dragged');
}

function news_onclick(file) {
	var modal = document.getElementById("myModal");
	modal.style.display = "block";

	var iframe = document.getElementById('iframeNews');
	iframe.src = 'markdownProcessor.php?file=' + file;
	iframe.style.display = 'block';
	
	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() { 
		iframe.style.display = "none";
		modal.style.display = "none";
	}
}