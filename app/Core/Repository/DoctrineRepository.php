<?php
/**
 * Created by PhpStorm.
 * User: luke
 * Date: 2018/10/29
 * Time: 22:04
 */

namespace App\Core\Repository;


use App\Core\Exception\EntityNotFoundException;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;

abstract class DoctrineRepository implements Find, Mutate
{
    protected $entityName;

    protected $entityManager;

    protected $entityRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->entityRepository = $entityManager->getRepository($this->entityName());
    }

    public function entityName()
    {
        return $this->entityName;
    }

    public function findById($id)
    {
        $entity = $this->entityRepository->find($id);
        if (!($entity instanceof Entity)) {
            throw new EntityNotFoundException(
                sprintf('Entity %s not found with ID: %s', $this->entityName, $id));
        }

        return $entity;
    }

    public function findByField($field, $value)
    {
        return $this->entityRepository->findBy([$field => $value]);
    }

    public function findOneByField($field, $value)
    {
        return $this->entityRepository->findOneBy([$field => $value]);
    }

    public function findAll()
    {
        return $this->entityRepository->findAll();
    }

    public function findByUuid($uuid)
    {
        $entity = $this->entityRepository->findOneBy([
            'uuid' => (string)$uuid
        ]);

        if (!($entity instanceof Entity))
        {
            throw new EntityNotFoundException(
                sprintf('Entity %s not found with UUID: %s', $this->entityName, $uuid));
        }
        return $entity;
    }

    public function add(Entity $entity)
    {
        $this->entityManager->persist($entity);
        return $entity;
    }

    public function contains(Entity $entity)
    {
        return $this->entityManager->contains($entity);
    }

    public function remove(Entity $entity)
    {
        if (!$this->entityManager->contains($entity))
        {
            return $entity;
        }

        $this->entityManager->remove($entity);
        $this->entityManager->flush($entity);

        return $entity;
    }


}
