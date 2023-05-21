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
include_once __DIR__ . '/computer.php';
include_once __DIR__ . '/db.php';

?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
        <div class="container">
            <div class="row">
                <?php foreach ($computers as $computer) : ?>
                    <div class="col-4 mt-5">
                        <div class="card h-100">
                            <div class="card-title">
                                <!-- method -->
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><?=$computer->name;?></h4>
                                <p class="card-text">Sistema Operativo: <?=$computer->sistemaOperativo?></p>
                                <p class="card-text">CPU: <?=$computer->cpu?></p>
                                <p class="card-text">Ram: <?=$computer->ram?></p>
                                <p class="card-text">SSD/HDD: <?=$computer->ssd?></p>
                                <p class="card-text">Scheda Madre: <?=$computer->schedaMadre?></p>
                                <p class="card-text">Batteria: <?=$computer->batteria?></p>
                            </div>
                            <div class="card-footer">
                                <h4>Accessori</h4>
                                <p class="card-text"><?=$computer->mouse?></p>
                                <p class="card-text"><?=$computer->tastiera?></p>
                                <p class="card-text">Alimentatore esterno <?=$computer->alimentazione?></p>
                                <h4>Peso</h4>
                                <p><?=$computer->getWeight()?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>