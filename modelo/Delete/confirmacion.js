function confirmacion (e) {
    if (confirm("¿Esta seguro de eliminar este registro?")) {
        return true;
    }else{
        e.preventDefault();
    }
}
let linkdelete  = document.querySelectorAll(".table__eliminar");

for (var i = 0; i < linkdelete.length; i++){
    linkdelete[i].addEventListener('click',confirmacion);
}