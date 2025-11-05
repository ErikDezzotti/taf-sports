<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

//INICIAL
$route['default_controller'] = "home/login";

$route['painel/home'] = "home/painel";

//ADM SITE
$route['painel/site'] = "site";
$route['site/clientes/atletas'] = "site/atletas";
$route['site/clientes/clubes'] = "site/clubes";
$route['site/clientes/empresas'] = "site/empresas";
$route['site/clientes/tecnicos'] = "site/tecnicos";
$route['site/clientes/profissionais'] = "site/profissionais";
$route['site/conteudo/banners'] = "site/banners";
$route['site/conteudo/subbanners'] = "site/subbanners";
$route['site/conteudo/cases'] = "site/cases";
$route['site/conteudo/depoimentos'] = "site/depoimentos";
$route['site/conteudo/clubes'] = "site/listaclubes";
$route['site/conteudo/historico'] = "site/historico";
$route['site/conteudo/estrutura'] = "site/estrutura";
$route['site/conteudo/paginas'] = "site/paginas";
$route['site/conteudo/portfolio'] = "site/portfolio";
$route['site/conteudo/releases'] = "site/releases";
$route['site/usuarios'] = "site/usuarios";
$route['site/configuracoes'] = "site/config";
$route['painel/site/negado'] = "site/negado";



//AÇÕES DE LOGIN
$route['login'] = "login";
$route['logoff'] = "login/logoff";

//404
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */