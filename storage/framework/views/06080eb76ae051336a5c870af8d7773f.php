<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
<h1>Detalhes do Usuário</h1>

<p><strong>Nome:</strong> <?php echo e($user->name); ?></p>
<p><strong>Email:</strong> <?php echo e($user->email); ?></p>

<a href="<?php echo e(route('users.index')); ?>">Voltar</a>
</body>
</html><?php /**PATH C:\Users\Gilcelio\Laraval02\ExercicioPhp\resources\views/users/show.blade.php ENDPATH**/ ?>