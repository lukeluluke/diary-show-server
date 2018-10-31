<?php
/**
 * Created by PhpStorm.
 * User: luke
 * Date: 2018/9/8
 * Time: 17:39
 */

namespace App\Core\Entities;

use App\Core\Traits\EntityBaseTrait;
use Doctrine\ORM\Mapping AS ORM;
use Illuminate\Contracts\Auth\Authenticatable;
use Ramsey\Uuid\Uuid;

/**
 * @ORM\Entity
 * @ORM\Table(name="ds_core_user")
 * @ORM\HasLifecycleCallbacks
 * Class User
 * @package App\Core\Entities
 */
class User implements Authenticatable
{
    use EntityBaseTrait;
    use \LaravelDoctrine\ORM\Auth\Authenticatable;

    /**
     * @var $username
     * @ORM\Column(name="username",type="string")
     */
    protected $username;

    /**
     * @var $firstName
     * @ORM\Column(name="first_name",type="string")
     */
    private $firstName;

    /**
     * @var $lastName
     * @ORM\Column(name="last_name", type="string")
     */
    private $lastName;


    /**
     * @var $apiKey;
     * @ORM\Column(name="api_key", type="string")
     */
    private $apiKey;

    /**
     * @var \DateTime $dob
     * @ORM\Column(name="dob", type="datetime", nullable=true)
     */
    private $dob;

    /**
     * @var $gender
     * @ORM\Column(name="gender", type="smallint", nullable=true)
     */
    private $gender;

    /**
     * @var $email
     * @ORM\Column(name="email", type="string")
     */
    private $email;

    /**
     * @var $type
     * @ORM\Column(name="type", type="smallint")
     */
    private $type;

    /**
     * @var \DateTime $lastLoginAt
     * @ORM\Column(name="last_login_at", type="datetime", nullable=true)
     */
    private $lastLoginAt;

    /**
     * Overwrite doctrine authentication identifier
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'username';
    }

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getType()
    {
        $this->type;
    }
}
