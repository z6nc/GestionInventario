window.onload = function () {
    let TextoRespuesta = document.getElementById('TextoRespuesta');
    const urlParams = new URLSearchParams(window.location.search);
    const exitoTransacciones = urlParams.get('success');
    const errorTransacciones = urlParams.get('error');
    let alerta = document.getElementById('alerta');
  
    switch (exitoTransacciones) {
      case 'TransaccionesRegisteredSuccessfully':
        alerta.style.display = 'flex';
        alerta.classList.add('StyleSuccess');
        TextoRespuesta.innerText = 'Compra registrada correctamente';
        break;
      case 'TransaccionesDeletedSuccessfully':
        alerta.style.display = 'flex';
        alerta.classList.add('StyleSuccess');
        TextoRespuesta.innerText = 'Compra eliminada correctamente';
        break;
      case 'TransaccionesEdited':
        alerta.style.display = 'flex';
        alerta.classList.add('StyleSuccess');
        TextoRespuesta.innerText = 'Compra editada correctamente';
        break;
      default:
        if (errorTransacciones === 'TransaccionesNotRegisteredSuccessfull') {
          alerta.style.display = 'flex';
          alerta.classList.add('StyleError');
          TextoRespuesta.innerText = 'Transacciones no se pudo editar';
        } else if (errorTransacciones === 'TransaccionesNotDeletedSuccessfull') {
          alerta.style.display = 'flex';
          alerta.classList.add('StyleError');
          TextoRespuesta.innerText = 'Transacciones no se pudo eliminar';
        } else if (errorTransacciones === 'TransaccionesNotTransaccionesEdited') {
          alerta.style.display = 'flex';
          alerta.classList.add('StyleError');
          TextoRespuesta.innerText = 'La Compra no se pudo editar';
        } else {
          alerta.style.display = 'none';
        }
    }
  
    document.querySelector('#alerta span').addEventListener('click', () => {
      alerta.style.display = 'none';
    });
  };
  