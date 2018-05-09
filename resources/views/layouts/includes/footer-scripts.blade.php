{{ HTML::script('assets/vendor/jquery/jquery-3.2.1.min.js') }}
	{{ HTML::script('assets/vendor/animsition/js/animsition.min.js') }}
	{{ HTML::script('assets/vendor/bootstrap/js/popper.js') }}
	{{ HTML::script('assets/vendor/bootstrap/js/bootstrap.min.js') }}
	{{ HTML::script('assets/vendor/select2/select2.min.js') }}
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	{{ HTML::script('assets/vendor/daterangepicker/moment.min.js') }}
	{{ HTML::script('assets/vendor/daterangepicker/daterangepicker.js') }}
	{{ HTML::script('assets/vendor/slick/slick.min.js') }}
	{{ HTML::script('assets/js/slick-custom.js') }}
	{{ HTML::script('vassets/endor/parallax100/parallax100.js') }}
	<script>
        $('.parallax100').parallax100();
	</script>
	{{ HTML::script('assets/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
	{{ HTML::script('assets/vendor/isotope/isotope.pkgd.min.js') }}
	{{ HTML::script('assets/vendor/sweetalert/sweetalert.min.js') }}
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
	{{ HTML::script('vassets/endor/perfect-scrollbar/perfect-scrollbar.min.js') }}
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
	{{ HTML::script('assets/js/main.js') }}