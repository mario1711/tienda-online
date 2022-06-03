    var descripcion = document.getElementById("descripcion");
    var precio = document.getElementById("precio");
    var cantidad = document.getElementById("cantidad");
    var imagen = document.getElementById("imagen");
    let re = /ab+c/;


function validar(){
    if(descripcion.value === null){
        alert("La descripcion esta vacia")
        descripcion = document.getElementById("descripcion").focus();
        return false
    } 
    
     else if(precio.value === null){
        alert("El precio no puede ser nulo")
        descripcion = document.getElementById("precio").focus();
        return false
    } 
    
    else if(cantidad.value === null){
        alert("No ha ingresado la cantidad")
        descripcion = document.getElementById("cantidad").focus();
        return false
    } 
    
    else    if(imagen.value === null){
        alert("La ruta de imagen no puede ser nula")
        descripcion = document.getElementById("imagen").focus();
        return false
    } 
}