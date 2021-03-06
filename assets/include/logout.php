<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hostinger | Abmelden</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" type="text/css" href="assets/css/byte-site.css">
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<?php
session_destroy();
include "assets/include/other/header.php";
?>
<main>
    <div class="container">
        <br><br><br><br>
        <div class="col s12 m7">
            <div class="card horizontal gray">
                <div class="card-content">
                    <p>
                    <h4>Du wurdest erfolgreich abgemeldet!</h4>
                    <h5>Weiterleitung erfolgt in <b id="logout_redirect">10</b></h5>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include "assets/include/other/footer.php";
?>

<script src="assets/js/jquery-3.4.1.min.js" type="application/javascript"></script>
<script src="assets/js/materialize.js" type="application/javascript"></script>
<script src="assets/js/byte-site.js" type="application/javascript"></script>
</body>
</html>