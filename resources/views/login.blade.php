<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    @vite('resources/css/app.css')
    <!-- Include Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        html,
        body {
            height: 100%;
            overflow: hidden;
        }
    </style>
    <script>
        // Function to set a cookie
        function setCookie(name, value, hours) {
            const date = new Date();
            date.setTime(date.getTime() + (hours * 60 * 60 * 1000));
            document.cookie = name + "=" + value + "; expires=" + date.toUTCString() + "; path=/";
        }

        // Function to get a cookie
        function getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        // Initialize Alpine.js with cookie check
        document.addEventListener('alpine:init', () => {
            Alpine.data('loginPage', () => ({
                login: getCookie('loginState') === 'false' ? false : true,

                toggleLogin() {
                    this.login = !this.login;
                    setCookie('loginState', this.login, 1); // Set cookie with 1-hour expiration
                }
            }));
        });
    </script>
</head>

<body class="h-screen w-screen" x-data="loginPage">
    <div x-show="login" class="bg-[#2C4156] grid grid-cols-2 h-full w-full">
        <!-- Left div -->
        <div class="grid h-full place-items-center">
            <img src="img/LoginLeft.svg" style="height: 50rem; margin:-3rem;" alt="">
        </div>

        <!-- Right div -->
        <div class="bg-[#F2F2F2] font-mono h-full w-full">
            <div class="grid grid-rows-3 h-full">
                <!-- First row remains empty to keep the image in place -->
                <div class="flex justify-center items-end">
                    <div class="text-center text-xl">
                        <p>Temukan barang Elektronik</p>
                        <p>favoritmu di <i class="font-bold">KATALOG</i></p>
                    </div>
                </div>
                <!-- Image in the second row, centered -->
                <div class="flex justify-center items-center">
                    <img src="img/Katalog.svg" alt="">
                </div>

                <!-- Text in the third row, aligned to the bottom -->
                <div class="grid place-items-start justify-center">
                    <button @click="toggleLogin"
                        class="bg-[#FAA832] text-xl text-white font-bold rounded-2xl px-[4rem] py-[0.75rem]">Letsgooo</button>
                </div>
            </div>
        </div>
    </div>

    <div x-show="!login" class="bg-[#2C4156] grid grid-cols-2 h-full w-full">
        <!-- Left div -->
        <div class="grid h-full font-mono">
            <form action="login" class="place-items-center grid font-bold w-full px-[4rem]" method="POST">
                @csrf
                <h1 class="text-white font-bold text-4xl">MASUK</h1>
                <div class="w-[75%]">
                    <p class="text-white">Email</p>
                    <input type="text" value="{{ old('email') }}"name="email" id=""
                        class="p-2 border w-full rounded mb-5" placeholder="Username">
                    <p class="text-white">Kata Sandi</p>
                    <input type="password" name="password" id="" class="p-2 border w-full rounded mb-[2rem]"
                        placeholder="Password">

                    <input type="submit" value="MASUK"
                        class="p-2 font-bold w-full bg-[#FAA832] text-white rounded-lg cursor-pointer">
                </div>
            </form>

            @if ($errors->any())
                <div class="p-2 rounded mb-3">
                    <ul class="text-red-500">
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="h-full bg-[#2C4156]"></div>
        </div>

        <!-- Right div -->
        <div class="bg-[#F2F2F2] grid place-items-center h-full w-full">
            <img src="/img/LoginRight.svg" style="width: 400px; margin:2rem;" alt="">
        </div>
    </div>
</body>

</html>
