<?php
    session_start();
    if(time() - $_SESSION['secondi'] >= 20){
        header("Location:sessione_scaduta.php");
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="w-25 mx-auto rounded-5 bg-black text-white text-center py-2 mt-3">
        <h1>DATI UTENTE</h1>
    </div>
    <div class="w-25 mx-auto mt-3 text-center">
            <p>Niccolò</p>
            <p>Mancini</p>
            <p>29 agosto 2006</p>
            <p><?php echo date("Y-m-d h:i:s", $_SESSION['secondi'])?></p>
            <form action="script_logout.php" method="post">
                <button type="submit" class="btn btn-danger mx-auto">logout</button>
            </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>