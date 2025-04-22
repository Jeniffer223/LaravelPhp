<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Marca</title>
</head>
<body>
<h1>Adicionar Nova Marca</h1>

<form action="<?php echo e(route('brands.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div>
        <label for="name">Nome da Marca:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <button type="submit">Salvar</button>
    <a href="<?php echo e(route('brands.index')); ?>" class="ml-2 text-gray-500">Voltar</a>
</form>
</body>
</html><?php /**PATH C:\Users\Gilcelio\Laraval02\ExercicioPhp\resources\views/brands/create.blade.php ENDPATH**/ ?>