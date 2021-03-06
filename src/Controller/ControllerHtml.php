<?php


namespace Alura\Cursos\Controller;


abstract class ControllerHtml
{
    public function renderizaHtml(string $template,array $dados):string
    {
        extract($dados);
        ob_start();
        require __DIR__."./../../view/".$template;
        $html=ob_get_clean();
        return $html;
    }
}