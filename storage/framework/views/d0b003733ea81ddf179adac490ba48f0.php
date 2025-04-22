<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
<h1>Lista de Produtos</h1>
    <a href="<?php echo e(route('products.create')); ?>">Adicionar Novo Produto</a>
    <ul>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($product->name); ?> - R$ <?php echo e(number_format($product->price, 2, ',', '.')); ?></li>
            <a href="<?php echo e(route('products.edit', $product->id)); ?>">Editar</a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit">Deletar</button>
    </form>


</body>
</html><?php /**PATH C:\Users\Gilcelio\Laraval02\ExercicioPhp\resources\views/products/index.blade.php ENDPATH**/ ?>