<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Calculatrice</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
        <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>
        <div class= "container-fluid">
            <div class= "row" id="calc">
                <div class="col-md-4">
                </div>
                <div class= "col-md-4 border rounded">
                    <h1>PHP CALC</h1>
                    <!-- formulaire de saisie des chiffres et des opérateurs -->
                    <div class="form-group border rounded">
                        <form action="index.php" method="post">
                            <label for="chiffre1"></label>
                            <input class="form-control" type="text" name="chiffre1" value="" placeholder="Nombre 1"/>
                    </div>
                    <div class="form-group border rounded">
                        <label for="chiffre2"></label>
                        <input class="form-control" type="text" name="chiffre2" value="" placeholder="Nombre 2"/>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-outline-dark" type="submit" name="addition" value="+"/>
                        <input class="btn btn-outline-dark" type="submit" name="soustraction" value="-"/>
                        <input class="btn btn-outline-dark" type="submit" name="multiplication" value="*"/>
                        <input class="btn btn-outline-dark" type="submit" name="division" value="/"/>
                        <input class="btn btn-outline-dark" type="submit" name="reset" value="RAZ"/>
                        </form>
                    </div>
                    <div class="form-group border rounded" id="result">
                        <!-- insertion du controller calc-->
                        <?php include 'calc.php' ?>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>    
    </body>
</html>