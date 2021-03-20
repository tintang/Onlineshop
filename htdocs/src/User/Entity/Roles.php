<?php

namespace App\User\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Roles
 * @package App\User\Entity
 * @ORM\Entity()
 */
class Roles
{

    public const ROLE_SUPER_ADMIN = 'super_admin';

    public const ROLE_ADMIN = 'admin';

    /**
     * @var int
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private ?int $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private string $roleName;

    public function __construct(string $roleName)
    {
        $this->roleName = $roleName;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getRoleName(): string
    {
        return $this->roleName;
    }

    public function setRoleName(string $roleName): Roles
    {
        $this->roleName = $roleName;
        return $this;
    }

    public static function getUserRoles()
    {
        return [
            self::ROLE_ADMIN,
            self::ROLE_SUPER_ADMIN,
        ];
    }
}