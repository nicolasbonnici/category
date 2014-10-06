<?php

namespace bundles\category\Entities;

/**
 * \app\Entity\User Category Entity
 *
 * @see \bundles\user\Entities\User
 * @author infradmin
 */
class Category extends \Library\Core\Entity {

    const ENTITY = 'Category';
    const TABLE_NAME = 'category';
    const PRIMARY_KEY = 'idcategory';

    /**
     * Object caching duration in seconds
     * @var integer
     */
    protected $iCacheDuration = 120;
    protected $bIsSearchable = true;
    protected $aLinkedEntities;
}
