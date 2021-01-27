

<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Appetiser Apps Exam</title>

	    <!-- Bootstrap -->
	    <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css" >-->
	    <link rel="stylesheet" href="{{asset('css/app.css')}}" >
	    <link rel="stylesheet" href="{{asset('css/_style.css')}}" >

	</head>
	<body>




	   	<nav class="navbar navbar-inverse ">
	     
	        <div class="navbar-header">
	          
	          <a class="navbar-brand" href="/">Appetiser Apps Exam</a>
	        </div>
	       
	      
	    </nav>


		@yield('content')
  


	        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	     
	        <!-- Include all compiled plugins (below), or include individual files as needed -->
	 
	    <script src="{{asset('js/app.js')}}"></script>
	      <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js" type="text/javascript" ></script>-->

  
  
  	</body>
</html>