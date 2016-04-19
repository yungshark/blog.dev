<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation.min.css">
    <link rel="stylesheet" type="text/css" href="/css/blog.css">

	@yield('top-script')

</head>
<body>

    @yield('content')

	
    <script src="/js/jquery-2.2.0.min.js"></script>

	{{-- unique JS inclusions for view --}}
	@yield('bottom-script')

</html>