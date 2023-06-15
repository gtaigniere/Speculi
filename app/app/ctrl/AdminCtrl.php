<?php


namespace App\Ctrl;


use App\Service\EtapeService;
use App\Service\MesureService;
use App\Service\QuantiteService;
use App\Service\RecetteService;
use App\Service\PaysService;
use App\Service\IngredientService;
use App\Service\UserService;
use App\Vo\AdminIndexVo;
use PDO;

class AdminCtrl extends Controller
{
    /**
     * @var RecetteService
     */
    private $recetteService;
    /**
     * @var PaysService
     */
    private $paysService;

    /**
     * @var IngredientService
     */
    private $ingredientService;

    /**
     * @var UserService
     */
    private $userService;

    /**
     * @var EtapeService;
     */
    private $etapeService;

    /**
     * @var MesureService;
     */
    private $mesureService;

    /**
     * @var QuantiteService;
     */
    private $quantiteService;

    public function __construct(PDO $db)
    {
        parent::__construct('admin');
        $this->recetteService = new RecetteService($db);
        $this->paysService = new PaysService($db);
        $this->ingredientService = new IngredientService($db);
        $this->userService = new UserService($db);
        $this->etapeService = new EtapeService($db);
        $this->mesureService = new MesureService($db);
        $this->quantiteService = new QuantiteService($db);
    }

    public function index()
    {
        $vo = new AdminIndexVo();
        $vo->setRecettes($this->recetteService->findAll());
        $vo->setPays($this->paysService->findAll());
        $vo->setIngredients($this->ingredientService->findAll());
        $vo->setUsers($this->userService->findAll());
        $vo->setEtapes($this->etapeService->findAll());
        $vo->setMesures($this->mesureService->findAll());
        $vo->setQuantites($this->quantiteService->findAll());
        $vo->setIndexActif(true);
        $this->render('admin.index', compact('vo'));
    }

}