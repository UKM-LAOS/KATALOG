<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body class="h-full w-full bg-slate-50">
    <div class="flex flex-col h-screen bg-gray-100">
        @include('components.navbarAdmin')

        <div class="flex-1 p-4">
            <div class="grid grid-cols-1 gap-4 mt-2 p-2 lg:ml-52">
                @yield('content')
            </div>
        </div>
    </div>
    @stack('js')
</body>

</html>
