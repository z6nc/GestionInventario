<?php
class DataBaseConnection extends mysqli{
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

}