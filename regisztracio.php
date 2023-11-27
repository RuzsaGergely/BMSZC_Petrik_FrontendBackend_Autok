<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(checkInputs()){
        $file_lines = file("autok.csv", FILE_IGNORE_NEW_LINES);
        $new_line = "\n".$_POST["inputRendszam"] . ";" .$_POST["inputMarka"] . ";" . $_POST["inputModell"] . ";" . $_POST["inputGyartaseve"] . ";" . $_POST["inputUzemanyag"];
        array_push($file_lines, $new_line);
        $db = fopen("autok.csv", "a");
        fwrite($db, $new_line);
        fclose($db);
    } else {
        print_r($_POST);
        echo "<script>alert(\"Hiba történt! Kérlek ellenőrizd az adatokat!\");</script>";
    }
}

function checkInputs() {
    $predefined_fuels = array("benzin", "gázolaj", "hibrid", "elektromos");
    // Első réteg: léteznek-e a mezők a postban?
    if(isset($_POST["inputRendszam"]) && isset($_POST["inputMarka"]) && isset($_POST["inputModell"]) && isset($_POST["inputGyartaseve"]) && isset($_POST["inputUzemanyag"])) {
        // Második réteg: ha léteznek, akkor van tartalmuk?
        if(!empty($_POST["inputRendszam"]) && !empty($_POST["inputMarka"]) && !empty($_POST["inputModell"]) && !empty($_POST["inputGyartaseve"]) && !empty($_POST["inputUzemanyag"])) {
            // Harmadik réteg: ha van tartalmuk, akkor a megadott üzemanyagot elfogadjuk?
            if(array_search($_POST["inputUzemanyag"], $predefined_fuels, true) !== FALSE) {
                return true;
            } 
            return false;
        }
        return false;
    } 
    return false;
}
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMSZC Petrik - 2/14. SL - Frontend és Backend fejlesztés - Autók</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Autók</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link " href="index.php">Kezdőlap</a>
                    <a class="nav-link " href="lista.php">Lista</a>
                    <a class="nav-link active" aria-current="page" href="regisztracio.php">Regisztráció</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="card w-75 mx-auto mt-3">
        <div class="card-body">
            <h1 class="text-center">Autó regisztrálása</h1>
            <form method="POST">
                <div class="mb-3">
                    <label for="inputRendszam" class="form-label">Rendszám</label>
                    <input type="text" class="form-control" id="inputRendszam" name="inputRendszam" required>
                </div>
                <div class="mb-3">
                    <label for="inputMarka" class="form-label">Márka</label>
                    <input type="text" class="form-control" id="inputMarka" name="inputMarka" required>
                </div>
                <div class="mb-3">
                    <label for="inputModell" class="form-label">Modell</label>
                    <input type="text" class="form-control" id="inputModell" name="inputModell" required>
                </div>
                <div class="mb-3">
                    <label for="inputGyartaseve" class="form-label">Gyártási éve</label>
                    <input type="number" min="1900" max="2099" step="1" value="2023" class="form-control"
                        id="inputGyartaseve" name="inputGyartaseve" required>
                </div>
                <div class="mb-3">
                    <label for="inputUzemanyag" class="form-label">Üzemanyag típusa</label>
                    <select class="form-select" id="inputUzemanyag" name="inputUzemanyag">
                        <option value="benzin" selected>Benzin</option>
                        <option value="gázolaj">Gázolaj</option>
                        <option value="elektromos">Elektromos</option>
                        <option value="hibrid">Hibrid</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Mentés</button>
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>