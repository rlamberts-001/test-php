# Test de Conocimientos Generales para Desarrollador Fullstack Junior 
Roilber Lambert Sánchez


## Sección 1: Symfony

1. **Pregunta de Configuración:**
- Describe los pasos básicos para levantar un proyecto en Symfony.

Para levantar un proyecto web en Symfony se deben seguir los siguientes pasos:
- Crear un proyecto empleando el Composer
   
   composer create-project symfony/skeleton:"7.1.*" test-junior
   
   donde **test-junior** es el nombre de la aplicación y se creará un directorio con el mismo nombre, por tanto este nombre debe cumplir con los requerimientos de nombres de directorios. 
   Durante este roceso también se descargarán algunas dependencias y se crearán algunos directorios para el funcionamiento básico de la aplicación.
   
- Pocisionarse dentro del directorio del proyecto:
   cd test-junior
- Agregar dependencia a WebApp
   composer require webapp

- Iniciar el servidor, ya sea mediante un servidor nginx o apache, o mediante el servidor web local que provee Symfony:
   symfony server:start
   
- Navegar a http://localhost:8000/ donde debe mostrase una página de bienvenida.



   
2. **Pregunta de Código:**
- Crea un controlador en Symfony que maneje una ruta /hello/{name} y devuelva un saludo personalizado. Además, si el nombre no se proporciona, debe devolver un saludo predeterminado "Hello World". (opcional) Implementa también una prueba unitaria para verificar que la ruta devuelve el saludo correcto.

3. **Pregunta Teórica:**
- Explica la arquitectura de Symfony y cómo se organiza un proyecto típico en términos de carpetas y archivos.

Symfony emplea la arquitectura MVC lo que le permite escribir un código reutilizable, escalable y eficiente. 
De acuerdo a la bibliografía: 
   
    El modelo representa los datos y la lógica de negocios de la aplicación.
    La vista es la capa encargada de presentar la información al usuario final.
    El controlador es el intermediario entre el modelo y la vista, recibe las peticiones de los usuarios y decide qué hacer con ellas.

Los controladores se organizan dentro de la carpeta ./src/Controller, empleando nombres con nomenclatura CamelCase.

Las vistas se almacenan en ./templates organizadas en directorios con la nomenclatura ./[sub_dir/]{template_name}.html.twig . Ej.: ./hello/index.html.twig

El modelo de datos inicia con la definición de las entidades almacenadas dentro de la carpeta ./src/Entity y puede emplear repositorios para ayudar a la lectura y persistencia de los datos, l os que se ubican dentro de la carpeta ./src/Repository



4. **Pregunta de Código:**
- Escribe un servicio en Symfony que se inyecta en un controlador y realiza una operación matemática básica (por ejemplo, sumar dos números). ¿Qué configuraciones son necesarias para poder usarlo? (opcional) Implementa también una prueba unitaria para verificar el correcto funcionamiento del servicio.

/suma/{valor1}/{valor2}

En caso de no pasar los argumentos se muestra un mensaje de error

5. **Pregunta de Código:**
- Muestra cómo crear un formulario en Symfony para una entidad User con campos username y email.

Para el caso en que ya esté creada la entidad User:
Desde la línea de comandos y ubicado en el directorio de la aplicación, ejecutar el comando:

    php bin/console make:form

	Aquí tenemos que completar el nombre de la clase para el formulario y el nombre de la entidad a emplear, en este caso 'User'
	
     The name of the form class (e.g. OrangeChefType):
     > User
     The name of Entity or fully qualified model class name that the new form will be bound to (empty for none):
     > User
 
 Luego de esto se crea el archivo ./src/Form/UserType.php
 El formulario se puede rellenar desde el controlador y mostrado en la vista con la función 'form()'
 

6. **Pregunta Teórica:**
- Explica el concepto de Dependency Injection (DI) en Symfony y cómo se configura.






7. **Pregunta de Código:**
- Escribe una consulta Doctrine en Symfony para obtener todos los registros de una entidad Product donde el precio sea mayor a 100.




8. **Pregunta Teórica:**
- ¿Qué es el Event Dispatcher en Symfony y para qué se utiliza?

9. **Pregunta de Código:**
- Crea un validador personalizado en Symfony para asegurar que el campo email de una entidad User no pertenece a un dominio específico (por ejemplo, "example.com"). Muestra cómo configurar este validador y cómo sería utilizado en la entidad User.

10. **Pregunta de Código:**
- Implementa un Event Subscriber en Symfony que escuche el evento kernel.request y registre en un archivo de log cada visita a cualquier página de la aplicación. Asegúrate de configurar el servicio correctamente para que el suscriptor se registre con el evento.


