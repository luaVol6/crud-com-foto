<?php
    $acao = 'recuperar';
    require_once 'usuario.controller.php';
?>
    <h1>Área Restrita</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Foto</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <?php  foreach($usuario as $indice =>$usuario) { ?>
    <tbody>
        <tr>
            <td><?php $usuario->nome; ?></td>
            <td><img src="foto/<?=$usuario->foto;?>" width="40" height="40"></td>
            <td> <a href="index.php?link=2&metodo=alterar&id" <?=$usuario->id; ?>>Alterar </td>
            <td><a href="index.php?link=2&metodo=excluir&id" <?=$usuario->id; ?>>Excluir</td>
        </tr>
    </tbody>
    <?php }?>
</table>