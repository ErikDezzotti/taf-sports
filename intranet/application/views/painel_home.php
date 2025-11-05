<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>INTRANET - Futpress</title>
  
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="<?=base_url();?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="<?=base_url();?>assets/css/animate.css" rel="stylesheet">
    <?php if($pagina=="imagens") { echo '
    <link href="'.base_url().'assets/css/modulo_imagens.css" rel="stylesheet">
    <link rel="stylesheet" href="'.base_url().'upload/css/jquery.fileupload.css">
    '; } ?>
    <?php if($pagina=="financeiro") { echo '
    <link href="'.base_url().'assets/css/modulo_financeiro.css" rel="stylesheet">
    '; } ?>
    <?php if($pagina=="estatisticas") { echo '
    <link href="'.base_url().'assets/css/modulo_estatistica.css" rel="stylesheet">
    '; } ?>
</head>
<body>
	
	 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url();?>">TAF</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if($pagina=="geral") { echo ' class="active"';} ?>><a href="<?=base_url();?>painel/home">Geral</a></li>
            <li <?php if($pagina=="site") { echo ' class="active"';} ?>><a href="<?=base_url();?>painel/site">Site</a></li>

            
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li><a href="<?=base_url();?>logoff">Logoff</a></li>
          </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
