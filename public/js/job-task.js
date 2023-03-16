/* Please ❤ this if you like it! 😊 */

(function ($) {
	"use strict";

	$(window).on("load", function () {
		isotopeInit();
	});

	/* Isotope Init */
	function isotopeInit() {
		$(".grid").isotope({
			itemSelector: ".grid-item",
			layoutMode: "fitRows",
			masonry: {
				isFitWidth: true
			}
		});


		// filter items on button click
		// $(".portfolio__nav__btn").on("click", function () {
		// 	var filterValue = $(this).attr("data-filter");
        //     //alert(filterValue);
        //     $(".grid").isotope({ filter: filterValue });

        //     // Toggle active class on button click
        //     $(".portfolio__nav__btn").removeClass("active");
        //     $(this).addClass("active");
		// });



        //Show category image in ajax
        $(".ajax_btn").on("click", function () {
			var filterValue = $(this).attr("data-filter");

            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            $.ajax({
                url:'/show/category/ajax',
                type:'post',
                data:{filterValue:filterValue},
                success:function(resp){
                   // alert(resp)
                   $(".ajaxShow").html(resp);
                }
            })

			// Toggle active class on button click
			$(".portfolio__nav__btn").removeClass("active");
			$(this).addClass("active");
		});
	}

})(jQuery);
