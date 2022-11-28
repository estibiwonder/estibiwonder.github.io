<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM PLANs";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACT TABLA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="https://scontent.fpbc1-2.fna.fbcdn.net/v/t1.6435-9/178097450_104466098457082_2302267790147368013_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGgnFZbh02tX5S6v7XGfViDLOUxUPufkj0s5TFQ-5-SPf8L6lrA85l12VJyiu47b3WOrfm6g7SZ2sdSW7gCpK_A&_nc_ohc=vsrSpQiBTi4AX-iwvH9&_nc_ht=scontent.fpbc1-2.fna&oh=00_AT-OvBuIKyMtGVlN9GSy_4s2KNNzvgvppAseutAHQk0ZtQ&oe=62B4486E">         
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/style-responsive.css" />
    </head>
    <body>
        <section class="footer">
    
      <div class="margin">
      
        <div class="menu-footer">
        
        <!-- Barra Final -->

        <a href="index.html">Página Principal</a>
        <a href="">Política de Privacidad</a>
        <a href="">Ana</a>
        <a href="https://twitter.com/estibi_bee?t=nsyExU8WEcGRPlo24B_kQw&s=09">Estibi</a>

        
        </div>
        
          <div class="copyright">&copy; 2022. Todos los Derechos Reservados.</div>        

      </div>
    
    
    </section>
    <h1><big><br></big></h1>
 <center><div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                         <th>E-MAIL</th>
                                         <th>USUARIO</th>
                                         <th>PLAN</th>
                                         <th></th>
                                         <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                              while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                 <th><?php  echo $row['CORREO']?></th>
                                                 <th><?php  echo $row['USUARIO']?></th>
                                                 <th><?php  echo $row['PLAN']?></th>    
                                                 <th><a href="actualizar.php?id=<?php echo $row['CORREO'] ?>" class="btn btn-info">Editar</a></th>
                                                 <th><a href="delete.php?id=<?php echo $row['CORREO'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
 </div>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> <!-- jQuery -->
    <script src="js/jquery.parallax.js"></script> <!-- jQuery Parallax -->
    <script src="js/jquery.nicescroll.js"></script> <!-- jQuery NiceScroll -->
    <script src="js/jquery.sticky.js"></script> <!-- jQuery Stick Menu -->
    <script src="js/JFunciones.js"></script> <!-- jQuery Portfolio -->
    <script src="js/script.js"></script> <!-- All script -->

    </body>
</html>                        