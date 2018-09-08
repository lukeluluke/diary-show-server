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

/**
 * @ORM\Entity
 * @ORM\Table(name="ds_core_user")
 * Class User
 * @package App\Core\Entities
 */
class User
{
    use EntityBaseTrait;

    /**
     * @var $username
     * @ORM\Column(type="string")
     */
    private $username;

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
     * @var $password
     * @ORM\Column(name="password", type="string")
     */
    private $password;

    /**
     * @var $apiKey;
     * @ORM\Column(name="api_key", type="string")
     */
    private $apiKey;

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
     * @ORM\Column(name="last_login_at", type="datetime")
     */
    private $lastLoginAt;

}
