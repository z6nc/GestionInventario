window.onload = function () {
    let TextoRespuesta = document.getElementById('TextoRespuesta');
    const urlParams = new URLSearchParams(window.location.search);
    const exitoMenu = urlParams.get('success');
    const errorMenu = urlParams.get('error');
    let alerta = document.getElementById('alerta');
  
    switch (exitoMenu) {
      case 'MenuRegisteredSuccessfully':
        alerta.style.display = 'flex';
        alerta.classList.add('StyleSuceess');
        TextoRespuesta.innerText = 'Menu registrado Correctamente';
        break;
      case 'MenuDeletedSuccessfully':
        alerta.style.display = 'flex';
        alerta.classList.add('StyleSuceess');
        TextoRespuesta.innerText = 'Menu eliminado Correctamente';
        break;
      case 'MenuEdited':
        alerta.style.display = 'flex';
        alerta.classList.add('StyleSuceess');
        TextoRespuesta.innerText = 'Menu editado Correctamente';
        break;
      default:
        if (errorMenu === 'MenuNotRegisteredSuccessfull' || errorMenu === 'MenuNotDeletedSuccessfull' || errorMenu === 'MenuNotMenuEdited') {
          alerta.style.display = 'flex';
          alerta.classList.add('StyleError');
          TextoRespuesta.innerText = 'Menu no registrado Correctamente';
        } else {
          alerta.style.display = 'none';
        }
    }
  
    document.querySelector('#alerta span').addEventListener('click', () => {
      alerta.style.display = 'none';
    });
  };