<div class="clearfix"></div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="images/White-01.png">
			</div>
			<div class="col-md-3 offset-md-6">
				<p><span>Phone :</span> + (44) 20 7993 5080<br> + (1) 646 519 7377</p>
				<p><span>Email :</span> renders@cubedots.com</p>
				<p>Copyright © Cubedots</p>
			</div>
		</div>
	</div>
	<a class="bottomtop" href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js"></script>
<style>
.calendly-badge-widget{display:none !important;}
</style>
<script>Calendly.initBadgeWidget({ url: 'https://calendly.com/curenders/15min', text: 'Schedule time with me', color: '#00a2ff', textColor: '#ffffff', branding: true });</script>
<script>
jQuery(".schedule-demo").click(function(){
jQuery(".calendly-badge-content").trigger('click');
});
</script>
<script type="text/javascript">
$( document ).ready(function() {
	$('.brand-carousel').owlCarousel({
	  loop:true,
	  margin:10,
	  autoplay:true,
	  responsive:{
	    0:{
	      items:1
	    },
	    600:{
	      items:3
	    },
	    1000:{
	      items:5
	    }
	  }
	});
	$(".testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        nav:true,
        autoplay:true,
        loop:true
    });
		$(window).scroll(function() {
		    if ($(this).scrollTop() >= 50) {
		        $('#return-to-top').fadeIn(200);
		    } else {
		        $('#return-to-top').fadeOut(200);
		    }
		});
		$('#return-to-top').click(function() {
		    $('body,html').animate({
		        scrollTop : 0
		    }, 500);
		});

    //preloader
      $(window).trigger('resize').trigger('scroll');
      var $preloader = jQuery('.preloader'),
        $spinner = $preloader.find('.spinner');
      $spinner.fadeOut();
      $preloader.delay(350).fadeOut('slow');
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
        }

            if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
            }
                $(this).addClass("active");
            });

    $(function() {
        var selectedClass = "";
        $(".filter-button").click(function(){ 
        selectedClass = $(this).attr("data-filter"); 
     $("#inner-portfolio").fadeTo(100,.9);
        $(".gallery_product").not("."+selectedClass).fadeOut().removeClass('scale-anm');
    setTimeout(function() {
      $("."+selectedClass).fadeIn().addClass('scale-anm');
      $("#inner-portfolio").fadeTo(300,1);
    }, 300); 
        
    });
});

$('body').on('click','#interior',function(){
    var divcount = $('.category1').length;
    if(divcount >= 3){
        $('#loadmore').show();
    }else{
        $('#loadmore').hide();
    }
 });

$('body').on('click','#loadmore',function(){
    var divcount = $('.category1').length;
    if(divcount >= 3){
        $('#hidediv').show(500);
        $('#hidediv1').show(500);
        $('#loadmore').hide();
    }else{
        $('#loadmore').hide();
    }
 })

 $('body').on('click','#360render',function(){
    var divcount1 = $('.category2').length;
    if(divcount1 >= 3){
        $('#hidediv').hide();
        $('#hidediv1').hide();
        $('#loadmore').hide();
        $('#loadmore1').show();
    }else{
        $('#loadmore1').hide();
    }
 });
});
</script>
<script>
jQuery(document).ready(function($) {
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
setTimeout(function(){
        $(document).find('button:first-child'). trigger('click');
    },1200);

<?php 

if(isset($_GET['gallery'])){
	if($_GET['gallery'] == 'interior'){
	?>
		setTimeout(function(){
	        $(document).find('button#interior'). trigger('click');
	    },1200);
	<?php
	}
	if($_GET['gallery'] == '360render'){
	?>
		setTimeout(function(){
	        $(document).find('button#360render'). trigger('click');
	    },1200);
	<?php
	}
}
?>
</script>
</body>
</html>