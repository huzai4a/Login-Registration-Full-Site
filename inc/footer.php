<!-- Bootstrap CDN (js and css) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- link to main.js -->
<script src="/Log-Reg-Site/assets/js/main.js"></script>

<!-- link to css sheet -->
<link href="/Log-Reg-Site/assets/css/style.css" rel="stylesheet" type="text/css" />

<!-- for navbar toggling -->
<script>
        
	$(function() {
	    
	    $(".toggle").on("click", function() {

	        if($(".item").hasClass("active")) {
	            $(".item").removeClass("active");
	        }
	        else{
	            $(".item").addClass("active");
	        }

	    })

	});

</script>

<!-- for show password toggling -->
<script>

function myFunction() {
  var x = document.getElementById("myPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>