<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<h1>Editar Produto: <?php echo e($id); ?></h1>
    <form action="<?php echo e(route('products.update', $id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="name">Nome do Produto</label>
        <input type="text" name="name" id="name" required><br>
        <label for="price">Preço:</label>
        <input type="number" name="price" id="price" required><br>
        <button type="submit">Atualizar Produto</button>
    </form>
    <a href="<?php echo e(route('products.index')); ?>">Voltar à lista de produtos</a>
</body>
</html><?php /**PATH C:\Users\Gilcelio\Laraval02\ExercicioPhp\resources\views/products/edit.blade.php ENDPATH**/ ?>