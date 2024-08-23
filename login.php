<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CODERPHP</title>
  <link rel="stylesheet" href="css/signin.css">
  <link rel="stylesheet" media="screen" href="https://cpwebassets.codepen.io/assets/fullpage/fullpage-1580f96ce81ff0a427cf57dda2748ce646c38efc201ae5942a29958cffa6856d.css" />
  <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <style>
    html { font-size: 15px; }
    html, body { margin: 0; padding: 0; min-height: 100%; }
    body { height:100%; display: flex; flex-direction: column; }
    .referer-warning {
      background: black;
      box-shadow: 0 2px 5px rgba(0,0,0, 0.5);
      padding: 0.75em;
      color: white;
      text-align: center;
      font-family: var(--cp-font-family);
      line-height: 1.2;
      font-size: 1rem;
      position: relative;
      z-index: 2;
    }
    .referer-warning h1 { font-size: 1.2rem; margin: 0; }
    .referer-warning a { color: #56bcf9; } /* $linkColorOnBlack */
  </style>
</head>
<body style="background-image: url('../img/matrix.gif') ">


 <section class="asdsd">

  <div class="login">
   <center> <img style="border-radius:50%;" border="0" height="80px" src="../img/images.png" alt=""></center>
   <form class="form-signin" action="valida.php" method="post">
     <center>
      <h1 style='font-size:19px;' class="sadsadsd">By Coder PHP - Elite Coders</h1>

    </center>
    


    <p class="text-center text-success">
      
    </p>


    <div class="form-group">
      <label style=" color:white; ">Usuário</label>
      <input type="text" required class="form-control" name="txt_usuario" placeholder="Seu E-mail">               
    </div>
    <div class="form-group">
      <label style=" color:white; ">Senha</label>
      <input type="password" required name="txt_senha" class="form-control" placeholder="Sua Senha:">
    </div>
    <input type="submit" value="Entrar!" class="btn" name=""> 
    <br><br>
    <hr style="border:solid 1px rgb(229, 229, 229);"> 
    
    

  </form>
</div>

</section>

<script src="dist/css/iziToast.css"></script>
<script src="dist/js/iziToast.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/css/iziToast.min.css">


<?php    if(isset($_SESSION['loginErro'])):

  echo  $_SESSION['loginErro'];
  echo "<script>
  iziToast.warning({
    title: '{$_SESSION['loginErro']},',
    
    timeout:5000,
    position: 'topRight',
    transitionIn: 'bounceInLeft',
    image: '../img/images.png'

    });
    </script>";
    unset($_SESSION['loginErro']);
  endif; ?>


  <?php    if(isset($_SESSION['bloqueado'])):

    echo  $_SESSION['bloqueado'];
    echo "<script>
    iziToast.error({
      title: 'Acesso,',
      message: '{$_SESSION['bloqueado']}',
      timeout:3000,
      position: 'topLeft'
      });
      </script>";
      unset($_SESSION['bloqueado']);
    endif; ?>

    <?php    if(isset($_SESSION['restrita'])):

      echo  $_SESSION['restrita'];
      echo "<script>
      iziToast.error({
        title: '{$_SESSION['restrita']},',
        
        timeout:5000,
        position: 'topRight',
        transitionIn: 'bounceInLeft',
        image: '../img/images.png'

        });
        </script>";
        unset($_SESSION['restrita']);
      endif; ?>


    </body>
    </html>




