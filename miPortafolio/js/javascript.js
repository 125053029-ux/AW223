const bienvenida=document.getElementById("bienvenida");
const botonTexto=document.getElementById("cambiarTexto");

botonTexto.onclick=function(){
    bienvenida.textContent="Bienvenido a mi portafolio";
};
const botonColor=document.getElementById("cambiarColor");
const botonLetra=document.getElementById("cambiarLetra");
const habilidades=document.querySelectorAll(".lista-habilidades li");

botonColor.onclick=function(){
    for(let i=0;i<habilidades.length;i++){
        habilidades[i].style.backgroundColor="lightblue";
    }
};
botonLetra.onclick=function(){
    for(let i=0;i<habilidades.length;i++){
        habilidades[i].style.fontFamily="Georgia";
    }
};
const formulario=document.getElementById("formulario");
const nombre=document.getElementById("nombre");
const email=document.getElementById("email");
const mensajeFormulario=document.getElementById("mensajeFormulario");

formulario.onsubmit=function(event){
    event.preventDefault();
    if(nombre.value==""){
        mensajeFormulario.textContent="Escribe un nombre";
        return;
    }
    if(email.value==""){
        mensajeFormulario.textContent="Escribe un correo electronico";
        return;
    }
    mensajeFormulario.textContent="Los datos fueron enviados correctamente";
};