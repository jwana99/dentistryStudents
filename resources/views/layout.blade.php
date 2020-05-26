<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,800i&display=swap" rel="stylesheet">
    <link id="icon" rel="icon" href="/icons/tooth (2).svg">
    <title>Toothie</title>
    <style>
        body {
            font-family: 'Raleway', sans-serif;
        }

        .custom-label input:checked + svg {
            display: block !important;
        }
    </style>
</head>
<body class="bg-gray-900 p-2">
<div class="flex justify-center">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@stack('script')
</body>
</html>
