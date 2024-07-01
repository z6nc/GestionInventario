<?php
class AccesoUsuarios extends mysqli{

    private array $rowTable = array();

    private const SERVER_NAME = "localhost";
    private const USERNAME = "root";
    private const PASSWORD = "";
    private const DATABASE = "rest_chur";    
    private const PORT = "3306";
    
    public function __construct(){
        parent::__construct(self::SERVER_NAME, self::USERNAME, self::PASSWORD, self::DATABASE, self::PORT);        
    }

    public function __destruct(){
        $this->close();
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
                echo '<button class="activo" name="change-status" form="form-options-usuarios" value="'.$row['IDUSUARIO'].'">ACTIVO</button>';
            }else{
                echo '<button class="inactivo" name="change-status" form="form-options-usuarios" value="'.$row['IDUSUARIO'].'">INACTIVO</button>';
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
            echo '<option '.($value === $idjer ?'selected':'').' value="'.$idjer.'">'.$row['JERARQUIA'].'</option>';
        }        
    }

    public function addNewUser(string $nombre,string $apellido, string $usuario,int $jerarquia, string $contra){        
        $prepareStatement = $this->prepare("INSERT INTO usuario(NOMBRE,APELLIDO, USUARIO,IDJERARQUIA, CONTRASEÑA) VALUES (?,?,?,?,SHA1(?))");
        $prepareStatement->bind_param("sssis",$nombre,$apellido, $usuario,$jerarquia,$contra);
        $prepareStatement->execute();
    }

    public function editUser(string $nombre,string $apellido, string $usuario,int $jerarquia, string $contra=null, int $idusuario){        
        $prepareStatement = $this->prepare("UPDATE usuario SET NOMBRE=?,APELLIDO=?,USUARIO=?,IDJERARQUIA=?,CONTRASEÑA=IFNULL(SHA1(?),CONTRASEÑA) WHERE IDUSUARIO=?");
        $prepareStatement->bind_param("sssisi",$nombre,$apellido, $usuario,$jerarquia,$contra,$idusuario);
        $prepareStatement->execute();
    }

    
    public function setUserEstatus(int $idUsuario):bool{        
        $prepareStatement = $this->prepare("UPDATE usuario SET ESTADO = NOT(ESTADO) WHERE IDUSUARIO=?");
        $prepareStatement->bind_param("i",$idUsuario);
        return $prepareStatement->execute();
    }

    public function removeUser(int $idUser){        
        $prepareStatement = $this->prepare("DELETE FROM usuario WHERE usuario.IDUSUARIO = ?");
        $prepareStatement->bind_param("i",$idUser);
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