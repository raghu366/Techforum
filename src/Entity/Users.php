<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column (name="username", type="string", length=50)
     */
    private $username;
    /**
     * @ORM\Column (name="last_name", type="string", length=50)
     */


    private $email;
    /**
     * @ORM\Column(type="string", length=64)
     */

    private $password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirst_name()
    {
        return $this->first_name;
    }
    public function setFirst_name($first_name)
    {
        $this->first_name=$first_name;
    }
    public function getLast_name()
    {
        return $this->last_name;
    }
    public function setLast_name($last_name)
    {
        $this->last_name=$last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }
}
