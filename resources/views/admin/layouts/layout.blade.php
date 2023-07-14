<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/navigation.css') }}">
</head>
<body>
<header>
<nav class="navbar">
    <ul>
        <li><a href="/admin/dashboard">dashboard</a></li>
        <li><a href="/admin/contact">contact me</a></li>
    </ul>
</nav>
</header>
<div class="sidebar">
    <ul class="nav-menu">
        <li><a href="/admin/dashboard">dashboard</a></li>
        <li><a href="/admin/contact">contact me</a></li>
{{--        <li class="menu-item-has-children">--}}
{{--            <a href="#">لیست مشتریان</a>--}}
{{--            <ul class="sub-menu">--}}
{{--                <li><a href="#">مشتری 1</a></li>--}}
{{--                <li><a href="#">مشتری 1</a></li>--}}
{{--                <li><a href="#">مشتری 1</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
    </ul>
</div>

@yield('content')

<footer>
    <nav class="navbar">
        <ul>
            <li><a href="/admin/dashboard">dashboard</a></li>
        </ul>
    </nav>
</footer>
</body>
</html>

