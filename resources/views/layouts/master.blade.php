<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<meta name="author" content="Serge Brunet Torrilus">
	{{-- meta description --}}
	<meta name="description" content="I'm Serge Brunet Torrilus, an Information System, web and database developpment freelancer based in port-au-prince, Haiti.i'm interesting with all the concepts that will take major role in our future like : BIG DATA, SMART CITY, IOT, IA. when im not coding, our learning new things , I pass my time between GYM, MUSIC or TV SHOW">
	{{-- /meta description --}}

		{{-- meta twitter --}}
	<meta name="twitter:card" content="summary_large_image">
	{{-- <meta name="twitter:site" content="@torrilus"> --}}
	<meta name="twitter:ceator" content="@torant1">
	<meta name="twitter:title" content="Serge Brunet Torrilus,Freelancer | Information System | Web and databases developper">
	<meta name="twitter:description" content="I'm Serge Brunet Torrilus, one of the Information System, web and database developper based in port-au-prince, Haiti. This is my freelance website. Here you will also find my resume,  my skills and how you can contact me for a freelance job.">
	{{-- <meta name="twitter:image" content="#"> --}}
	{{-- /meta twitter --}}

	{{-- meta og  --}}
	<meta name="og:title" content="Serge Brunet Torrilus,Freelancer | Information System | Web and databases developper">
	<meta name="og:type" content="website">
	<meta name="og:description" content="I'm Serge Brunet Torrilus, one of the Information System, web and database developper based in port-au-prince, Haiti. This is my freelance website. Here you will also find my resume,  my skills and how you can contact me for a freelance job.">
	<meta name="og:locale" content="en_US">
	<meta name="og:locale:alternate" content="fr_HT">
	<meta name="og:locale:alternate" content="ht">
	<meta name="og:locale:alternate" content="en_CA">
	<meta name="og:locale:alternate" content="fr_CA">
	<meta name="og:locale:alternate" content="en_JM">
	<meta name="og:locale:alternate" content="fr_FR">
	<meta name="og:locale:alternate" content="es_DO">
	{{-- /meta og --}}
	<title>{{$title}}</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/imagehover.css/1.0/css/imagehover.min.css">
	<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,600">

	      <!-- Fonts -->
</head>
<body >
				

			  @include('layouts.partials.nav_master')
		       @yield('content')
		       @include('layouts.partials.footer_master')
	            {{-- footer content --}}

		
	<!-- jQuery library -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js'></script>
<script src='{{ asset('js/demo.js')}}'></script>


	<script src="{{asset('js/bootstrap.js')}}"></script>
	<script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</body>
</html>