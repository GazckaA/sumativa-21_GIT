<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reloj Digital</title>
    <link href="https://fonts.googleapis.com/css2?family=Blaka+Hollow&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <style>
        .texto{
            font-size: 30px;
            color:blue;
            position: relative;
            font-family: 'Blaka Hollow';
        }
        .jj{
            width:100%;
            min-height: 100vh;
            position: relative;
            background:orange;
        }
        .container{
            width: 1600px;
            height: 125px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .reloj{
            font-size: 35px;
            font-family:Monocraft;
        }
        @font-face{
            font-family: Monocraft;
            src: url("Monocraft.otf");
        }
    </style>
</head>
<body>
    <div class="jj">
        <div class="container">
            <div class="reloj">
    <h1>Reloj!</h1>
    <h4 class="texto", id="mensaje"></h4>
    <p id="item"></p>
    </div>
        </div>
            </div>
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
    <!--Jquery-->
    <script 
    src="https://code.jquery.com/jquery-2.2.4.min.js" 
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" 
    crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
