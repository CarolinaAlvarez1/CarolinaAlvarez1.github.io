<?
require_once __DIR__ .  '/../core/Controller.php';
class LivroController extends Controller{
    public function index(){
        $this->view('livro/livro');
    }
    public function emprestimos(){
        $this->view('livro/emprestimos/emprestimos');
    }   
}