<?php


namespace App\Ctrl;


use App\Service\RecetteService;
use App\Entity\Recette;
use PDO;

class RecetteCtrl extends Controller
{
    /**
     * @var RecetteService
     */
    private $recetteService;

    public function __construct(PDO $db)
    {
        parent::__construct('template');
        $this->recetteService = new RecetteService($db);
    }

    public function index()
    {
        $images = [];
        $this->render('recette.index', compact('images'));
    }

    public function show($id)
    {
        $recette = $this->recetteService->findOne($id);
        $this->render('recette.show', compact('recette'));
    }

    public function add(Recette $recette)
    {

    }

    public function delete($id)
    {

    }

    public function update(Recette $recette)
    {

    }

    public function list()
    {
        $recettes = $this->recetteService->findAll();
        $this->render('recette.list', compact('recettes'));
    }

}