<?php


namespace Alura\Cursos\Controller;


class Login extends ControllerHtml implements InterfaceControladorRequisicao
{

    public function processaRequisicao(): void
    {
        echo $this->renderizaHtml("login/formulario.php",[
            'titulo'=>'Login'
        ]);
    }
}