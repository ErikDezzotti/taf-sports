<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends CI_Controller
{

    
    public function index()
    {
       if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
        $dados["pagina"]="site";
        $dados["subpagina"]="home";
       $this->load->view('painel_home',$dados);
       $this->load->view('site_home');
    } else {
            redirect("/painel/site/negado");
        }
    }
    

   public function atletas()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('atletas');
        $xcrud->table_name('Atletas', 'Administração de atletas do site.');
        $xcrud->columns('imagem,apelido,nascimento,clube_atual,status'); // columns in grid
        $xcrud->fields('url',true); // fields in details
        $xcrud->before_insert('gera_urlAtleta');
        $xcrud->before_update('gera_urlAtleta');
        $xcrud->label("clube_atual","Clube Atual");
        $xcrud->label("posicao","Posição");
        $xcrud->label("historico","Histórico");
        $xcrud->label("empresa","Empresa Associada");
        $xcrud->label("linkFace","Facebook Oficial");
        $xcrud->label("linkInsta","Instagram Oficial");
        $xcrud->label("linkTwitter","Twitter Oficial");
        $xcrud->label("imagemInterna","Imagem Interna");
        $xcrud->label("assessor","Assessor Responsável");
        $xcrud->validation_required('nome,apelido,imagem,posicao,clube_atual');
        $xcrud->change_type('tipo','select','Masculino','Masculino, Feminino');
        $xcrud->change_type('categoria','select','Profissional','Profissional, Base');
        $xcrud->change_type('status','select','Ativo','Ativo,Inativo');
        $xcrud->order_by('apelido');
         $xcrud->change_type('imagem', 'image', false, array(
        'path' => '../../../imagens/atletas',
       ));
         $xcrud->change_type('imagemInterna', 'image', false, array(
        'path' => '../../../imagens/atletas',
       ));
        $xcrud->relation('clube_atual','site_clubes','id','nome');
        $xcrud->relation('empresa','empresas','id','nome');
        $xcrud->relation('assessor','usuarios','id','nome');
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="atletas";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }

   public function clubes()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('clubes');
        $xcrud->table_name('Clubes', 'Administração de clubes do site.');
        $xcrud->columns('logo,nome,status'); // columns in grid
        $xcrud->change_type('status','select','Ativo','Ativo,Inativo');
         $xcrud->change_type('logo', 'image', false, array(
        'path' => '../../../imagens/clubes',
       ));
         $xcrud->order_by('nome');
         $xcrud->validation_required('logo,nome');
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="clubes";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }

    public function empresas()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('empresas');
        $xcrud->table_name('Empresas', 'Administração das empresas do site.');
        $xcrud->columns('logo,nome,status'); // columns in grid
        $xcrud->change_type('status','select','Ativo','Ativo,Inativo');
         $xcrud->change_type('logo', 'image', false, array(
        'path' => '../../../imagens/empresas',
       ));
         $xcrud->validation_required('logo,nome,site');
         $xcrud->order_by('nome');
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="empresas";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }

    public function tecnicos()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('tecnicos');
        $xcrud->table_name('Técnicos', 'Administração de técnicos do site.');
       
        $xcrud->change_type('status','select','Ativo','Ativo,Inativo');
         $xcrud->change_type('imagem', 'image', false, array(
        'path' => '../../../imagens/tecnicos',
       ));
        $xcrud->relation('clubeAtual','site_clubes','id','nome');
        $xcrud->label("clubeAtual","Clube Atual");
         $xcrud->columns('imagem,nome,clubeAtual,status'); // columns in grid
        $xcrud->fields('url',true); // fields in details
        $xcrud->order_by('nome');
        $xcrud->label("linkFace","Facebook Oficial");
        $xcrud->label("linkInsta","Instagram Oficial");
        $xcrud->label("linkTwitter","Twitter Oficial");
        $xcrud->validation_required('nome,imagem,clubeAtual');
        $xcrud->relation('assessor','usuarios','id','nome');
        $xcrud->before_insert('gera_urlTecnico');
        $xcrud->before_update('gera_urlTecnico');
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="tecnicos";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }


    public function profissionais()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('profissionais');
        $xcrud->table_name('Profissionais', 'Administração de profissionais do site.');
       
        $xcrud->change_type('status','select','Ativo','Ativo,Inativo');
         $xcrud->change_type('imagem', 'image', false, array(
        'path' => '../../../imagens/profissionais',
       ));
         $xcrud->columns('imagem,nome,funcao,status'); // columns in grid
        $xcrud->fields('url',true); // fields in details
        $xcrud->order_by('nome');
        $xcrud->label("funcao","Função");
        $xcrud->label("linkFace","Facebook Oficial");
        $xcrud->label("linkInsta","Instagram Oficial");
        $xcrud->label("linkTwitter","Twitter Oficial");
        $xcrud->before_insert('gera_urlProfissional');
        $xcrud->before_update('gera_urlProfissional');
        $xcrud->validation_required('nome,imagem,funcao');
        $xcrud->relation('assessor','usuarios','id','nome');
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="profissionais";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }

    
     public function paginas()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('site_paginas');
        $xcrud->table_name('Páginas', 'Páginas no site.');
		$xcrud->unset_add();
		$xcrud->unset_remove();
        $xcrud->columns('pagina,titulo'); // columns in grid
        $xcrud->fields('pagina',true); // fields in details
		$xcrud->label("conteudo","Conteúdo");
        $xcrud->label("pagina","Página");
        $data["pagina"]="site";
        $data["subpagina"]="paginas";
        $data['content'] = $xcrud->render();
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }




    public function banners()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('site_banners');
        $xcrud->table_name('Banners', 'Cadastro de Banners.');
        $xcrud->change_type('status','select','Ativo','Ativo,Inativo');
        $xcrud->change_type('imagem', 'image', false, array(
        'path' => '../../../imagens/banners',
       ));
         $xcrud->change_type('imagemMob', 'image', false, array(
        'path' => '../../../imagens/banners',
       ));
         $xcrud->label("imagemMob","Imagem Mobile");
         $xcrud->validation_required('imagem,imagemMob');
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="banners";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }

    public function subbanners()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('site_subbanners');
        $xcrud->table_name('Sub Banners', 'Cadastro de Sub Banners.');
        $xcrud->change_type('status','select','Ativo','Ativo,Inativo');
        $xcrud->change_type('imagem', 'image', false, array(
        'path' => '../../../imagens/banners',
       ));
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="banners";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }


    public function cases()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('site_cases');
        $xcrud->table_name('Cases', 'Cadastro de Cases.');
        $xcrud->change_type('imagemExterna', 'image', false, array(
        'path' => '../../../imagens/cases',
       ));
        $xcrud->change_type('imagemInterna', 'image', false, array(
        'path' => '../../../imagens/cases',
       ));
        $xcrud->columns('imagemExterna,nome,descricao'); // columns in grid
        $xcrud->fields('url',true); // fields in details
         $xcrud->label("descricao","Descrição Curta");
        $xcrud->label("imagemExterna","Imagem Externa");
        $xcrud->label("imagemInterna","Imagem Interna");
        $xcrud->label("conteudo","Conteúdo");
        $xcrud->validation_required('imagemExterna,nome,descricao');
        $xcrud->before_insert('gera_urlCase');
        $xcrud->before_update('gera_urlCase');
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="cases";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }

     public function depoimentos()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('site_depoimentos');
        $xcrud->table_name('Depoimentos', 'Administração dos depoimentos do site.');
        $xcrud->columns('imagem,nome,ordem'); // columns in grid
        $xcrud->change_type('status','select','Ativo','Ativo,Inativo');
         $xcrud->change_type('imagem', 'image', false, array(
        'path' => '../../../imagens/depoimentos',
       ));
         $xcrud->order_by('ordem');
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="depoimentos";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }


    public function historico()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('atletas_clubes');
        $xcrud->table_name('Histórico', 'Cadastro de histórico dos jogadores.');
       $xcrud->relation('id_jogador','atletas','id','apelido');
        $xcrud->label("id_jogador","Jogador");
        $xcrud->order_by('id_jogador');
        $xcrud->validation_required('nome,imagem,depoimento');
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="historico";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }

    public function listaclubes()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('site_clubes');
        $xcrud->table_name('Clubes', 'Cadastro de Clubes de Futebol.');
        $xcrud->change_type('escudo', 'image', false, array(
        'path' => '../../../imagens/clubes',
       ));
        $xcrud->validation_required('nome,escudo');
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="listaclubes";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }


    public function estrutura()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('site_estrutura');
        $xcrud->table_name('Estrutura', 'Cadastro de fotos da aba Estrutura.');
        $xcrud->change_type('foto', 'image', false, array(
        'path' => '../../../imagens/estrutura',
       ));
        $xcrud->validation_required('foto');
         $xcrud->columns('foto'); // columns in grid
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="estrutura";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }

     public function usuarios()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('usuarios');
        $xcrud->table_name('Equipe Futpress', 'Administração de Usuários.');
        $xcrud->change_type('imagem', 'image', false, array(
        'path' => '../../../imagens/usuarios',
       ));
        $xcrud->label("funcao","Função");
        $xcrud->label("descricao","Descrição");
        $xcrud->label("user","Usuário");
        $xcrud->label("pass","Senha");
        $xcrud->label("linkFace","Link Facebook");
        $xcrud->label("linkInsta","Link Instagram");
