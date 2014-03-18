<?php

namespace bundles\category\Controllers;

/**
 * Description of Category HomeController
 *
 * @author info
 */
class HomeController extends \Library\Core\Auth {

    public function __preDispatch() {}

    public function __postDispatch() {}

    public function indexAction()
    {
        $this->render('category/index.tpl');
    }

    public function createAction()
    {
        $this->render('category/create.tpl');
    }

    public function readAction()
    {
        if (isset($this->_params['idcategory']) && intval($this->_params['idcategory']) > 0) {
               $oCategoryModel = new \bundles\backend\Models\Category(intval($this->_params['idcategory']), $this->oUser);
               $oCategory = $oCategoryModel->read();
            if (! is_null($oCategory) && $oCategory->isLoaded()) {
                $this->_view['oCategory'] = $oCategory;
            }

        }
        $this->render('category/read.tpl');
    }

    public function updateAction()
    {
        if (isset($this->_params['idcategory']) && intval($this->_params['idcategory']) > 0) {
               $oCategoryModel = new \bundles\backend\Models\Category(intval($this->_params['idcategory']), $this->oUser);
            $oCategory = $oCategoryModel->getEntity();
            if (! is_null($oCategory) && $oCategory->isLoaded()) {
                $this->_view['oCategory'] = $oCategory;
            }

        }
        $this->render('category/update.tpl');
    }

    public function deleteAction()
    {
        if (isset($this->_params['pk']) && intval($this->_params['pk']) > 0) {
            $this->_view['pk'] = $this->_params['pk'];
        }
        $this->render('category/delete.tpl');
    }

}

class CategoryControllerException extends \Exception {}
?>
