<?php
        require_once('banco.php');
        $username = "root";
        $sql = "SELECT * FROM `cadencia` WHERE `codigo` = '$codigo'"; #sua query sql, um exemplo o SELECT *
        $query_exec = $mysqli->query($sql); #Executa o comando select.
        $row = $query_exec->num_rows; #Número de resultados encontrados.
        $get = $query_exec->fetch_array(); #Cria um vetor associativo com os dados.
        if($row > 0) {
            #encontrou resultados.
            $usuario = $get['username']; 
            $perfil = $get['profile'];
            echo "{$usuario} {$perfil}"; #Pode fazer um echo de um html, ex: echo '<div id="profile">'.$perfil.'</div>';
            #O resultado do echo seria: Foo é um cara legal.
    
        } else {
            #não encontrou nada.    
        }
    
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <!--Colocando as tags PHP para exibir o echo no HTML-->
    <div id="username"> <?php echo $usuario; ?> </div>
    </body>
</html>