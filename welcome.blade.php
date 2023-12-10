<!DOCTYPE html>
<html>
<head>
	<!-- import bootstrap cdn-->
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity=
"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
		crossorigin="anonymous">
	<!-- import jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity=
"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous">
	</script>
	<!-- import popper.js cdn -->
	<script src=
"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity=
"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous">
	</script>
	<!-- import javascript cdn -->
	<script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity=
"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
		crossorigin="anonymous">
	</script>
	<!-- CSS stylesheet -->
	<style type="text/css">
		
		#green {
			height: 100%;
			background: green;
			text-align: center;
			color: black;
		}
	</style>
</head>
<body>
	<!-- top navbar -->
	<nav class="navbar navbar-expand-lg
			navbar-light bg-primary">
		<!-- hamburger button that toggles the navbar-->
		<button class="navbar-toggler" type="button"
			data-toggle="collapse" data-target="#navbarNavAltMarkup"
			aria-controls="navbarNavAltMarkup" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
			</span>
		</button>
		<!-- navbar links -->
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="text-center">
				Start Time:3.00 pM and End Time:4.30PM
			</div>
		</div>
	</nav>
	<!-- This container contains the sidebar
			and main content of the page -->
	<!-- h-100 takes the full height of the body-->
	<div class="container-fluid h-100">
		<div class="row h-100">
			<div class="col-2" id="green">
				<h4>About Me</h4>
                <p>Hello there, I am curious, passionate Full-Stack Developer. I have learned Front End and Backend for around Six month
                    from a reputed institution. Strong knowledge of HTML, CSS, Bootstrap, PHP, JavaScript and Laravel. Proficient in Git,
                    NPM, Firebase. To land a job where I can use my technical expertise, talent, originality, and honesty for the organization's
                    betterment.</p>
			</div>
			<!--Contains the main content
					of the webpage-->
                    <div class="col-10 mt-2">
                        @foreach($posts as $post)
                <div class="row">
				<div class="card col-3">
                    
                    <img src="{{asset('placeholder.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$post->title}}</h5>
                      <p class="card-text">{{$post->description}}</p>
                    </div>
                    
                  </div>
                </div>
               
				
                  @endforeach
			</div>
            
		</div>
	</div>
    <footer>
        <div class="card text-center" style="width: 100%;">
            <div class="card-body">
              Github Link:
            </div>
          </div>
    </footer>
</body>
</html>
