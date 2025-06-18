<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";
require_once __DIR__ . "/../lib/php/devuelveErrorInterno.php";

try {

 $lista = [
  [
   "nombre" => "Esther",
   "chiste" => "¿Por qué el libro de matemáticas estaba triste? Porque tenía muchos problemas"
  ],
  [
   "nombre" => "Leonardo",
   "chiste" => "¿Qué le dice un semáforo a otro semáforo? No me mires, que me estoy cambiando"
  ],
  [
   "nombre" => "Sergio",
   "chiste" => "¿Por qué el computador fue al doctor? Tenía un virus"
  ],
  [
   "nombre" => "Raúl",
   "chiste" => "¿Qué hace una abeja en el gimnasio? ¡Zum-ba!"
  ],
  [
   "nombre" => "Antonio",
   "chiste" => "¿Por qué la computadora fue a terapia? Tenía muchos bugs"
  ],
  [
   "nombre" => "Karen",
   "chiste" => "¿Qué dice un pez en el espejo? ¡Hola, pescao!"
  ],
  [
   "nombre" => "Jessica",
   "chiste" => "¿Por qué el gato se sentó en la computadora? Para ver el mouse"
  ]
 ];

 // Genera el código HTML de la lista.
 $render = "";
 foreach ($lista as $modelo) {
  /* Codifica nombre y color para que cambie los caracteres
   * especiales y el texto no se pueda interpretar como HTML.
   * Esta técnica evita la inyección de código. */
  $nombre = htmlentities($modelo["nombre"]);
  $chiste = htmlentities($modelo["chiste"]);
  $render .=
   "<dt>{$nombre}</dt>
    <dd>{$chiste}</dd>";
 }

 devuelveJson(["lista" => ["innerHTML" => $render]]);
} catch (Throwable $error) {

 devuelveErrorInterno($error);
}
