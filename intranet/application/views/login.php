<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GERENCIADOR | Login</title>

    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/login.css">

</head>

<body>

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>


                <h1 class="logo-name" style="font-size:79px; margin-left:-80px;">GERENCIADOR</h1>

            </div>
            <h3>Bem vindo ao Gerenciador</h3>
            <p>Efetue login para gerenciar as funções do site
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <form class="m-t" role="form" method="POST" action="<?=base_url();?>login">
                <div class="form-group">
                    <input type="text" class="form-control" name="user" placeholder="Login" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Senha" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

               
            </form>
            <p class="m-t"> <small>&copy; 2020</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?=base_url();?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>

</body>

</html>
