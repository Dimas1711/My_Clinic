<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Login</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="login.css">
   



</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Klinik Pratama </h2>
                <h2> Login </h2>
            </div>
        </div>
         <div class="row ">

                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>
                            </div>
                            <div class="panel-body">
                                <form role="form" method="get" action="plogin.php">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Your Username " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="pass" class="form-control"  placeholder="Your Password" />
                                        </div>

                                    <input type="submit" name="login" value="Login Now" class="btn btn-primary">
                                    <?php 
	                                    if(isset($_GET['pesan'])){
                                        if($_GET['pesan'] == "gagal"){
                                            echo "Login gagal! username dan password salah!";
                                        }else if($_GET['pesan'] == "logout"){
                                        echo "Anda telah berhasil logout";
                                    }
                                        /*  else if($_GET['pesan'] == "belum_login"){
                                            echo "Anda harus login untuk mengakses halaman admin";
                                        } */
                                    }
                                    ?>

                                    <hr />

                                    </form>
                            </div>

                        </div>
                    </div>


        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

    <style> 
    body {
        background-image: url("back.jpg");
        height:100%;
        padding: 32px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
   </style> 

</body>
</html>
