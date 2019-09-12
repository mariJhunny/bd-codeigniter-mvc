<h1>Bienvenido a Productos</h1>
El n&uacute;mero de registros son: 
<?php echo $nroreg;
echo "<hr>";
    echo "<table border=1>";
    echo "<tr><th>CODPROD</th><th>DESCRIPCION</th><th>UNIVEN</th><th>LINEA</th<th>TIPO</th><th>FECULTPRO</th><th>EXISTENCIA</th><th>PRECIO U</th><th>COSTO</th></tr>";
 foreach($reporte as $reg):
    echo "<tr><td>";
    echo $reg->codigo;
    echo "</td><td>" . $reg->descripcion;
    echo "</td><td>" . $reg->univen;
    echo "</td><td>" . $reg->linea;
    echo "</td><td>" . $reg->tipo;
    echo "</td><td>" . $reg->fecultpro;
    echo "</td><td>" . $reg->existencia;
    echo "</td><td>" . $reg->preciou;
    echo "</td><td>" . $reg->costo;
    echo "</td></tr>";
 endforeach;
 echo "</table>";
?>