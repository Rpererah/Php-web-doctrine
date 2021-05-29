<?php


namespace Alura\Cursos\Controller;


use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Infra\EntityManagerCreator;

class RealizaLogin implements InterfaceControladorRequisicao
{

    /**
     * @var \Doctrine\Persistence\ObjectRepository
     */
    private $repositoryUser;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositoryUser = $entityManager->getRepository(Usuario::class);
    }

    public function processaRequisicao(): void
    {
        $email=filter_input(INPUT_POST,'Email',FILTER_VALIDATE_EMAIL);
        if(is_null($email) || $email===false){
            echo "E-mail invalido";
            exit();

        }
        $senha=filter_input(INPUT_POST,'Senha',FILTER_SANITIZE_STRING);
        /**
         * @var Usuario $usuario
         */
        $usuario=$this->repositoryUser->findOneBy(['email'=>$email]);
        if(is_null($usuario) || !$usuario->senhaEstaCorreta($senha)){
            echo "Usuario ou senha incorreta";
            return;
        }
        $_SESSION['logado']=true;
        header('location:/listar-cursos');
    }
}
