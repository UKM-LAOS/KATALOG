<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Informasi Kontak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <x-navigasi/>
</head>
<body class="bg-white flex items-center justify-center h-screen">

    <!-- Container -->
    <div class="relative bg-cyan-900 w-full max-w-4xl rounded-lg shadow-lg p-8"> 
        
        <!-- Contact Us -->
        <div class="absolute top-0 left-0 mt-4 ml-4 text-white text-lg font-semibold">
        Contact Us
        </div>

        <!-- Email -->
        <div class="absolute bottom-12 left-20 ml-7">
            <a href="mailto:someone@example.com" class="inline-block bg-white text-blue-500 font-semibold py-2.5 px-4 rounded-lg shadow-md">
            <i class="fas fa-envelope mr-2"></i> Email
            </a>
        </div>

        <!-- WhatsApp -->
        <div class="absolute bottom-12 right-20 mr-7">
            <a href="https://wa.me/1234567890" class="inline-block bg-white text-green-500 font-semibold py-2.5 px-4 rounded-lg shadow-md">
            <i class="fab fa-whatsapp mr-2"></i> WhatsApp
            </a>
        </div>

        <!-- Lingkarann -->
        <div class="absolute right-0 top-0 h-32 w-32 rounded-full bg-white opacity-50 mr-4 mt-4"></div>

        <!-- Footer -->
        <div class="absolute bottom-0 left-0 mb-4 ml-4 text-white text-sm">
            2024 UKM Linux and Open Source
        </div>
    </div>

</body>
</html>
