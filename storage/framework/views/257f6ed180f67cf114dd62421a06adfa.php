<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Marcas</title>
</head>
<body>
    <h1>Lista de Marcas</h1>
    
    <a href="<?php echo e(route('brands.create')); ?>">Adicionar Nova Marca</a><br><br>
    
        <tbody>
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($brand->id); ?></td>
                <td><?php echo e($brand->name); ?></td><br>
                <td><br>
                    <a href="<?php echo e(route('brands.edit', $brand->id)); ?>">Editar</a><br>
                    <form action="<?php echo e(route('brands.destroy', $brand->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir esta marca?');">Excluir</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
</body>
</html>
<?php /**PATH C:\Users\Gilcelio\Laraval02\ExercicioPhp\resources\views/brands/index.blade.php ENDPATH**/ ?>