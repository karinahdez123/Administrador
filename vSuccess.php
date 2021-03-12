<!DOCTYPE html>
<html>
<head>
	 <?php echo view('venlaces');?>
	<title>EXITO</title>
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
</head>
<body>
<?php echo view('vNavbar');?>


<div class="container">
	<div class="row justify-content-md-center">
		<div class="alert alert-success" role="alert">
			<p>El usuario se registro con éxito, su identificador es el : <?php echo $idRegistrado; ?></p>
		</div>
	</div>
</body>
 <?php echo view('vfooters');?>
</html>

 <?php echo view('vfooter');?>