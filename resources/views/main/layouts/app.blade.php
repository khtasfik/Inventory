<!DOCTYPE html>
<html lang="en" dir="ltr">
    
<!-- Mirrored from laravel.spruko.com/volgh/leftmenu_icon_light/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 16:19:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
      @include('main.components.styles')
        
    </head>

    <body class="app sidebar-mini">
		

				
@include('main.components.left-bar'); 

@include('main.components.header'); 

<!-- End Header -->

<!-- Body Part Start -->

						@yield('content');
						
	<!-- Body Part End -->

					

<!-- Footer Components -->
  
@include('main.components.footer');  

<!-- End Footer -->

        
		
<!-- Script Components -->

{{-- scripts --}}
    @include('main.components.scripts')

<!-- End Script -->

            </body>
</html>
