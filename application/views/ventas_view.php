<h1>Bienvenido a VENTAS</h1>
El n&uacute;mero de registros son: 
<?php echo $nroreg;
echo "<hr>";
    echo "<table border=1>";
    echo "<tr><th>REGISTRO</th><th>CODPRO</th><th>FECHA</th><th>CANTIDAD</th><th>TOTAL</th><th>CODVEN</th><th>CODCLI</th></tr>";
 foreach($reporte as $reg):
    echo "<tr><td>";
    echo $reg->registro;
    echo "</td><td>" . $reg->codpro;
    echo "</td><td>" . $reg->fecha;
    echo "</td><td>" . $reg->cantidad;
    echo "</td><td>" . $reg->total;
    echo "</td><td>" . $reg->codven;
    echo "</td><td>" . $reg->codcli;
    echo "</td></tr>";
 endforeach;

?>