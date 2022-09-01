<?php
    abstract class Main
    {
        public $mysqli;
        public function __construct()
        {
            $this->mysqli = new mysqli("localhost", "root", "", "pvc");
            if ($this->mysqli->connect_errno) {
                echo "Erro na conexão : " . $this->mysqli->connect_errno . "<br>" . $this->mysqli->connect_error;
            }
        }
    }
    class Agendamento extends Main
    {
        public function getHorarios($data, $cod_ofi)
        {
            $sql = "SELECT `horario` FROM `dados` WHERE `data` = '$data' and `cod_ofi` = '$cod_ofi';";
            $resultado = mysqli_query($this->mysqli, $sql);
            return $resultado;
        }
        public function agendar($cpf, $nome, $data, $placa, $horario, $cod_ofi)
        {
            $sql_insert = "INSERT INTO `dados`(`cpf`, `nome`, `data`, `placa`, `horario`,`cod_ofi`)
         VALUES ('$cpf','$nome','$data','$placa','$horario','$cod_ofi')";
            $res = mysqli_query($this->mysqli, $sql_insert);
            if ($res) {
                echo "<h2>Agendamento realizdo</h2>";
            } else {
                echo "<h2>Agendamento nao realizdo</h2>";
            }
        }

        public function getDadoA($cpf)
        {
            $sql = "SELECT `dados`.`nome`,`dados`.`placa`,`dados`.`data`,`dados`.`horario`,
            `oficinas`.`nome_ofi`,`oficinas`.`rua`,`oficinas`.`numero`,`oficinas`.`telefone` 
            FROM `dados` inner join `oficinas` on `dados`.`cod_ofi` = `oficinas`.`codigo_ofi` 
            WHERE `cpf` = '$cpf';";
            $resultado = mysqli_query($this->mysqli, $sql);
            return $resultado;
        }
    }
    class Oficina extends Main
    {
        public function getDadoOficina($cidade, $estado)
        {
            $sql = "SELECT * FROM `oficinas` WHERE `cidade` = '$cidade' and
             `estado` = '$estado';";
            $resultado = mysqli_query($this->mysqli, $sql);
            return $resultado;
        }
    }
?>