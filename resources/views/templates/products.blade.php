<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tiêu đề trang</title>
    <link rel="stylesheet" href="">
    @yield('css')
</head>
@include('includes.header')
<body id="{{$pageId}}">
<h2>Tiêu đề từ template</h2>
nồng vào trang new
@yield('content')
<script href=""></script>
@yield('js')

@include('includes.footer')
</body>
</html