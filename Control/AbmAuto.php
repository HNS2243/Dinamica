<?php
class AbmAuto {

    private $db; // instancia de BaseDatos

    public function __construct() {
        $this->db = new BaseDatos();
    }

    /**
     * Alta de un nuevo auto a partir de un array de datos
     * @param array $datos expects keys Patente, Marca, Modelo, DniDuenio
     * @return bool
     */
    public function altaAuto($datos) {
        require_once __DIR__ . '/../Modelo/Auto.php';
        $auto = new Auto();
        $auto->setPatente($datos['Patente']);
        $auto->setMarca($datos['Marca']);
        $auto->setModelo($datos['Modelo']);
        $auto->setDniDuenio($datos['DniDuenio']);
        $res = $auto->insertar();
        return ($res > 0);
    }

    /**
     * Busca un auto por su patente
     * @param string $patente
     * @return Auto|false
     */
    public function buscarAuto($patente) {
        $patente = trim($patente); // elimina espacios al inicio y fin
        $sql = "SELECT * FROM auto WHERE Patente = :patente";

        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':patente', $patente, PDO::PARAM_STR);
            $stmt->execute();
            $fila = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($fila) {
                $auto = new Auto();
                $auto->setPatente($fila['Patente']);
                $auto->setMarca($fila['Marca']);
                $auto->setModelo($fila['Modelo']);
                $auto->setDniDuenio($fila['DniDuenio']);
                return $auto;
            } else {
                return false; // no se encontró
            }

        } catch (PDOException $e) {
            if ($this->db->getDebug()) {
                echo "Error en buscarAuto: " . $e->getMessage();
            }
            return false;
        }
    }

}
?>
