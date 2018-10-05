<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>@yield('title')</title>

@include('includes.styles')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('includes.header')

<noscript>Please enable JavaScript to continue.</noscript>

@yield('content')

@include('includes.footer')
@include('includes.scripts')

</body>
</html>