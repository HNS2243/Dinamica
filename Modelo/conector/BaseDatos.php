<?php
class BaseDatos extends PDO {
    private $engine, $host, $database, $user, $pass;
    private $debug, $conec, $indice, $resultado, $error, $sql, $constructorError;

    public function __construct(){
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'infoautos';
        $this->user = 'root';
        $this->pass = '';
        $this->debug = true;
    $this->error = "";
    $this->sql = "";
    $this->constructorError = "";
        $this->indice = 0;

        $dns = "{$this->engine}:dbname={$this->database};host={$this->host}";
        try {
            // Only use PDO MySQL specific constants if they're defined (pdo_mysql driver enabled)
            $options = null;
            if (defined('PDO::MYSQL_ATTR_INIT_COMMAND')) {
                $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];
            }
            if ($options !== null) {
                parent::__construct($dns, $this->user, $this->pass, $options);
            } else {
                // Call parent without driver-specific options
                parent::__construct($dns, $this->user, $this->pass);
            }
            $this->conec = true;
        } catch (PDOException $e) {
            // Store constructor failure message separately so it isn't overwritten by later queries
            $this->constructorError = $e->getMessage();
            $this->conec = false;
        }
    }

    public function Ejecutar($sql){
        $this->sql = $sql;
        $this->error = "";
        $resp = false;

        if (stripos($sql,"insert") !== false){
            $resp = $this->EjecutarInsert($sql);
        } elseif (stripos($sql,"update") !== false || stripos($sql,"delete") !== false){
            $resp = $this->EjecutarDeleteUpdate($sql);
        } elseif (stripos($sql,"select") !== false){
            $resp = $this->EjecutarSelect($sql);
        }
        return $resp;
    }

    private function EjecutarInsert($sql){
        if (!$this->conec) {
            $this->error = "No se pudo conectar a la base de datos. Constructor PDO fallido: " . $this->constructorError;
            if ($this->debug) echo "<pre>ERROR: " . $this->error . "</pre>";
            return -1;
        }
        $res = parent::query($sql);
        if(!$res){
            $this->analizarDebug();
            return -1;
        }
        $id = $this->lastInsertId();
        return $id == 0 ? -1 : $id;
    }

    private function EjecutarDeleteUpdate($sql){
        if (!$this->conec) {
            $this->error = "No se pudo conectar a la base de datos. Constructor PDO fallido: " . $this->constructorError;
            if ($this->debug) echo "<pre>ERROR: " . $this->error . "</pre>";
            return -1;
        }
        $res = parent::query($sql);
        if(!$res){ $this->analizarDebug(); return -1; }
        return $res->rowCount();
    }

    private function EjecutarSelect($sql){
        if (!$this->conec) {
            $this->error = "No se pudo conectar a la base de datos. Constructor PDO fallido: " . $this->constructorError;
            if ($this->debug) echo "<pre>ERROR: " . $this->error . "</pre>";
            return -1;
        }
        $res = parent::query($sql);
        if(!$res){ $this->analizarDebug(); return -1; }
        $this->resultado = $res->fetchAll(PDO::FETCH_ASSOC);
        $this->indice = 0;
        return count($this->resultado);
    }

    public function Registro(){
        if ($this->indice < 0 || $this->indice >= count($this->resultado)) return false;
        $fila = $this->resultado[$this->indice];
        $this->indice++;
        return $fila;
    }
    private function analizarDebug(){
        // If constructor failed to create PDO, errorInfo() will not be available; guard against that.
        if (!$this->conec) {
            // Use $this->sql to store constructor error message when connection failed.
            $this->error = "Objeto PDO no inicializado. Detalle: " . $this->sql;
            if ($this->debug) { echo "<pre>" . $this->error . "</pre>"; }
            return;
        }
        
        // PDO is available: fetch driver error info.
        
        $e = $this->errorInfo();
        
        $this->error = print_r($e, true);
        
        if ($this->debug) { echo "<pre>"; print_r($e); echo "</pre>"; }

    }

    // Public getters to retrieve errors without using Reflection
    public function getConstructorError(){
        return $this->constructorError;
    }

    public function getLastError(){
        return $this->error;
    }

    public function getDebug(){
        return $this->debug;
    }

}

?>

