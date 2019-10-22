<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require 'classes/Cliente.php';
            $cli = new Cliente();
            $clientes = $cli->listar();  
        ?>
        <a href='adicionar.php'>Novo Cliente</a>
        <table>
            <thead>
                <tr>
                    <td>Cód.</td>
                    <td>Nome</td>
                    <td>Endereço</td>
                    <td>Telefone</td>
                </tr> 
            </thead>
            <tbody>
                <?php foreach ($clientes as $c){ ?>
                <tr>
                    <td><?php echo $c ['codcli']; ?></td>
                    <td><?php echo $c ['nomcli']; ?></td>
                    <td><?php echo $c ['endcli']; ?></td>
                    <td><?php echo $c ['telcli']; ?></td>
                    <td>
                        <button onclick="<?php header('Location:editar.php');?>" type="button">Editar</button>
                    </td>
                </tr>  
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
