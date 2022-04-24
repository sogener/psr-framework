<?php

namespace Framework\Http;

class RequestFactory implements Factory
{
    public static function createRequest(?array $query = null, ?array $body = null): Request
    {
        return (new Request())
            ->setQueryParams($query ?? $_GET)
            ->setParsedBody($body ?? $_POST);
    }
}