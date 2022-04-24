<?php

namespace Framework\Http;

interface Factory
{
    public static function createRequest(?array $query = null, ?array $body = null): Request;
}