<?php
/**
 * Created by PhpStorm.
 * User: luke
 * Date: 2018/10/29
 * Time: 22:32
 */

namespace App\Core\Repository;


use Doctrine\ORM\Mapping\Entity;

interface Mutate
{
    /**
     * Add an entity
     * @param Entity $entity
     * @return mixed
     */
    public function add(Entity $entity);

    /**
     * Check if entity exist
     * @param Entity $entity
     * @return boolean
     */
    public function contains(Entity $entity);

    /**
     * Remove an entity
     * @param Entity $entity
     * @return mixed
     */
    public function remove(Entity $entity);
}
