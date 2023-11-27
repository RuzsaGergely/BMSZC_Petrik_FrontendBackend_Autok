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
                    <a class="nav-link "  href="index.php">Kezdőlap</a>
                    <a class="nav-link active" aria-current="page" href="lista.php">Lista</a>
                    <a class="nav-link" href="regisztracio.php">Regisztráció</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="card w-75 mx-auto mt-3">
        <div class="card-body">
            <h1 class="text-center">Autók listája</h1>
            <?php
                if(!file_exists("autok.csv")){
                    echo "<p class=\"hibaszoveg text-center\">Hiba! Nem létezik az adatbázist tartalmazó fájl! Kérjük jelentse a rendszergazdának!</p>";
                } else {
                    // Igen, tudom, megcsinálhattam volna fgetcsv-vel is.
                    $file_lines = file("autok.csv", FILE_IGNORE_NEW_LINES);
                    $output = <<<HTML
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Rendszám</th>
                                    <th scope="col">Márka</th>
                                    <th scope="col">Modell</th>
                                    <th scope="col">Gyártás éve</th>
                                    <th scope="col">Üzemanyag</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            
                    HTML;

                    foreach(array_slice($file_lines, 1) as $line){
                        $data = explode(";", $line);
                        $output = $output . <<<HTML
                        <tr>
                            <th scope="row">{$data[0]}</th>
                            <td>{$data[1]}</td>
                            <td>{$data[2]}</td>
                            <td>{$data[3]}</td>
                            <td>{$data[4]}</td>
                        </tr>
                        HTML;
                    }

                    $output = $output . <<<HTML
                            </tbody>
                        </table>
                    HTML;
                    echo $output;
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>