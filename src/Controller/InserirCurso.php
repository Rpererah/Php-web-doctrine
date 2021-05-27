<?php


namespace Alura\Cursos\Controller;


use Alura\Cursos\Infra\EntityManagerCreator;

class InserirCurso implements InterfaceControladorRequisicao
{


    public function processaRequisicao():void
    {
        $titulo="Inserir Curso";
        require __DIR__.'/../../view/cursos/inserir-curso.php';
    }
}