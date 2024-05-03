<!DOCTYPE html>
<html>
<head>
     <link href="/styles/flowbite.min.css" rel="stylesheet"/>
     <script src="/styles/flowbite.min.js"></script>
<head>

<body>
    <header>
        @include('components.admin_header')
    </header>

    <div>
        @yield('content')
    </div>

    <footer>
        @include('components.admin_footer')
    </footer>
</body>
</html>