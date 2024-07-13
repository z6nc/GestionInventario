window.onload = function () {
    const urlParams = new URLSearchParams(window.location.search);
    const exitoEstado = urlParams.get('success');
    const errorEstado = urlParams.get('error');
    let alerta = document.getElementById('alerta');
    let TextoRespuesta = document.getElementById('TextoRespuesta');
    if (exitoEstado) {
        alerta.style.display = 'flex';
        alerta.classList.add('StyleSuccess');
        TextoRespuesta.innerText = 'Producto Revisado y eliminado con exito';
    } else if (errorEstado) {
        alerta.style.display = 'flex';
        alerta.classList.add('StyleError');
        TextoRespuesta.innerText = 'No se pudo eliminar el producto, intente nuevamente';
    } else {
        alerta.style.display = 'none';
    }
}
