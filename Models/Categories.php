<?php
namespace bundles\category\Models;

class Categories extends \Library\Core\Crud
{

    /**
     * Instance constructor overide
     */
    public function __construct($iPrimaryKey = null, \app\Entities\User $oUser)
    {
        assert('is_null($iPrimaryKey) || intval($iPrimaryKey) > 0');
        if (! $oUser->isLoaded()) {
            throw new TodoModelException('Todo need a valid user instance, no user provided.');
        } elseif (! $oUser instanceof \app\Entities\User || ! $oUser->isLoaded()) {
            throw new TodoModelException('Todo need a valid user instance, no user provided.');
        } else {
            parent::__construct('Todo', $iPrimaryKey, $oUser);
        }
    }

    /**
     * Retrieve all childs categories for a given categories scope
     *
     * @param integer $aCategoriesId
     * @return \app\Entities\Collection\CategoryCollection
     */
    public function get(array $aCategorieId = array())
    {
        try {
            $oCategories = new \app\Entities\Collection\CategoryCollection();
            $oCategories->loadByParameters(
                array(
                    'category_idcategory' => 1
                )
            );
        } catch (\Library\Core\EntityException $oEntityException) {}
        return $oCategories;
    }
}

class TodoModelException extends \Exception
{
}
