<?php
include_once __DIR__ . '/trait/trait.php';
class Computer
{
    use weightable;
    function __construct(public string $name, public string $schedaMadre, public string $ram, public string $cpu, public string $ssd, public string $sistemaOperativo)
    {
        
        $this->name = $name;
        $this->schedaMadre = $schedaMadre;
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->ssd = $ssd;
        $this->sistemaOperativo = $sistemaOperativo;
    }
}
class Desktop extends Computer
{
    function __construct($name, $schedaMadre, $cpu, $ram, $ssd, $sistemaOperativo, public string $mouse, public string $tastiera)
    {
        parent::__construct($name, $schedaMadre, $cpu, $ram, $ssd, $sistemaOperativo);
        $this->mouse = $mouse;
        $this->tastiera = $tastiera;
        $this->setWeight(15,'kg');
    }
}

class Laptop extends Computer
{
    function __construct($name, $schedaMadre, $cpu, $ram, $ssd, $sistemaOperativo, public string $alimentazione, public string $batteria)
    {
        parent::__construct($name, $schedaMadre, $cpu, $ram, $ssd, $sistemaOperativo);
        $this->alimentazione = $alimentazione;
        $this->batteria = $batteria;
        $this->setWeight(5,'kg');
    }
}
