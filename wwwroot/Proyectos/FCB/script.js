//Para no crear modales de cada una de las imagenes, esta funcion cambia 
//el src de la imagen del modal al dar click
function changeImg(id) {
    var old=document.getElementById(id).src; 
    document.getElementById('oop').src=old;
    /*Lo utilizo para comprobar en consola que funciona correctamente, no es necesario*/
    console.log(old);
}
