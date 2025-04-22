<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar produtos</title>
</head>
<body>
<h1>Produto: <?php echo e($id); ?></h1>
    <a href="<?php echo e(route('products.edit', $id)); ?>">Editar Produto</a>
    <form action="<?php echo e(route('products.destroy', $id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit">Deletar Produto</button>
    </form>
    <a href="<?php echo e(route('products.index')); ?>">Voltar à lista de produtos</a>
</body>
</html><?php /**PATH C:\Users\Gilcelio\Laraval02\ExercicioPhp\resources\views/products/show.blade.php ENDPATH**/ ?>