<!DOCTYPE html>
<html>

<head>
     <?php echo view('venlaces');?>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Registro</title>
  
</head>
  

<body>
   <font face="Comic Sans MS" size=4 color="#000000">
<div class="text-center text-dark p-3" style="background-color: rgb( 218, 247, 166);">
    <div class="row">
    <div class="col-lg-2 col-md-6 col-sm-12">
      <center><img src="http://sntsedesolmx.com/img/LOGOINDEX.png">
        </center>
      </div>
    <div class="col-lg-6 col-md-6 col-sm-12 ">
      <center><img class="modalorg" src="http://sntsedesolmx.com/img/BIENESTAR1.png" <="" center="">
        </center>
      </div>
    </div>
    </div>
  </div>
      <center>
    <div>
<?php echo view('vNavbar');?>
  <h1 style="color:#6C1635">SISTEMA DE ESTÍMULO ECONÓMICO PARA EMPLEADOS DE BIENESTAR</h1>
</div > 
 
  <div class="container">
    <div class="row">

    </div>
  </div>

    <div class="container">
      
        <div class="col-md-auto">
          <div class="row justify-content-md-center">


    </div>
       <FONT SIZE="7" COLOR="#6C1635"> <h1 class="alert alert-primary" role="alert">REGISTRO ADMINISTRADOR</h1></FONT> <B><B>
          
            <form method="POST" action="../Home/insertarForm">
              <div class="mb-3 row">
              <div class="form-group">
              <label for="Nombre">Nombre completo:</label>
              <center> <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingresa tu nombre completo"> </center>
                </div>
                </div>
              <div class="mb-3 row">
              <div class="form-group">
              <label for="Usuario">Usuario:</label>
              <center><input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Ingresa tu usuario"></center>
                </div>
                </div>

                <div class="mb-3 row">
                <div class="form-group">
                <label for="Email">Email:</label>
                <center><input type="Email" class="form-control" id="Email" name="Email" placeholder="Ingresa tu correo"></center>  
                 </div>
                 </div>
                <div class="mb-3 row">
                <div class="form-group">
                  <label for="Password">Contraseña:</label>
                <center><input type="Password" class="form-control" id="Password"  name="Password" placeholder="Ingresa tu contraseña"></center> 
                </div>
                </div>
                <div class="mb-3 row">
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg">REGISTRAR</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

     <body>
   <center></center>
  <center><br><p>¿Ya tiene cuenta?</p><br></center>
   <center><a href = "ingresaradministrador.html"><FONT SIZE="2" COLOR="#D41348"><input type="button" name="ingresar" value="INGRESAR COMO ADMINISTRADR"></a></center> </FONT> <B><B>
  
   </center>
   </td>
</body>
<?php echo view('vfooters'); ?>
</html>
 <?php echo view('vfooter'); ?>  