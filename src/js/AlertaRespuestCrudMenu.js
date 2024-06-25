window.onload = function () {
  let TextoRespuesta = document.getElementById('TextoRespuesta');
  const urlParams = new URLSearchParams(window.location.search);
  const exitoMenu = urlParams.get('success');
  const errorMenu = urlParams.get('error');
  let alerta = document.getElementById('alerta');

  switch (exitoMenu) {
    case 'MenuRegisteredSuccessfully':
      alerta.style.display = 'flex';
      alerta.classList.add('StyleSuccess');
      TextoRespuesta.innerText = 'Menu registrado correctamente';
      break;
    case 'MenuDeletedSuccessfully':
      alerta.style.display = 'flex';
      alerta.classList.add('StyleSuccess');
      TextoRespuesta.innerText = 'Menu eliminado correctamente';
      break;
    case 'MenuEdited':
      alerta.style.display = 'flex';
      alerta.classList.add('StyleSuccess');
      TextoRespuesta.innerText = 'Menu editado correctamente';
      break;
    case 'Menuexist':
      alerta.style.display = 'flex';
      alerta.classList.add('StyleError');
      TextoRespuesta.innerText = 'El nombre del menu ya existe';
      break;
    default:
      if (errorMenu === 'MenuNotRegisteredSuccessfull') {
        alerta.style.display = 'flex';
        alerta.classList.add('StyleError');
        TextoRespuesta.innerText = 'Menu no se pudo editar';
      } else if (errorMenu === 'MenuNotDeletedSuccessfull') {
        alerta.style.display = 'flex';
        alerta.classList.add('StyleError');
        TextoRespuesta.innerText = 'Menu no se pudo eliminar';
      } else if (errorMenu === 'MenuNotMenuEdited') {
        alerta.style.display = 'flex';
        alerta.classList.add('StyleError');
        TextoRespuesta.innerText = 'Menu no se pudo editar';
      } else {
        alerta.style.display = 'none';
      }
  }

  document.querySelector('#alerta span').addEventListener('click', () => {
    alerta.style.display = 'none';
  });
};
