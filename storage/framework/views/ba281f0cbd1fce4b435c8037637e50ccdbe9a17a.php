<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <title>Document</title>
    <style>
        body {
            font-family: 'Raleway'
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
<?php /**PATH C:\Users\Jawana\Desktop\teethStudents\resources\views/students/layout.blade.php ENDPATH**/ ?>