<h1>Bienvenido a Zonas</h1>
El n&uacute;mero de registros son: 
<?php echo $nroreg;
echo "<hr>";
    echo "<table border=1>";
    echo "<tr><th>CODZONA</th><th>DESCRIPCION</th></tr>";
 foreach($reporte as $reg):
    echo "<tr><td>";
    echo $reg->codzona;
    echo "</td><td>" . $reg->descripcion;
    echo "</td></tr>";
 endforeach;
echo "</table>";
?>