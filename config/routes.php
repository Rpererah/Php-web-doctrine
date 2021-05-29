<?php

use Alura\Cursos\Controller\{Alterar, Exclusao, InserirCurso, ListarCursos, Login, Persistencia, RealizaLogin};

return $rotas=[
    "/inserir-curso"=> InserirCurso::class,
    "/listar-cursos"=> ListarCursos::class,
    "/salvar-curso" => Persistencia::class,
    "/excluir-curso"=> Exclusao::class,
    "/altera-curso" => Alterar::class,
    "/login"        => Login::class,
    "/realizaLogin"=>RealizaLogin::class
];
