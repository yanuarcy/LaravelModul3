<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <div class="container m-5">
        <h1>hello i'm Rocket</h1>
        
        <img class="img-thumbnail" src="<?php echo e(Vite::asset('resources/images/Rocket.jpg')); ?>" alt="image">
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>

<?php /**PATH C:\Users\Lenovo\Documents\Semester 4\Yanuar\resources\views/Rocket.blade.php ENDPATH**/ ?>