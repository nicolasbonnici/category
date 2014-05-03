<?php
namespace bundles\categorie\Controllers;

/**
 * Category HomeController
 *
 * A simple note and category app
 *
 * @author info
 */
class HomeController extends \Library\Core\Auth
{

    public function __preDispatch()
    {}

    public function __postDispatch()
    {}

    public function indexAction()
    {
        $this->oView->render($this->aView, 'category/index.tpl');
    }

    public function createAction()
    {
        $this->oView->render($this->aView, 'home/create.tpl');
    }

    public function readAction()
    {
        if (isset($this->aParams['idcategory']) && intval($this->aParams['idcategory']) > 0) {
            $oCategoryModel = new \bundles\category\Models\Categories(intval($this->aParams['idcategory']), $this->oUser);
            $oCategory = $oCategoryModel->getEntity();
            if (! is_null($oCategory) && $oCategory->isLoaded()) {
                $this->aView['oCategory'] = $oCategory;
            }
        }
        $this->oView->render($this->aView, 'home/read.tpl');
    }

    public function updateAction()
    {
        if (isset($this->aParams['idcategory']) && intval($this->aParams['idcategory']) > 0) {
            $oCategoryModel = new \bundles\category\Models\Category(intval($this->aParams['idcategory']), $this->oUser);
            $categoryo = $oCategoryModel->getEntity();
            if (! is_null($oCategory) && $oCategory->isLoaded()) {
                $this->aView['oCategory'] = $oCategory;
            }
        }
        $this->oView->render($this->aView, 'home/update.tpl');
    }

    public function deleteAction()
    {
        if (isset($this->aParams['pk']) && intval($this->aParams['pk']) > 0) {
            $this->aView['pk'] = $this->aParams['pk'];
        }
        $this->oView->render($this->aView, 'home/delete.tpl');
    }
}

