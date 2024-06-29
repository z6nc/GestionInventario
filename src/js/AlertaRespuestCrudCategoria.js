window.onload = function () {
  let TextoRespuesta = document.getElementById('TextoRespuesta');
  const urlParams = new URLSearchParams(window.location.search);
  const exitoCategoria = urlParams.get('success');
  const errorCategoria = urlParams.get('error');
  let alerta = document.getElementById('alerta');

  switch (exitoCategoria) {
    case 'CategoriaRegisteredSuccessfully':
      alerta.style.display = 'flex';
      alerta.classList.add('StyleSuccess');
      TextoRespuesta.innerText = 'Categoria registrada correctamente';
      break;
    case 'CategoriaDeletedSuccessfully':
      alerta.style.display = 'flex';
      alerta.classList.add('StyleSuccess');
      TextoRespuesta.innerText = 'Categoria eliminada correctamente';
      break;
    case 'CategoriaEdited':
      alerta.style.display = 'flex';
      alerta.classList.add('StyleSuccess');
      TextoRespuesta.innerText = 'Categoria editada correctamente';
      break;
    case 'Categoriaexist':
      alerta.style.display = 'flex';
      alerta.classList.add('StyleError');
      TextoRespuesta.innerText = 'El nombre de la Categoria ya existe';
      break;
    default:
      if (errorCategoria === 'CategoriaNotRegisteredSuccessfull') {
        alerta.style.display = 'flex';
        alerta.classList.add('StyleError');
        TextoRespuesta.innerText = 'Categoria no se pudo editar';
      } else if (errorCategoria === 'CategoriaNotDeletedSuccessfull') {
        alerta.style.display = 'flex';
        alerta.classList.add('StyleError');
        TextoRespuesta.innerText = 'Categoria no se pudo eliminar';
      } else if (errorCategoria === 'CategoriaNotMenuEdited') {
        alerta.style.display = 'flex';
        alerta.classList.add('StyleError');
        TextoRespuesta.innerText = 'Categoria no se pudo editar';
      } else {
        alerta.style.display = 'none';
      }
  }

  document.querySelector('#alerta span').addEventListener('click', () => {
    alerta.style.display = 'none';
  });
};
