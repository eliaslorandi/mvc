<?php $render('header'); ?>

<!--url base-->
<a href="<?= $base; ?> /novo"> Novo Usuário </a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario):?>
        <tr>
            <td><?=$usuario['id']?></td>
            <td><?=$usuario['nome']?></td>
            <td><?=$usuario['email']?></td>
            <td>
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
                    <img width="20" src="<?= $base; ?>/assets/images/edit_img.svg" />
                </a>
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Deseja excluir?')">
                <img width="20" src="<?= $base; ?>/assets/images/trash_img.svg" />
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>