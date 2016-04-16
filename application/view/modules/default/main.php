<?php

namespace Blizzard\View\Modules;

require_once VIEW_PATH . 'View.php';

class Main extends \Blizzard\View\View
{

    public function paginaInicial($usuario = false)
    {
        if(!$usuario) { $this->display('error404.tpl'); }

        $usuario_html =
            array(
                'id' => '<p><bold>ID:</bold> ' . $usuario->id . '</p>',
                'nome' => '<p><bold>Nome:</bold> ' . $usuario->name . '</p>',
                'idade' => '<p><bold>Idade:</bold> ' . $usuario->age . '</p>'
                );

        $this->assign('usuario' , $usuario_html);
        $this->display('default/main.tpl');
    }

}