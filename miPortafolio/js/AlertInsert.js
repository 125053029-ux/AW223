alert("JavaScript funciona");
const parametros = new URLSearchParams(window.location.search);
const estado = parametros.get("estadophp");
const error = parametros.get("error");

if (estado === "exito") {
    alert("Exito, tu mensaje fue guardado");
}

if (estado === "error") {
    alert("Algo fallo, intentalo nuevamente");
}

if (estado === "actualizado") {
    alert("Mensaje actualizado correctamente");
}

if (estado === "borrado") {
    alert("Mensaje borrado correctamente");
}

if (error === "1") {
    alert("Revisa que todos los campos esten completos y sean correctos");
}

if (estado !== null || error !== null) {
    window.history.replaceState({}, document.title, window.location.pathname);
}