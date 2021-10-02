
@include('frontend.layout.header')
@yield('slider')
<div id="mainBody">
	<div class="container">
	<div class="row">
      
    {{-- @include('frontend.layout.sidebar'); --}}

    @yield('content')
 
		</div>
	</div>
</div>
@include('frontend.layout.footer')
