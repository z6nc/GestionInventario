<section class="ContainerMsg" >
    <span class="cerrar">X</span>
    <div class="msgAlert">
        <p >¿Desea eliminar el producto vencido<span class="NomProducto">Pan integral</span> ?</p>
        <div class="SubMsgAlert">
            <buttom class="btnTrue" >
                Si, Acepto
            </buttom>
            <buttom  class="btnFalse">
                 No,Cancelar
            </buttom>
        </div>
    </div>
</section>

<style>
.ContainerMsg {
  background-color: rgb(255, 255, 255);
  z-index: 200;
  position: absolute;
  top: 30%;
  left: 40%; 
  border-radius: 9px;
  padding: 9px;
  height: auto;
  box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 1px 2px 4px -2px rgb(0 0 0 / 0.1);
  background-image: url('https://plazavea.vteximg.com.br/arquivos/ids/169268-1000-1000/arveja-americana-bolsa-kg.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
.ContainerMsg .cerrar{
  display: flex;
  justify-content: end;
  padding-top: 3px;
  padding-right: 12px;
  cursor: pointer;


}
.ContainerMsg .msgAlert{
  padding: 9px 30px;
}
.ContainerMsg .msgAlert p{
  font-size: 20px;
}
.ContainerMsg .msgAlert .NomProducto{
  font-weight: 900;
  padding-left: 4px;
}
.ContainerMsg .SubMsgAlert{
  display: flex;
  justify-content:space-evenly;
  padding-bottom: 25px;
}
.ContainerMsg .SubMsgAlert .btnTrue{
  background-color: rgb(27, 67, 243);
  padding: 9px 20px;
  border-radius: 5px;
  color: white;
  cursor: pointer;
  font-weight: 900;
  font-size: 15px;
}
.ContainerMsg .SubMsgAlert .btnTrue:hover{
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
.ContainerMsg .SubMsgAlert .btnFalse:hover{
  background-color: red;
}

</style>