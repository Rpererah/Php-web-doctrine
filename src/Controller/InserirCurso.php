<?php


namespace Alura\Cursos\Controller;


use Alura\Cursos\Infra\EntityManagerCreator;

class InserirCurso extends ControllerHtml implements InterfaceControladorRequisicao
{


    public function processaRequisicao():void
    {
        echo $this->renderizaHtml('cursos/inserir-curso.php',['titulo'=>'inserir curso']);
    }
}