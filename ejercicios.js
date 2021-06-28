// funcion contar caracteres
 function contarCaracteres (e) {
    console.log(e.length);     
  }
  
  contarCaracteres("Hola Mundo");

//////////////////////

// funcion contar caracteres seleccionados

 function caracteresSeleccionados (a, b) {
     console.log(a.slice(0, b))  
  }
  
  caracteresSeleccionados("Hola Mundo", 4);

  // Funcion Separar palabras 

  function separarPalabras (e) {
  console.log(e.split(' '));  
  }

 separarPalabras('hola que tal');

  // Funcion repetir palabras

  function repetirPalabras (e, b) {
      console.log(e.repeat(b));
  }

  repetirPalabras("Hola", 3);


  5) Programa una función que invierta las palabras de una cadena de texto, pe. miFuncion("Hola Mundo") devolverá "odnuM aloH".
6) Programa una función para contar el número de veces que se repite una palabra en un texto largo, pe. miFuncion("hola mundo adios mundo", "mundo") devolverá 2.
7) Programa una función que valide si una palabra o frase dada, es un palíndromo (que se lee igual en un sentido que en otro), pe. mifuncion("Salas") devolverá true.
8) Programa una función que elimine cierto patrón de caracteres de un texto dado, pe. miFuncion("xyz1, xyz2, xyz3, xyz4 y xyz5", "xyz") devolverá  "1, 2, 3, 4 y 5.


