<!DOCTYPE html>
<html>
<head>
    <title>Contact Manager</title>
    <style>
        body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #f7f7f7;
   
    padding: 20px;
    border: solid black 5px;
    border-radius: 20px;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
    
}

h1, h2 {
    color: #2c3e50;
}

button, input[type="submit"] {
    background-color: black;
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
    maximum width: 300px;
}

a {
    color: #3490dc;
    text-decoration: none;
    font-weight: bold;
}
@media (min-width: 600px) {
    li {
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    input, button {
        max-width: 300px;
    }
}

@media (min-width: 900px) {
    body {
        max-width: 800px;
        margin: 0 auto;
    }
}



    </style>
</head>
<body>
    <h1>Contact Manager</h1>
    <?php if(session('success')): ?>
        <p style="color: green;"><?php echo e(session('success')); ?></p>
    <?php endif; ?>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\Users\user\contact-manager\resources\views/layout.blade.php ENDPATH**/ ?>