<?php
require_once($_SERVER['DOCUMENT_ROOT']."/ProyectoSistemaDistribuido/mvc/BD/BDconexion.php");
class AccesoUsuarios extends DataBaseConnection{

    private array $rowTable = array();
    
    public function __construct(){
        parent::__construct();        
    }

    public function tablaUsuarios(){
        $sqlCommand =   "SELECT IDUSUARIO,CONCAT(NOMBRE,' ',APELLIDO) AS NOMYAPE,USUARIO,jerarquia.JERARQUIA,ESTADO 
                        FROM usuario 
                        JOIN jerarquia ON usuario.IDJERARQUIA = jerarquia.IDJERARQUIA 
                        ORDER BY IDUSUARIO DESC";
        $resultSet = $this->query($sqlCommand);
        while($row = $resultSet->fetch_assoc()) {    
            echo '<tr>';   
            echo '<td>'.$row['IDUSUARIO'].'</td>';
            echo '<td>'.$row['NOMYAPE'].'</td>';
            echo '<td>'.$row['USUARIO'].'</td>';
            echo '<td>'.$row['JERARQUIA'].'</td>';
            echo '<td class="estado">';
            if($row['ESTADO']){
                echo '<span class="activo">ACTIVO</span>';
            }else{
                echo '<span class="inactivo">INACTIVO</span>';
            }      
            echo '</td>';      
            echo '<td>
                    <button name="btn-edit-user" class="btn-edit" form="form-options-usuarios" value="'.$row['IDUSUARIO'].'"></button>
                    <button name="btn-delete-user" class="btn-delete" form="form-options-usuarios" value="'.$row['IDUSUARIO'].'"></button>
                  </td>';
            echo '</tr>';  
        }
    }

    public function comboBoxJerarquia(int $value = 0){
        $resultSet = $this->query("SELECT * FROM jerarquia");

        echo '<option value>seleccionar</option>';
        while($row = $resultSet->fetch_assoc()) {
            $idjer = intval($row['IDJERARQUIA']);
            echo '<option '.($value === $idjer ?'selected':'').' value="$idjer">'.$row['JERARQUIA'].'</option>';
        }        
    }

    public function addNewUser(string $nombre,string $apellido, string $usuario,int $jerarquia, string $contra){        
        $prepareStatement = $this->prepare("INSERT INTO usuario(NOMBRE,APELLIDO, USUARIO,IDJERARQUIA, CONTRASEÑA) VALUES (?,?,?,?,SHA1(?))");
        $prepareStatement->bind_param("sssis",$nombre,$apellido, $usuario,$jerarquia,$contra);
        $prepareStatement->execute();
    }

    public function editUser(string $nombre,string $apellido, string $usuario,int $jerarquia, string $contra, int $idusuario){        
        $prepareStatement = $this->prepare("UPDATE usuario SET NOMBRE=?,APELLIDO=?,USUARIO=?,IDJERARQUIA=?,CONTRASEÑA=? WHERE IDUSUARIO=?");
        $prepareStatement->bind_param("sssis",$nombre,$apellido, $usuario,$jerarquia,$contra,$idusuario);
        $prepareStatement->execute();
    }

    /**
     * el ingreso de parametro, 1 es ACTIVO y 0 INACTIVO. 
     * si se sube un valor diferente a 1 y 0 o cualquier error, retorna false 
     */
    public function setUserEstatus(int $status,int $idUsuario):bool{        
        if($status > 1 || $status < 0) return false;
        $prepareStatement = $this->prepare("UPDATE usuario SET ESTADO=? WHERE IDUSUARIO=?");
        $prepareStatement->bind_param("ii",$status,$idUsuario);
        return $prepareStatement->execute();
    }

    public function removeUser(int $idUser){        
        $prepareStatement = $this->prepare("DELETE FROM usuario WHERE usuario.IDUSUARIO = ?");
        $prepareStatement->bind_param("i",$idProducto);
        $prepareStatement->execute();
    }

    public function getRowTable(int $idUsuario): array{
        $prepareStatement = $this->prepare("SELECT * FROM usuario WHERE IDUSUARIO = ?");
        $prepareStatement->bind_param("i",$idUsuario);
        $prepareStatement->execute();
        $resultSet = $prepareStatement->get_result();
        if($row = $resultSet->fetch_assoc()){
            $this->rowTable = $row;
        }
        
        return $this->rowTable;
    }
}