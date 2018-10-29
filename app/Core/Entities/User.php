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

/**
 * @ORM\Entity
 * @ORM\Table(name="ds_core_user")
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
     * @ORM\Column(name="dob", type="datetime")
     */
    private $dob;

    /**
     * @var $gender
     * @ORM\Column(name="gender", type="smallint")
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
     * @ORM\Column(name="last_login_at", type="datetime")
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
}
