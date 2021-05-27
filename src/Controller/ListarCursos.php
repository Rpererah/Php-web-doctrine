<?php


namespace Alura\Cursos\Controller;


use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos extends ControllerHtml implements InterfaceControladorRequisicao
{
    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }

    public function processaRequisicao():void
    {
        /**
         * @var Curso[] $cursos
         */
        $cursos = $this->repositorioDeCursos->findAll();
        $titulo="Listar Cursos";

        echo $this->renderizaHtml('cursos/listar-curso.php',['titulo'=>$titulo,'cursos'=>$cursos]);
    }
}