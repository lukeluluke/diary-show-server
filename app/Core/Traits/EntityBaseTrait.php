<?php
/**
 * Created by PhpStorm.
 * User: luke
 * Date: 2018/9/8
 * Time: 17:26
 */

namespace App\Core\Traits;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;

trait EntityBaseTrait
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="bigint", nullable=false)
     */
    private $id;

    /**
     * @var Uuid $uuid
     * @ORM\Column(name="uuid", type="string", unique=true)
     */
    private $uuid;

    /**
     * @var \DateTime $createdAt
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime $updatedAt
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @var int $createdBy
     * @ORM\Column(name="created_by", type="bigint")
     */
    private $createdBy;

    /**
     * @var int $modifiedBy
     * @ORM\Column(name="modified_by", type="bigint")
     */
    private $modifiedBy;

    /**
     * @var int $deleted
     * @ORM\Column(name="deleted", type="smallint")
     */
    private $deleted;

    /**
     * @var int $archived
     * @ORM\Column(name="archived", type="smallint")
     */
    private $archived;


    /**
     * Get id of an entity
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get uuid of an entity
     * @return Uuid
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    public function setUuid(Uuid $uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * Get created_at of an entity
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set created_at
     * @param \DateTime $createdAt
     * @return $this
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Get created at of an entity
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set created at of an entity
     * @param \DateTime $updatedAt
     * @return $this
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * Get createdBy of an entity
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set created by of an entity
     * @param $createdBy
     * @return mixed
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * Get modified by of an entity
     * @return mixed
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * Set modified by of an entity
     * @param $modifiedBy
     * @return int
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;
        return $this->modifiedBy;
    }

    /**
     * Get is deleted of an entity
     * @return int
     */
    public function getDeleted() {
        return $this->deleted;
    }

    /**
     * Set is deleted of an entity
     * @param $deleted
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * Get is archived of an entity
     * @return int
     */
    public function getArchived() {
        return $this->archived;
    }

    /**
     * Set is archived of an entity
     * @param $archived
     * @return $this
     */
    public function setArchived($archived) {
        $this->archived = $archived;
        return $this;
    }
}
