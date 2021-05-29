<?php

use Alura\Cursos\Controller\{Alterar,
    Deslogar,
    Exclusao,
    InserirCurso,
    ListarCursos,
    Login,
    Persistencia,
    RealizaLogin};

return $rotas=[
    "/inserir-curso"=> InserirCurso::class,
    "/listar-cursos"=> ListarCursos::class,
    "/salvar-curso" => Persistencia::class,
    "/excluir-curso"=> Exclusao::class,
    "/altera-curso" => Alterar::class,
    "/login"        => Login::class,
    "/realizaLogin"=>RealizaLogin::class,
    "/deslogar"=>Deslogar::class
];
