<?
require_once __DIR__ .  '/../core/Controller.php';
class HomeController extends Controller{
    public function index(){
        $nome = 'carolina';
        $this->view('login/login', ['usuario' => $nome]);
    }
    //   public function esqueciSenha(){
    //     $this->view('login/alterar_senha');
    // }
}