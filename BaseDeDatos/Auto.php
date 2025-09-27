class Auto
{
    private string $patente;
    private string $marca;
    private int $modelo;
    private string $dniDuenio;

    // Constructor
    public function __construct($patente, $marca, $modelo, $dniDuenio)
    {
        $this->patente = $patente;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->dniDuenio = $dniDuenio;
    }

    // Getters
    public function getPatente(): string {
        return $this->patente;
    }

    public function getMarca(): string {
        return $this->marca;
    }

    public function getModelo(): int {
        return $this->modelo;
    }

    public function getDniDuenio(): string {
        return $this->dniDuenio;
    }

    // Setters
    public function setPatente(string $patente): void {
        $this->patente = $patente;
    }

    public function setMarca(string $marca): void {
        $this->marca = $marca;
    }

    public function setModelo(int $modelo): void {
        $this->modelo = $modelo;
    }

    public function setDniDuenio(string $dniDuenio): void {
        $this->dniDuenio = $dniDuenio;
    }
}
