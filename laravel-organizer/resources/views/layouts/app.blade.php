<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="/assets/js/popup.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/nucleo-icons.css', 'resources/css/nucleo-svg.css', 'resources/css/argon-dashboard-tailwind.css', 'resources/js/plugins/chartjs.min.js', 'resources/js/plugins/perfect-scrollbar.min.js', 'resources/js/argon-dashboard-tailwind.js'])
</head>

<body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 dark:text-slate-500">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.side-navigation')
        <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
            <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
                navbar-main navbar-scroll="false">
                <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                    {{-- navlink --}}
                    @if (isset($navhead))
                        <nav>
                            {{ $navhead }}
                        </nav>
                    @endif

                    {{-- top navigation --}}
                    @include('layouts.navigation')
                </div>
            </nav>

            <!-- Page Content -->
            {{ $slot }}
        </main>
        @include('layouts.configurator')
    </div>
    <!-- plugin for charts  -->
    <script src="/assets/js/plugins/chartjs.min.js" async></script>
    <!-- plugin for scrollbar  -->
    <script src="/assets/js/plugins/perfect-scrollbar.min.js" async></script>
    <!-- main script file  -->
    <script src="/assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
</body>

</html>
