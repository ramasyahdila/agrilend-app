<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>@yield('title')</title>
</head>

<body class="h-screen">
    @include('petani.layouts.navbar')
    <!-- main content -->
    <main class="h-[calc(100vh-120px)] w-full absolute top-14">
        <!-- left sidebar -->
        @include('petani.layouts.sidebar')
        <!-- main content -->
        <section id="content"
            class="w-[100wh-60px] lg:w-[100wh-250px] ml-[60px] lg:ml-[240px] p-5 right-0 transition-all duration-500 ease-in-out">
            <h1 class="text-2xl font-semibold">@yield('feature')</h1>
            <hr class="border-b-2 border-gray-500 my-3">
            @yield('content')
        </section>
    </main>

    <script>
        function collapseSidebar() {
            let sidebar = document.getElementById('sidebar')
            let content = document.getElementById('content')
            let toggle = document.getElementById('toggle-button')
            let titles = sidebar.querySelectorAll('span')

            if (sidebar.classList.contains('lg:w-[240px]')) {
                //sidebar
                sidebar.classList.remove('lg:w-[240px]')
                sidebar.classList.add('w-[60px]')

                //content
                content.classList.remove('lg:w-[100wh-250px]')
                content.classList.remove('lg:ml-[240px]')
                content.classList.add('lg:w-[100wh-100px]')
                content.classList.add('ml-[60px]')

                //toggle
                toggle.classList.remove('rotate-0')
                toggle.classList.add('rotate-180')
            } else {
                //sidebar
                sidebar.classList.remove('w-[60px]')
                sidebar.classList.add('lg:w-[240px]')

                //content
                content.classList.remove('lg:w-[100wh-100px]')
                content.classList.remove('ml-[60px]')
                content.classList.add('lg:w-[100wh-250px]')
                content.classList.add('lg:ml-[240px]')

                //toggle
                toggle.classList.remove('rotate-180')
                toggle.classList.add('rotate-0')
            }
        }

        // toggle user dropdown
        function openUserDropdown() {
            document.getElementById('user-dropdown').classList.toggle('hidden')
        }
    </script>
</body>

</html>
