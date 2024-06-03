<html>
    <head>
        <meta charset="UTF-8">
        <Title>!Resultados de Datos¡</Title>
        <link rel="stylesheet" href="Css/style.css">
    </head>
    <body>
        <div class="dive2">
        <center>
            <h1>!Resultados¡</h1>
                 <img src="pusheen.gif"><br>
                 <?php
                 $name = $_POST['Name'];
                 echo '<p><b>Nombre:</b>'.$name.'</p>';
                 $Fecha = $_POST['date'];
                 echo '<p><b>Fecha de Nacimiento:</b>'.$Fecha.'</p>';
                 $edad = $_POST['Age'];
                 echo '<p><b>Edad:</b>'.$edad.'</p>';
                 $ciudad = $_POST['Ciudad'];
                 echo '<p><b>Ciudad:</b>'.$ciudad.'</p>';
                 $pasatiempo = $_POST['Pasatiempo'];
                 echo '<p><b>Hobby:</b>'.$pasatiempo.'</p>';

                 ?>
            
                    <br>
                    <h2>!Bien Hecho¡</h2>
                    <div id="popUpOverlay"></div>
                    <div id="popUpBox">
                        <div id="box">  
                            <i class="fas fa-question-circle fa-5x"></i>
                            <h1>!Volver a Ingresar¡</h1>
                            <div id="closeModal"></div>
                        </div>
                    </div>
                    <button onclick="Alert.render('You look very pretty today')" class="btn">!Volver a Ingresar¡</button>
                            
              </center>
              <script src="js/app.js"></script>
        </div>
    </body>
    
