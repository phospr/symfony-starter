<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Phospr\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @author Tom Haskins-Vaughan <tom@tomhv.uk>
 * @since  2.8.0
 *
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * id
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  2.8.0
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}
