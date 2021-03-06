<?php

namespace App\Security;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;

class WebServiceUser implements UserInterface, EquatableInterface
{

    private $roles = [];

    private $jwt;

    public function __construct($jwt, array $roles)
    {
        $this->jwt = $jwt;
        $this->roles = $roles;
        
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername()
    {
        return isset($this->jwt["email"]) ? $this->jwt["email"] : $this->jwt["sub"];
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword()
    {
        // not needed for apps that do not check user passwords
        return null;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed for apps that do not check user passwords
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isEqualTo(UserInterface $user) {
        if (!$user instanceof WebServiceUser) {
            return false;
        }
        if ($this->getUsername() !== $user->getUsername()) {
            return false;
        }

        return true;
    }
}
