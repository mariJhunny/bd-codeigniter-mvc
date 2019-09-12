<h1>Bienvenido a VENDEDORES</h1>
El n&uacute;mero de registros son: 
<?php echo $nroreg;
echo "<hr>";
    echo "<table border=1>";
    echo "<tr><th>CARNET</th><th>NOMBRES</th><th>COD ZONAS</th></tr>";
 foreach($reporte as $reg):
    echo "<tr><td>";
    echo $reg->carnet;
    echo "</td><td>" . $reg->nombres;
    echo "</td><td>" . $reg->codzona;
    echo "</td></tr>";
 endforeach;

 echo "</table>";
?>