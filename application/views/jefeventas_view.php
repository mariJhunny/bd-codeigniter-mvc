<h1>Bienvenido a JEFE VENTAS</h1>
El n&uacute;mero de registros son: 
<?php echo $nroreg;
echo "<hr>";
    echo "<table border=1>";
    echo "<tr><th>CARNET</th><th>NOMBRES</th><th>CODZONAS</th></tr>";
 foreach($reporte as $reg):
    echo "<tr><td>";
    echo $reg->carnet;
    echo "</td><td>" . $reg->nombres;
    echo "</td><td>" . $reg->codzona;
    echo "</td></tr>";
 endforeach;

?>