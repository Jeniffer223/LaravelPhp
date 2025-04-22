<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<h1>Editar Usuário</h1>

<form action="<?php echo e(route('users.update', $user->name)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="<?php echo e($user->name); ?>" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?php echo e($user->email); ?>" required>

    <label for="password">Senha </label>
    <input type="password" name="password" id="password">


    <button type="submit">Atualizar Usuário</button>
</form>

<a href="<?php echo e(route('users.index')); ?>">Voltar</a>
</body>
</html><?php /**PATH C:\Users\Gilcelio\Laraval02\ExercicioPhp\resources\views/users/edit.blade.php ENDPATH**/ ?>