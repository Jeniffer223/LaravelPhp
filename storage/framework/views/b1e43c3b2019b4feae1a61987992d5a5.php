<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
</head>
<body>

<form action="<?php echo e(route('users.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" required><br><br>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="password">Senha</label>
    <input type="password" name="password" id="password" required><br><br>

    <button type="submit">Criar</button>
</form><br>

<a href="<?php echo e(route('users.index')); ?>">Voltar</a>
</body>
</html><?php /**PATH C:\Users\Gilcelio\Laraval02\ExercicioPhp\resources\views/users/create.blade.php ENDPATH**/ ?>