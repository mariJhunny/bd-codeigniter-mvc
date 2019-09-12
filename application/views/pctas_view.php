<h1>Bienvenido a CUENTAS</h1>
El n&uacute;mero de registros son: 
<?php echo $nroreg;
echo "<hr>";
    echo "<table border=1>";
    echo "<tr><th>CUENTAS</th><th>DESCRIPCION</th><th>GRUPO</th><th>TIPO</th><th>CLASE</th></tr>";
 foreach($reporte as $reg):
    echo "<tr><td>";
    echo $reg->cuenta;
    echo "</td><td>" . $reg->des;
    echo "</td><td>" . $reg->grupo;
    echo "</td><td>" . $reg->tipo;
    echo "</td><td>" . $reg->clase;
    echo "</td></tr>";
 endforeach;

?>