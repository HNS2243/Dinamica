class Persona
{
    private string $nroDni;
    private string $apellido;
    private string $nombre;
    private string $fechaNac;
    private string $telefono;
    private string $domicilio;

    // Constructor
    public function __construct($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio)
    {
        $this->nroDni = $nroDni;
        $this->apellido = $apellido;
        $this->nombre = $nombre;
        $this->fechaNac = $fechaNac;
        $this->telefono = $telefono;
        $this->domicilio = $domicilio;
    }

    // Getters
    public function getNroDni(): string {
        return $this->nroDni;
    }

    public function getApellido(): string {
        return $this->apellido;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getFechaNac(): string {
        return $this->fechaNac;
    }

    public function getTelefono(): string {
        return $this->telefono;
    }

    public function getDomicilio(): string {
        return $this->domicilio;
    }

    // Setters
    public function setNroDni(string $nroDni): void {
        $this->nroDni = $nroDni;
    }

    public function setApellido(string $apellido): void {
        $this->apellido = $apellido;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setFechaNac(string $fechaNac): void {
        $this->fechaNac = $fechaNac;
    }

    public function setTelefono(string $telefono): void {
        $this->telefono = $telefono;
    }

    public function setDomicilio(string $domicilio): void {
        $this->domicilio = $domicilio;
    }
}
