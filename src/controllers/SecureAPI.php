<?php


namespace myapp\controllers;


class SecureAPI extends \Micro\SecureApiController
{

    /**
     * @inheritDoc
     */
    protected function validateToken($user, $token):bool
    {
        // TODO: Implement validateToken() method.
        return ($token=="b80073b8f2bad6f85e6cce8c98f59d6cd29d3cee9127d4264fbadfbb036e485a");

    }

    protected function loadSession()
    {
        // TODO: Implement loadSession() method.
    }
}