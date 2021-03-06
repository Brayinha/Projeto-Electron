<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="d-flex justify-content-center">
            <form action="inserir.php" method="POST">
                    <div class="form-group">
                        <label for="palavra"><h4>Palavra</h4></label>
                        <input type="text" class="form-control" id="palavra" name="palavra">

                        <label for="significado"><h4>Significado</h4></label>
                        <input type="text" class="form-control" id="significado" name="significado">

                        <label for="exemplo"><h4>exemplo</h4></label>
                        <input type="text" class="form-control" id="exemplo"name="exemplo">   
                        
                        <label for="classe"><h4>Classe Gramatical</h4></label>
                        <input type="text" class="form-control" id="classe" name="classe">
                        <input type="submit" value="Cadastrar" name="btn_gerar">

                    </div>
                </form>       
            </div>
            </div>
        </div>
    </div>

</body>
</html>


