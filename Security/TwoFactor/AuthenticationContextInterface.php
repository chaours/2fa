<?php

namespace Scheb\TwoFactorBundle\Security\TwoFactor;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

interface AuthenticationContextInterface
{
    /**
     * Return the security token.
     *
     * @return TokenInterface
     */
    public function getToken(): TokenInterface;

    /**
     * Return the user object.
     *
     * @return mixed
     */
    public function getUser();

    /**
     * Return the request.
     *
     * @return Request
     */
    public function getRequest(): Request;

    /**
     * Return the session.
     *
     * @return SessionInterface
     */
    public function getSession(): SessionInterface;

    /**
     * Return true when trusted device feature is enabled.
     *
     * @return bool
     */
    public function useTrustedOption(): bool;

    /**
     * Return the firewall name
     *
     * @return string
     */
    public function getFirewallName(): string;

    /**
     * Get authentication status.
     *
     * @return bool
     */
    public function isAuthenticated(): bool;

    /**
     * Set authentication status.
     *
     * @param bool $authenticated
     */
    public function setAuthenticated(bool $authenticated): void;
}
