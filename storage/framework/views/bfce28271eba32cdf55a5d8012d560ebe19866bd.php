<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">
    <link id="icon" rel="icon" href="/icons/tooth (2).svg">
    <title>Toothie</title>
    <style>
        body {
            font-family: 'Comfortaa', cursive;
        }

        /*body::-webkit-scrollbar {*/
        /*    width: 12px; !* width of the entire scrollbar *!*/
        /*}*/

        /*body::-webkit-scrollbar-track {*/
        /*    background: orange; !* color of the tracking area *!*/
        /*}*/

        /*body::-webkit-scrollbar-thumb {*/
        /*    background-color: blue; !* color of the scroll thumb *!*/
        /*    border-radius: 20px; !* roundness of the scroll thumb *!*/
        /*    border: 3px solid orange; !* creates padding around scroll thumb *!*/
        /*}*/

        .gradient {
            background: transparent; /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, transparent, #F4F5F7); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, transparent, #F4F5F7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .custom-label input:checked + svg {
            display: block !important;
        }
    </style>
</head>
<body class="bg-gray-900 p-2">
<div class="flex justify-center">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<?php echo $__env->yieldPushContent('script'); ?>
</body>
</html>
<?php /**PATH C:\Users\Jawana\Desktop\teethStudents\resources\views/layout.blade.php ENDPATH**/ ?>