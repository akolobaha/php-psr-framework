<?php

class RequestFactory
{
    public static function fromGlobals(array $query = null, array $body = null): Request
    {
        return (new \Framework\Http\Request())
    }
}