$xcrud->change_type('status','select','Ativo','Ativo,Inativo');
          $xcrud->columns('imagem,nome,funcao,status'); // columns in grid
          $xcrud->fields('ip',true); // fields in details
          $xcrud->validation_required('nome,funcao,descricao,imagem,usuario');

        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="usuarios";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }

    public function portfolio()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('site_portfolio');
        $xcrud->table_name('Portfolio', 'Cadastro de portfolios do site.');
        $xcrud->change_type('imagem', 'image', false, array(
        'path' => '../../../imagens/portfolio',
       ));
        $xcrud->change_type('categoria','select','Design','Design,Sites');
        $xcrud->validation_required('categoria,imagem');
         $xcrud->columns('categoria,imagem'); // columns in grid
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="portfolio";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }


    public function releases()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('atletas_noticias');
        $xcrud->table_name('Releases', 'Cadastro de Releases.');
        $xcrud->change_type('imagem', 'image', false, array(
        'path' => '../../../imagens/releases',
       ));
        $xcrud->change_type('status','select','Ativo','Ativo,Inativo');
        $xcrud->relation('id_jogador','atletas','id','apelido');
        $xcrud->relation('id_jogador2','atletas','id','apelido');
        $xcrud->relation('id_tecnico','tecnicos','id','nome');
        $xcrud->relation('id_clube','clubes','id','nome');
        $xcrud->relation('id_profissional','profissionais','id','nome');
        $xcrud->label("id_jogador2","Jogador 2 Relacionado");
        $xcrud->label("id_tecnico","Técnico Relacionado");
        $xcrud->label("id_clube","Clube Relacionado");
        $xcrud->label("id_profissional","Profissional Relacionado");
        $xcrud->label("id_jogador","Jogador Relacionado");
        $xcrud->label("conteudo","Conteúdo");
        $xcrud->fields('url',true); // fields in details
        $xcrud->label("conteudo","Conteúdo");
        $xcrud->columns('imagem,data,titulo'); // columns in grid
        $xcrud->fields('url',true); // fields in details
        $xcrud->order_by("data","DESC");
        $xcrud->before_insert('gera_url');
        $xcrud->before_update('gera_url');
        $xcrud->validation_required('titulo,data,imagem');
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="releases";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }


         public function config()
    {
        
        if($this->session->userdata('ip')!=""&&$this->session->userdata('user')!="danilo") {
            
        $xcrud = xcrud_get_instance();
        $xcrud->table('site_config');
        $xcrud->table_name('Configurações', 'Informações gerais do site.');
        $xcrud->unset_add();
        $xcrud->unset_remove();
        $xcrud->columns('linkFace,linkInsta,linkTwitter'); // columns in grid
        $xcrud->label("linkFace","Facebook Oficial");
        $xcrud->label("linkInsta","Instagram Oficial");
        $xcrud->label("linkTwitter","Twitter Oficial");
        $xcrud->validation_required('linkFace,linkInsta,linkTwitter,telefone,email');
        $data['content'] = $xcrud->render();
        $data["pagina"]="site";
        $data["subpagina"]="config";
        $this->load->view('painel_home', $data);
        $this->load->view('xcrud', $data);
            } else {
            redirect("/painel/site/negado");
        }
    }

    public function negado()
    {
       $dados["pagina"]="site";
        $this->load->view('painel_home',$dados);
        $this->load->view('modulo_site_negado',$dados);
        
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
