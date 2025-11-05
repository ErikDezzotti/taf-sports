<div class="espacoTopo">
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1 style="color:white;"><strong>Departamento Financeiro</strong></h1>
      <p>&nbsp;</p>
    </div>
  </div>

  <div class="row">
  	<div class="col-md-3">
<?php
$this->load->view("inc_financeiro_menu");
?>
  	</div>
  	<div class="col-md-9 bgbranco">
  		<?php echo $content; ?>
  	</div>
  </div>

</div>
</div>

<?php
$this->load->view("inc_rodape");
?>
