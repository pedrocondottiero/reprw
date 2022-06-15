<?php 
    include ('conexao.php');

    $tipo = $_POST['tipo'];
    
    if($tipo == 'entrada') {
        $sql="select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        echo "TOTAL ENTRADAS: " . $row['valor'] ."<br>";
    } else if ($tipo == 'saida') {
        $sql="select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        echo "TOTAL SAIDAS: " . $row['valor']."<br>";
    } else if ($tipo == 'saldo') {
        $sql="select sum(case when tipo = 'entrada' then valor else 0 end) -
                        sum(case when tipo = 'saida' then valor else 0 end)
                        as valor from fluxo_caixa";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        echo "SALDO: " . $row['valor']."<br>";
    }

    

?>
<a href='consulta_fluxo_caixa.html'>Voltar</a>