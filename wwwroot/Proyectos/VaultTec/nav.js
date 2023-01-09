     ///De momento solo hay una funcion,pero la guardo en un documento
     //aparte para poder utilizarla y añadir otras funciones en futuros proyectos

     //Funcion para cerrar el anuncio, en este caso es nuestro aside
      //Cambia el atributo visibility de todo el aside a 'hidden', ocultar solo el img deja un recuadro en blanco
       //Al llamar a la funcion como parametro podemos introducir cualquier id, haciendo que esta funcion pueda ser utilizada en mas de una ocasion
      function hideAdd(id) {
          var add = document.getElementById(id);
          add.style.visibility = 'hidden';
         
          /*Lo utilizo para comprobar en consola que funciona correctamente, no es necesario*/
          console.log(add);
}

//Otra manera de ocultar es cambiando el atributo aria-hidden, hay que asegurarse que el elemento tiene colocado el atributo aria-hidden de lo contrario dara error


function toggleHidden(id) {
  var attr = document.getElementById(id).attributes;
  
  if (attr['aria-hidden'].value == "true") {
    document.getElementById(id).setAttribute("aria-hidden", "false");
  } else {
    document.getElementById(id).setAttribute("aria-hidden", "true");
  }
  
  console.log(attr)
}