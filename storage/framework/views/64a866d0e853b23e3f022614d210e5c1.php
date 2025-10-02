<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProdukApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('products.index')); ?>">ProdukApp</a>
        </div>
    </nav>

    
    <main class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    
    <footer class="text-center mt-4 mb-4 text-muted">
        &copy; <?php echo e(date('Y')); ?> ProdukApp - Laravel
    </footer>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel-12\resources\views/layouts/app.blade.php ENDPATH**/ ?>