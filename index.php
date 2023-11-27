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
                    <a class="nav-link active" aria-current="page" href="index.php">Kezdőlap</a>
                    <a class="nav-link" href="lista.php">Lista</a>
                    <a class="nav-link" href="regisztracio.php">Regisztráció</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="card w-75 mx-auto mt-3">
        <div class="card-body">
            <h1 class="text-center">Fájlkezelés beadandó - Autók</h1>
            <table class="table table-striped table-bordered w-75 mx-auto">
                <tbody>
                    <tr>
                        <th>Szerző és osztály:</th>
                        <td>Ruzsa Gergely Gábor - 2/14. SL</td>
                    </tr>
                    <tr>
                        <th>Beadandó neve:</th>
                        <td>"Backend - Űrlapok feldolgozása, fájlkezelés"</td>
                    </tr>
                    <tr>
                        <th>Tantárgy:</th>
                        <td>Frontend és Backend fejlesztés</td>
                    </tr>
                    <tr>
                        <th>Szakoktató:</th>
                        <td>Budaházi Bence</td>
                    </tr>
                </tbody>
            </table>
            <p class="text-center">Kérlek válassz a lentiek közül!</p>
            <div class="text-center">
                <a href="lista.php" class="btn btn-primary">Autók listája</a>
                <a href="regisztráció.php" class="btn btn-primary">Autó regisztrációja</a>
            </div>
            <h3>Megjegyzés</h3>
            <p>A feladat leírása nem volt számomra teljesen világos, amikor az volt írva, hogy <i>"Az autónak az alábbi adatait kell rögzíteni az adatbázisba [...]</i>". Az én értelmezésem szerint itt az adatbázis nem egy relációs adatbázist (pl. MySQL, MariaDB) jelöl, hanem egy fájl adatbázist (ld. a feladat végén található mondat: <i>"Sikeres felvétel esetén a felvett adatokat egy autok.csv nevű fájlba helyezd el"</i>). Amennyiben tévedtem volna, úgy kérem jelezze, hogy ki tudjam javítani! <i>~RGG</i></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>