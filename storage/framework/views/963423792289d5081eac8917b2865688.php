<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editar Marca</h1>
        <form action="<?php echo e(route('brands.update', $brand->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div>
        <label>Nome da Marca:</label>
        <input type="text" name="name" required>
        </div>
    <button type="submit">Atualizar</button>
    <a href="<?php echo e(route('brands.index')); ?>">Cancelar</a>
</form>
</body>
</html><?php /**PATH C:\Users\Gilcelio\Laraval02\ExercicioPhp\resources\views/brands/edit.blade.php ENDPATH**/ ?>