## Sección 2: JavaScript

1. **Pregunta Teórica:**
- Explica la diferencia entre var, let y const en JavaScript.

2. **Pregunta de Código:**
- Escribe una función en JavaScript que invierta una cadena de texto.

 El código se encuentra en la vista ./jscript/index.php.twig
 Se muestra al cargar la ruta /javascript en la sección Invertir  cadena.
 
 La función se activa en el evento 'onkeyup' del input.
 

3. **Pregunta Teórica:**
- ¿Qué es el Event Loop en JavaScript y cómo funciona?
  El Event Loop es una  especie de "sistema de vigilancia" que se mantiene al tanto de la tareas y eventos, tanto del sistema como de las acciones del usuario.
  Cada nueva función o evento es agregado a una cola de ejecución de la que son eliminados una vez procesadas.
  
  
4. **Pregunta de Código:**
- Escribe un script en JavaScript que filtre los números pares de un array de números y los muestre en la consola.

    El código se encuentra en la vista ./jscript/index.php.twig
    Se muestra al cargar la ruta /javascript
	
	Se debe acceder desde la consola del navegador y ejecutar la función 'filtra_pares(array)'
	
	
5. **Pregunta Teórica:**
- ¿Qué es el DOM y cómo se manipula usando JavaScript?

  El DOM es el Modelo de Objetos del Documento que permite leer y manipular la estructura y estilo del documento.
  Su manipulación se realiza accediendo al objeto 'document' el cual contiene un conjunto de funciones que permien manipular uno o varios objetos a la vez empleando el ID de cada objeto o sus propiedades.
  
  

6. **Pregunta de Código:**
- Escribe un código en JavaScript que añada un event listener a un botón con el id #myButton para mostrar una alerta con el mensaje "Hello World" al hacer clic.

    El código se encuentra en la vista ./jscript/index.php.twig
    Se muestra al cargar la ruta /javascript en la sección Mostrar Mensaje
	

7. **Pregunta Teórica:**
- Explica qué es una Promesa en JavaScript y proporciona un ejemplo básico.


Una promesa es un objeto que representa la eventual finalización (o fallo) de una operación asíncrona y devuelve un valor. Esta puede estar en uno de tres estados: pendiente, cumplida o rechazada.
Ejemplo tomado de la red:

	function fetchData() {
	  return new Promise(function(resolve, reject) {
		setTimeout(function() {
		  resolve('Datos obtenidos correctamente');
		  
		}, 3000);
	  });
	}

	fetchData()
	  .then(function(data) {
		console.log(data); //Esto se muestra en caso de datos correctos
	  })
	  .catch(function(error) {
		console.log(error); //Esto se muestra en caso de Error
	  });
  

  
8. **Pregunta de Código:**
- Escribe una función en JavaScript que haga una petición AJAX (usando fetch) para obtener datos de una API y los muestre en un elemento con el id #result.

    El código se encuentra en la vista ./jscript/index.php.twig
    Se muestra al cargar la ruta /javascript en la sección Petición Ajax
	

9. **Pregunta Teórica:**
- ¿Cuál es la diferencia entre null, undefined y NaN en JavaScript?

Undefined: Valor sin definir, ya sea una variable o una propiedad de un objeto
Null     : Valor que se ha indicado explícitamente que es nulo.
NaN      : Valor devuelto en operaciones matemáticas donde no es posible convertir un valor numérico.

 

10. **Pregunta de Código:**
- Implementa una función en JavaScript que use localStorage para guardar una clave-valor y luego recuperarla.


## Sección 3: Git

1. **Pregunta Teórica:**
- ¿Qué es Git y para qué se utiliza en el desarrollo de software?
Git es un sistema de control de versiones. Permite a varios desarrolladores trabajar en un mismo proyecto y luego mezclar los cambios de una forma segura y eficiente. También permite mantener copias seguras de nuestro código y llevar un control de los cambios que vamos realizando.


2. **Pregunta de Comandos:**
- ¿Cuál es el comando para clonar un repositorio de Git?

Para clonar un repositorio o realizar una copia local se utiliza el comando: git clone <url-https>


3. **Pregunta Teórica:**
- Explica qué es un "branch" (rama) en Git y para qué se utiliza.
Un Branch o Rama es una versión del proyecto, inicialmente tenemos una rama principal 'master'que se usará para el despliegue a producción, y que podemos replicarla para mantener una copia limpia de nuestro código.



4. **Pregunta de Comandos:**
- Proporciona los comandos necesarios para crear una nueva rama llamada feature-xyz, cambiar a esa rama, y luego fusionarla con la rama main.

