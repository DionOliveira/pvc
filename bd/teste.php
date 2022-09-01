<!doctype html>
    <html>
        <body>
        <?php
            abstract class Main{
                public $mysqli;
                public function __construct(){
                    $this->mysqli = new mysqli("localhost","root","","pvc");
                    if($this->mysqli -> connect_errno){
                        echo "Erro na conexão : ".$this->mysqli -> connect_errno."<br>". $this->mysqli -> connect_error;
                    }    
                }
            }
            class DadosOficina extends Main{
                public $codigo_ofi;
                public $nome_ofi;
                public $rua;
                public $numero;
                public $telefone;
                public $cidade;
                public $estado;
                
                public function getDadoOficina(){
                    $sql = "SELECT * FROM  `oficinas`;";
                    $resultado = mysqli_query($this->mysqli, $sql);
                    return $resultado;       
                }
            }
            $objOficina= new DadosOficina();
            $dadosOficina = $objOficina->getDadoOficina();
            ?>
            <table border="1">
            <tr>
            <th>Codigo Oficna</th>
            <th>Nome</th>
            <th>Rua</th>
            <th>Numero</th>
            <th>Telefone</th>
            <th>Cidade</th>
            <th>Estado</th>
            </tr>
            <?php 
            while($registro = mysqli_fetch_array($dadosOficina)){
                $codigo_ofi = $registro['codigo_ofi'];
                $nome_ofi = $registro['nome_ofi'];
                $rua = $registro['rua'];
                $numero = $registro['numero'];
                $telefone = $registro['telefone'];
                $cidade = $registro['cidade'];
                $estado = $registro['estado'];
                echo "<tr>";
                echo "<td>".$codigo_ofi."</td>";
                echo "<td>".$nome_ofi."</td>";
                echo "<td>".$rua."</td>";
                echo "<td>".$numero."</td>";
                echo "<td>".$telefone."</td>";
                echo "<td>".$cidade."</td>";
                echo "<td>".$estado."</td>";
                echo "<tr>";
            }
            ?>
            </table> 



        </body>
    </html> 