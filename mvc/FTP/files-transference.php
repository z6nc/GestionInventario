<?php

class FileSenderFTP{
    private const SERVER = "127.0.0.1"; 
    private $connection;
    private bool $login;
    private string $file_name;

    public function __construct(){
        $this->connection = ftp_connect(SELF::SERVER) or die("Could not connect to $ftp_server");
        $this->login = ftp_login($this->connection, gethostname(), strtok(exec('getmac'), ' '));
        if(!$this->login){
            echo "Error permision, not possible login.";
        }
    }

    public function saveFile(string $file_name, string $file_temp){
        if(!$this->login){
            echo "Error permision, not possible login.";
            return;
        }

        $this->file_name = $file_name;
        if (ftp_put($this->connection, $file_name, $file_temp, FTP_BINARY)){
            echo "Successfully uploaded $file_name.";
        } else {
            echo "Error uploading $file_name.";
        } 
    }

    public function getPathSaved():string{
        return "/src/images/$this->file_name";
    }

    public function __destruct(){
        ftp_close($this->connection);
    }

}