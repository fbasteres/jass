<body>
    @include('layouts.components.navbar')
    <main>
    <div>
    @yield('content')
    </div>
    </main>
    @include ('layouts.components.sidebar')
</body>