El comando git branch ＜new-branch＞ permite crear una rama nueva rama. Una vez creada, puedes usar git checkout new_branch para cambiar a la rama creada

5. **Pregunta Teórica:**
- ¿Qué es un "merge conflict" y cómo se resuelve?

El merge conflict aparece cuando varios desarrolladores trabajan sobre el mismo fichero en ramas diferentes y se trata de hacer una mezcla. Se resuelve de manera manual o empleando software que ayuden un poco en la decisión (Tortoise Git)

6. **Pregunta de Comandos:**
- ¿Cuál es el comando para visualizar el estado actual del repositorio en Git?

git status

Muestra los archivos modificados y sin confirmar o los que no se les ha dado seguimiento.


7. **Pregunta Teórica:**
- Explica la diferencia entre git pull y git fetch.

8. **Pregunta de Comandos:**
- ¿Cuál es el comando para revertir el último commit en Git?

git revert

Se emplea para deshacer cambios efectuados en un repositorio


9. **Pregunta Teórica:**
- ¿Qué es un "remote repository" y cómo se configura en Git?

10. **Pregunta de Comandos:**
- Proporciona los comandos para añadir todos los cambios en los archivos al staging area y luego realizar un commit con el mensaje "Initial commit".


## Sección 4: MySQL

1. **Pregunta de Código:**
- Escribe una consulta SQL para crear una base de datos llamada company y una tabla llamada employees con las siguientes columnas: id (INT, auto-increment, primary key), name (VARCHAR(100)), position (VARCHAR(50)), salary (DECIMAL(10, 2)), y hire_date (DATE).


CREATE DATABASE company;

USE company;

CREATE TABLE `employee` (
  `id` INTEGER(0) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) DEFAULT '',
  `position` VARCHAR(50) DEFAULT '',
  `salary` DECIMAL(10,2) DEFAULT ,
  `hire_date` DATE DEFAULT '',
  PRIMARY KEY (`id`)
)



2. **Pregunta Teórica:**
- Explica la diferencia entre una clave primaria (Primary Key) y una clave foránea (Foreign Key) en MySQL. ¿Cuándo y por qué se utilizan?

Una clave primaria identifica las filas de una tabla, es un valor o grupo de valores únicos para cada fila. Debe crearse siempre para facilitar la búsqueda de elementos dentr de la tabla.
Una clave foránea es un valor que relaciona la fila con un elemento de otra tabla (foránea). Se utiliza cuando ambas tablas guardan relación. Ej.: Usuarios -> Roles

3. **Pregunta de Código:**
- Escribe una consulta SQL para insertar tres registros en la tabla employees creada en la pregunta 2.

INSERT INTO employees (name, position, salary, hire_date) VALUES 
('Juan', 'Manager', 100.00, '2024-01-01'),
('Jose', 'Developer', 100.00, '2024-01-01'),
('Julian', 'Developer', 100.00, '2024-01-01');


4. **Pregunta de Código:**
- Muestra cómo actualizar el salario de un empleado específico en la tabla employees. Por ejemplo, actualiza el salario del empleado con id = 1 a 60000.00.

UPDATE employees SET (salary = 60000.00) WHERE id = 1;

5. **Pregunta de Código:**
- Escribe una consulta SQL para seleccionar todos los empleados cuyo salario sea mayor a 50000.00 y ordenarlos por el campo hire_date en orden descendente.

SELECT * FROM employees WHERE salary > 50000.00 ORDER BY hire_date DESC;


6. **Pregunta Teórica:**
- ¿Qué es una transacción en MySQL y cómo se utiliza? Proporciona un ejemplo de uso.



7. **Pregunta de Código:**
- Crea una vista en MySQL llamada high_earning_employees que seleccione todas las columnas de los empleados cuyo salario sea mayor a 70000.00.


---


## Instrucciones para el Candidato:

- Responde cada pregunta de manera clara y concisa.
- Para las preguntas de código, asegúrate de que el código sea funcional, esté bien comentado y siga las buenas prácticas, patrones de diseño y PSR-12 de PHP.
- Estructura tu respuesta como si se tratara de un proyecto real.
- Crea un repositorio en GitHub con visibilidad pública y sube todas tus respuestas al repositorio.
- Incluye un archivo README.md en el repositorio que explique cómo ejecutar el proyecto y cualquier otra información relevante.
- Puedes utilizar cualquier recurso en línea para ayudarte a responder las preguntas, pero las respuestas deben ser comprensibles y reflejar tu propio conocimiento y habilidades.
- Envía el enlace al repositorio de GitHub antes de la fecha límite especificada.

¡Buena suerte!
