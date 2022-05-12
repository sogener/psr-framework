<?php

namespace Framework\Http;

class RequestFactory implements Factory
{
    /**
     * Создание request из входных данных
     *
     * @param array|null $query
     * @param array|null $body
     * @return Request
     */
    public static function createRequest(?array $query = null, ?array $body = null): Request
    {
        return (new Request())
            ->setQueryParams($query ?? $_GET)
            ->setParsedBody($body ?? $_POST);
    }

    /**
     * Создание request из глобальных переменных
     *
     * @return Request
     */
    public static function fromGlobals(): Request
    {
        return (new Request())
            ->setQueryParams($_GET ?? null)
            ->setParsedBody($_POST ?? null);
    }
}