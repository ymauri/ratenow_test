## Prueba de programación

El objetivo de la prueba es implementar un servicio web que muestre los resultados de una
llamada típica a nuestro sistema. Puedes montar el proyecto en local, usando por ejemplo
“XAMPP”, pero si dispones de un servidor propio puedes desarrollar contra él sin
problemas.
La prueba consta de 4 apartados simples, está descrita en la siguiente página y consta de 4
puntos. Lee los 4 puntos antes de empezar a codificar. En el último de los puntos se
define que debe verse en el la página web y ello afecta a cómo deberás montar los puntos
anteriores.

Evaluaremos la prueba con dos criterios, ejecución y código.
1. Para la ejecución procederemos bien instalando el proyecto que entregues contra
una instancia local de “XAMPP” o bien haciendo la llamada a la URL que nos
indiques.
2. Para la parte de código (la más importante) esperamos que nos envíes los fuentes
del proyecto. Lo que más valoramos la limpieza y la calidad del código. Es más
importante que sea fácilmente legible (y por lo tanto mantenible) que no que sea
especialmente óptimo.

La página que vas a crear va a atacar contra una máquina de test, con un usuario y clave
que solo servirán para esta ocasión y que se elimina cada pocos días.
La prueba no tiene un tiempo específico para ser realizada. Invierte el que necesites.
Para evitar que algún problema puntual te deje bloqueado en un punto hemos incluido un
anexo (anexo 2) con “soluciones”, es decir con los datos que obtendrías en cada punto si la
ejecución fuera correcta, con ello si un punto no te funciona debidamente podrás pasar al
siguiente para seguir con la prueba.

## Mi solución

Para la solución he utilizado Laravel y he intentado algo que permita facilitar las tareas de mantenimiento y actualización del framework así como la incorporación de nuevas interacciones con Endpoints a largo plazo.
De igual modo he intentado usar funciones nativas del lenguaje y no basar mi solución en las características de Laravel. 
Dentro de la estructura de Laravel8  (específicamente dentro de app) he creado los siguientes directorios: 


### Estructura de clases

*Business/Parser*

Se crea este directorio para incluir varios parsers de acuerdo con la fuente de datos seleccionada. En este caso solo tenemos Report593. Cada reporte tiene su propia clase de negocio que es la encargada de pedir los datos al servicio correspondiente y convertir la info del json en una estructura orientada a objetos.

*Business/Parser/Classes*

Contiene las clases que representa cada objeto del json y están organizadas así:

<p align="center"><img src="https://github.com/ymauri/ratenow_test/raw/main/public/img/diagram.jpg" width="150"></p>


Cada clase se inicializa con sus correspondientes atributos hasta haber parseado el json completamente. Por tanto a partir de un objeto de QuestionnaireClass puede accederse a la estructura completa de la data del endpoint.
he puesto los atributos como públicos por cuestión de tiempo y acceder a ellos desde la vista sin problema.

En la vista he aprovechado la estructura de clases para iterar sobre los objetos y sus relaciones y conformar el árbol del json. El css de la vista no lo he hecho yo. Lo he tomado de github para no liarme.

