<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre el proyecto</h2>
<p><strong>Tema</strong></p>
<p>Se pretende investigar y conocer sobre cómo las imágenes construyen nuestros recuerdos a partir de la memoria individual. De esta forma se aborda la imágen fotográfica como punto de partida, dando cuenta de que ésta es en sí un objeto que re-presenta un momento que estuvo presente y que fué parte de la realidad pero que sin embargo constituye parte del pasado ,por ende, de un recuerdo o de algo que ya sucedió y que a partir de las imágenes intentamos volver a traer a la realidad, como si nos acercáramos a la dualidad de algo que está presente y a la vez ausente.</p>
<p><strong>Motivación</strong></p>
<p>Surge a raíz de una pérdida familiar muy importante que da paso a que surgan muchas interrogantes y dudas al respecto sobre las intenciones propias (y del ser humano) de volver a traer al presente algo que ya no está a través de imágenes, como por ejemplo, la imágen fotográfica que da cuenta de lo efímero que nos constituye.</p>


</section>
<?php include('pie.php');?>
