<?php

namespace Dog\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Msi\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}
