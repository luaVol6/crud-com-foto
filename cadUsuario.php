<?php 
    if(isset($_GET['metodo'])){
        $metodo = $_GET ['metodo'];
        $acao = 'recuperarUsuario';
        $id = $_GET['id'];
        require_once 'usuario.controller.php';
        foreach ($usuario as $index=>$usuario) {
            $id = $usuario->id;
            $nome = $usuario->nome;
            $email = $usuario->email;
            $senha = $usuario->senha;
            $foto = $usuario->foto;
            $_SESSION['foto']=$usuario->foto;
        }
    }
?>
<h1>Cadastro Usuário</h1>
<form name="form1" 
    action="index.php?link=4&acao=<?php if(!isset($metodo)){echo'inserir';}
    elseif($metodo == 'alterar'){echo 'alterar';}else{echo 'excluir';}?>" 
    method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php if(isset($nome)){echo $nome;}else{echo '';} ?>">
    </div>
    <div class="mb-3">
    <label>Email</label>
        <input type="email" name="email" class="form-control"value="<?php if(isset($email)){echo $email;}else{echo '';} ?>">
    </div>
    <div class="mb-3">
    <label>Senha</label>
        <input type="password" name="senha" class="form-control" value="<?php if(isset($senha)){echo $senha;}else{echo '';} ?>">
    </div>
    <div class="mb-3">
    <label>Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <?php 
    if(isset($usuario->foto)){
        echo '<img src="foto/'.$foto.'" style=" width=100; height=100;">';
    }
    ?>
   <input type="hidden" name="id" value="<?php if(isset($id)){echo $id;} else{echo '';}?>">
    <input type="submit" class="btn tbn-primary" value="<?php if(!isset($metodo)){echo 'inserir';}
    elseif($metodo == 'alterar'){echo 'alterar';}else{echo 'excluir';} ?>">
</form>