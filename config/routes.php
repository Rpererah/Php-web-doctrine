<?php

use Alura\Cursos\Controller\Exclusao;
use Alura\Cursos\Controller\InserirCurso;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;

$rotas=[
    "/inserir-curso"=> InserirCurso::class,
    "/listar-cursos"=> ListarCursos::class,
    "/salvar-curso" => Persistencia::class,
    "/excluir-curso"=> Exclusao::class
];

return $rotas;