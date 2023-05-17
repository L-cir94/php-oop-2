<!-- Immaginiamo le classi per modellizzare un personal computer.
Un computer desktop é un computer.
Un computer portatile é un computer.
Creiamo la classe computer come parent class ed estendiamola per le classi desktop e laptop.
Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo 
poliforfo in ciascuna sottoclasse.
BONUS:
- pensate a cosa compone un pc: 'ha un' monitor? 'ha una' mbo? 'ha una' keyboard? usate la composizione per indicare 
costruire appropriatamente le istanze.
- aggiungere un metodo che stampi la stringa con tutte le info del dispositivo (oltre ai getter/setters necessari). -->
<?php
class Computer
{
    function __construct(public string $schedaMadre, public string $ram, public string $cpu, public string $ssd, public string $sistemaOperativo)
    {
        $this->schedaMadre = $schedaMadre;
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->ssd = $ssd;
        $this->sistemaOperativo = $sistemaOperativo;
    }
}
class Desktop extends Computer
{
    function __construct($schedaMadre, $cpu, $ram, $ssd, $sistemaOperativo, public string $mouse, public string $tastiera)
    {
        parent::__construct($schedaMadre, $cpu, $ram, $ssd, $sistemaOperativo);
        $this->mouse = $mouse;
        $this->tastiera = $tastiera;
    }
}

class Laptop extends Computer
{
    function __construct($schedaMadre, $cpu, $ram, $ssd, $sistemaOperativo, public string $alimentatore, public string $batteria)
    {
        parent::__construct($schedaMadre, $cpu, $ram, $ssd, $sistemaOperativo);
        $this->alimentatore = $alimentatore;
        $this->batteria = $batteria;
    }
}
