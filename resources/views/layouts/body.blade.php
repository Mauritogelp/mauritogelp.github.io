<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
	@include('layouts.header')
	@yield('content')
	<script type="text/javascript">
	  $(document).ready(function() {
	    $("body").tooltip({ selector: '[data-toggle=tooltip]' });
	  });
	</script>
	@yield('script')
</body>
</html>