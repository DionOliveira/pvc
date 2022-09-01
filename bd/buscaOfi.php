<!doctype html>
<html>
    <head>
         <title>Projedo DB em POO</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



         
         
         
         <?php include"php/cod.php"?>
    </head>
    <body>
        <h3>Cadastro</h3>
        <form method="POST">
        <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="Nome"></td>
        </tr>
        <tr>
            <td>Data de nascimento:</td>
            <td><input type="data" name="DataNascimento"></td>
        </tr>
        <tr>
            <td>CPF:</td>
            <td><input type="text" name="Cpf"></td>
        </tr>
        <tr>
            <td>RG:</td>
            <td><input type="text" name="RG"></td>
        </tr>
        </table>
        <input type="submit" value="Cadastrar"></td>
        </form>
        <?php
            $cidade = filter_input(INPUT_POST,"cidade");
            $estado = filter_input(INPUT_POST,"estado");


            $objOficina= new DadosOficina();
            $dadosOficina = $objOficina->getDadoOficina($cidade,$estado);
        ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"><center>Codigo Oficna</center></li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"><center>Nome</center></li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"><center>Rua</center></li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"><center>Numero</center></li>
                    </ul>
                </div>
                    <div class="col">
                <ul class="list-group">
                <li class="list-group-item active" aria-current="true"><center>Telefone</center></li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"><center>Cidade</center></li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"><center>Estado</center></li>   
                    </ul>
                </div>
            </div>
          

        
        <?php 
            $cidade = filter_input(INPUT_POST,"cidade");
            $estado = filter_input(INPUT_POST,"estado");
            $objOficina= new DadosOficina();
            $dadosOficina = $objOficina->getDadoOficina($cidade,$estado);
            while($registro = mysqli_fetch_array($dadosOficina)){
                $codigo_ofi = $registro['codigo_ofi'];
                $nome_ofi = $registro['nome_ofi'];
                $rua = $registro['rua'];
                $numero = $registro['numero'];
                $telefone = $registro['telefone'];
                $cidade = $registro['cidade'];
                $estado = $registro['estado'];

                echo '<div class="row">';
                    echo '<div class="col">';
                        echo '<ul class="list-group">';
                            echo '<li class="list-group-item"><center>'.$codigo_ofi.'</center></li>';
                        echo '</ul>';
                    echo '</div>';
                    echo '<div class="col">';
                        echo '<ul class="list-group">';
                            echo '<li class="list-group-item"><center>'.$nome_ofi.'</center></li>';
                        echo '</ul>';
                    echo '</div>';
                    echo '<div class="col">';
                        echo '<ul class="list-group">';
                            echo '<li class="list-group-item"><center>'.$rua.'</center></li>';
                        echo '</ul>';
                    echo '</div>';
                    echo '<div class="col">';
                        echo '<ul class="list-group">';
                            echo '<li class="list-group-item"><center>'.$numero.'</center></li>';
                        echo '</ul>';
                    echo '</div>';
                    echo '<div class="col">';
                        echo '<ul class="list-group">';
                            echo '<li class="list-group-item"><center>'.$telefone.'</center></li>';
                        echo '</ul>';
                    echo '</div>';
                    echo '<div class="col">';
                        echo '<ul class="list-group">';
                            echo '<li class="list-group-item"><center>'.$cidade.'</center></li>';
                        echo '</ul>';
                    echo '</div>';
                    echo '<div class="col">';
                        echo '<ul class="list-group">';
                            echo '<li class="list-group-item"><center>'.$estado.'</center></li>';   
                        echo '</ul>';
                    echo '</div>';
                echo '</div>';
                         
            }
        ?>
        </div>
    </body>
</html> 