<!doctype html>
<html>
	<head>
	<title>@yield('title') | Surya University Learning Management System</title>
	
  @include('template.meta')

	</head>

<body>

  @include('template.header')

  @include('template.nav')

<!-- Homepage
============================================= -->
<main id="content" class="s-main" role="main" style="min-height: 435px;">
  @include('template.kuis')
</main>

  @include('template.footer')

<!-- Background
============================================= -->
<div class="s-background animated fadeIn">

  <!-- Gradient Effect
  ============================================= -->
  <div class="gradients">
        <div class="blue"></div>
  </div>
  
</div>

  

</body>
</html>