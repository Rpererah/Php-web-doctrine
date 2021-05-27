<?php


namespace Alura\Cursos\Controller;


use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Alterar extends ControllerHtml implements InterfaceControladorRequisicao
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $repositoryCursos;

    public function __construct()
{
    $entityManager=(new EntityManagerCreator())->getEntityManager();
    $this->repositoryCursos=$entityManager->getRepository(Curso::class);
}

    public function processaRequisicao(): void
    {
        $id=filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
        if(is_null($id) || $id===false){
            header('location:/listar-cursos');
            return;
        }
        $curso=$this->repositoryCursos->find($id);
        $titulo=isset($curso) ? "Altera curso ".$curso->getDescricao() : header('location:/listar-cursos');

        echo $this->renderizaHtml('cursos/inserir-curso.php',['titulo'=>$titulo,'curso'=>$curso]);

    }
}