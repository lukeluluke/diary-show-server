<?php
/**
 * Created by PhpStorm.
 * User: luke
 * Date: 2018/10/29
 * Time: 22:14
 */

namespace App\Core\Repository;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\Entity;

interface Find
{
    /**
     * Find entity by primary key
     * @param $id
     * @return Entity|null
     */
    public function findById($id);

    /**
     * Find entity by filed and value
     * @param $field
     * @param $value
     * @return ArrayCollection
     */
    public function findByField($field, $value);

    /**
     * @param $field
     * @param $value
     * @return Entity|null
     */
    public function findOneByField($field, $value);

    /**
     * Find all entities
     * @return ArrayCollection
     */
    public function findAll();

    /**
     * Find entity by uuid
     * @param $uuid
     * @return Entity|null
     */
    public function findByUuid($uuid);

}
