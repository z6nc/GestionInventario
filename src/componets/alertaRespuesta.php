<div id="alerta" class="VistaRespuesta   " role="alert">
    <div style="display: grid; grid-template-columns: 70px 1fr; gap: 10px; ">
      <div class=" " style="background-color: #77c0b5; display: flex; align-items: center; justify-content: center; ">
      <i  style="font-size: 22px; color: white; " class="fas fa-check-circle"></i>
      </div> 
      <p id="TextoRespuesta"></p>
    </div>
    <span style="padding-right: 9px; cursor: pointer;">X</span>
</div>
<script>
  let alerta = document.getElementById('alerta');
  let cerrar = document.querySelector('.VistaRespuesta span');
   cerrar.addEventListener('click',()=>{
    alerta.style.display = 'none';
  });

</script>
    <style>
   .VistaRespuesta{
    width: 90%;
    z-index: 1000;
    display: flex;
    align-items: center;
    background-color: white;
    justify-content: space-between;
    margin-top: 21px;
    margin-left: 5%;
    border-radius: 5px;
    box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    display: none;
  }
.StyleSuceess{
  background-color: #f8d7da;
  color: #47736d;
}
.StyleError{
  background-color: #f8d7da;
  color: #842029;
}
    </style>