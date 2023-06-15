<?php


namespace App\Ctrl;


class Controller
{
    /**
     * @var string
     */
    private $template;

    /**
     * Controller constructor.
     * @param string $template
     */
    public function __construct(string $template)
    {
        $this->template = $template;
    }

    /**
     * Permet d'envoyer à la vue $view les données passées en paramètres
     * @param string $view Correspond au nom de la vue à appeler formatée de la form "module.nomDeLaVue"
     * @param array $attributes Correspond à tous les paramètres passées sous forme de tableau "clef=>valeur" de façon à ce qu'ils soient retrouvés dans la vue "$clef = valeur"
     */
    public function render(string $view, $attributes = [])
    {
        $keys = ['key1' => 'valeur1', 'key2' => 'valeur2','key3' => 'valeur3'];
        $keys['key4'] = 'valeur4';
        $key4;
        $key1 = '5';
        extract($keys); // => $key1 = 'valeur1';

        ob_start();
        extract($attributes);
        // $view = 'recette.show'; => view/recette/show.php
        require dirname(__DIR__) . '/view/' . str_replace('.', '/', $view) . '.php';
        $content = ob_get_clean();
        require dirname(__DIR__) . '/view/template/' . $this->template . '.php';

        /*
        $attributes = compact('recette', 'recettes'); // ['recette' => 'test', 'recettes' => 'listetest']
        extract($attributes); // $recette = 'test'; $recettes = 'listetest';
        */
    }

}