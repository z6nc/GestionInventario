<?php
$urlImg ="https://plazavea.vteximg.com.br/arquivos/ids/19913605-1000-1000/20314529.jpg";
?>

<section id="" class="ContainerMsg"  style="background-image: linear-gradient(
            0deg,
            rgba(0, 0, 0, 0.3),
            rgba(0, 0, 0, 0.3)
          ), url(<?php echo $urlImg?>);">
          <div class="subContainer">
          <span id="Close" class="cerrar">X</span>
    <div class="msgAlert">
        <p >¿Desea eliminar el producto vencido<span class="NomProducto">Pan integral</span> ?</p>
        <div class="SubMsgAlert">
            <buttom class="btnTrue"  onclick="">
                Si, Acepto
            </buttom>
            <buttom  class="btnFalse" onclick="">
                 No,Cancelar
            </buttom>
        </div>
    </div>
          </div>
    
</section>

<script>
 const Close = document.getElementById('Close');
  const ContainerMsg = document.querySelector('.ContainerMsg');

  Close.addEventListener('click',()=>{
    ContainerMsg.style.display = 'none';
  });
</script>


<style>
.ContainerMsg {
  background-color: rgb(255, 255, 255);
  z-index: 200;
  position: absolute;
  top: 30%;
  left: 40%; 
  border-radius: 9px;
  height: auto;
  box-shadow: 0 4px 6px -1px rgb(0 0 0), 1px 2px 4px -2px rgb(0 0 0);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  overflow: hidden;
  background-size: 100%;
  display: none;
 
}
.ContainerMsg .subContainer{
  background-color: rgb(155 155 155 / 30%);
  width: 100%;
  padding: 9px;
}
.ContainerMsg .subContainer .cerrar{
  display: flex;
  justify-content: end;
  padding-top: 3px;
  padding-right: 19px;
  cursor: pointer;
  color: white;


}
.ContainerMsg .subContainer .msgAlert{
  padding: 9px 30px;
  
  
}
.ContainerMsg .subContainer .msgAlert p{
  font-size: 20px;
  color: white;
}
.ContainerMsg .subContainer .msgAlert .NomProducto{
  font-weight: 900;
  padding-left: 4px;
}
.ContainerMsg .SubMsgAlert{
  display: flex;
  justify-content:space-evenly;
  padding-bottom: 25px;
}
.ContainerMsg .subContainer .SubMsgAlert .btnTrue{
  background-color: rgb(27, 67, 243);
  padding: 9px 20px;
  border-radius: 5px;
  color: white;
  cursor: pointer;
  font-weight: 900;
  font-size: 15px;
}
.ContainerMsg .subContainer .SubMsgAlert .btnTrue:hover{
  background-color: blue;
}
.ContainerMsg .SubMsgAlert .btnFalse{
  background-color: rgb(247, 51, 51);
  padding: 9px 20px;
  border-radius: 5px;
  color: white;
  cursor: pointer;
  font-weight: 900;
  font-size: 15px;

}
.ContainerMsg .subContainer .SubMsgAlert .btnFalse:hover{
  background-color: red;
}

</style>