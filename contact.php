<?php include 'header.php'?>
<div class="contact">
	<div class="container">
		<h2>Contact Us</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="icon">
					<i class="fa fa-mobile" aria-hidden="true"></i>
				</div>
				<h5>+ (44) 207 993 5080</h5>
				<h5>+ (1) 646 519 7377</h5>
			</div>
			<div class="col-md-4">
				<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
				<h5>86 Argent House <br>
				3 Beaufort Square <br>
				London, NW9 4BP</h5>
			</div>
			<div class="col-md-4">
				<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
				<h5>renders@cubedots.com</h5>
			</div>
		</div>
		<div class="row">
			<h3>Get In Touch</h3>
			<form action="submit.php" method="post" id="formoid">
			<div class="form-container">
				<input type="text" name="name" placeholder="Name" required="" id="name">
				<input type="email" name="email" placeholder="Email Address" required="" id="email">
				<input type="text" name="phone" placeholder="Phone Number" required="" id="phone">
				<input type="submit" name="submit" value="Submit Form">
			</div>
			</form>
		</div>
		<div class="row">
			<div style="width: 100%; overflow: hidden; height: 300px;">
				<iframe style="border: 0; margin-top: -150px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317715.71192633547!2d-0.3817840693070167!3d51.52873519756609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1590739178647!5m2!1sen!2sin" width="100%" height="600" frameborder="0">
				</iframe>
			</div>
		</div>
	</div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type='text/javascript'>
    /* attach a submit handler to the form */
    $("#formoid").submit(function(event) {

      /* stop form from submitting normally */
      event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post with element id name and name2*/
      var posting = $.post( url,$form.serialize() );
      var submit = "ok";
      /* Alerts the results */
      posting.done(function( data ) {
      	console.log(data.status);
      	if(data.status){
      		alert("Success:\n"+data.message);
      	}else{
      		alert("Failed:\n"+data.message);
      	}
      });
    });
</script>
<?php include 'footer.php'?>