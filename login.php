<?php

// Započni novu ili nastavi postojeću sesiju
session_start();

?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Moja web stranica</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="container">
    <div class="row">
        
        <div class="col-md-12">

            <h1>Prijava</h1>

            <?php if(isset($_SESSION['korisnicko_ime'])):?>

                <div class="alert alert-success" role="alert"> <strong><?php echo $_SESSION['']; ?></strong>.Vratite se na početnu stranicu:  <a href="index.html"> POČETNA</a></div>

            <?php else: ?>

                <div class="alert alert-danger" role="alert">Niste prijavljeni.</div>

            <?php endif; ?>
            
            <?php $results = mysqli_query($db, "SELECT * FROM korisnici"); ?>


            <form class="form-horizontal" action="prijava.php" method="POST">



                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Korisničko ime</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input" name="korisnicko_ime">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Lozinka</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="input" name="lozinka">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Pošalji</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>




<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>
