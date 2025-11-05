<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            
            <li <?php if($subpagina=="home") { echo "class='active'";} ?>>
                <a href="<?=base_url();?>painel/site"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a> </li>
                <hr>
                <li><a href="#" style="color:orange;">Clientes</a></li>
                <li <?php if($subpagina=="atletas") { echo "class='active'";} ?>>
                    <a href="<?=base_url();?>site/atletas" ><i class="fa fa-user"></i> <span class="nav-label">Atletas</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($subpagina=="listaclubes") { echo "class='active'";} ?>><a href="<?=base_url();?>site/conteudo/clubes">Clubes</a></li>
                        
                    </ul>
                </li>
               
                <hr>
                <li><a href="#" style="color:orange;">Conteúdo</a></li>
                <li>
                    
                   <li <?php if($subpagina=="banners") { echo "class='active'";} ?>>
                        <a href="<?=base_url();?>site/conteudo/banners"><i class="fa fa-futbol-o"></i> <span class="nav-label">Banners</span></a>
                    </li>
                       
                            
                            <li <?php if($subpagina=="paginas") { echo "class='active'";} ?>>
                                <a href="<?=base_url();?>site/conteudo/paginas"><i class="fa fa-file-code-o"></i> <span class="nav-label">Páginas</span></a>
                            </li>
                        
                            
                            <hr>
                            <li <?php if($subpagina=="config") { echo "class='active'";} ?>>
                                <a href="<?=base_url();?>site/configuracoes"><i class="fa fa-gear"></i> <span class="nav-label">Configurações</span></a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>