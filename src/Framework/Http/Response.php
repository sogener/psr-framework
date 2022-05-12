<?php

namespace Framework\Http;

class Response
{
    private ?array $headers = null;
    private ?string $reasonPhrase = null;

    private static array $phrases = [
        200 => 'OK',
        301 => 'Moved Permanently',
        400 => 'Bad Request',
        403 => 'Forbidden',
        404 => 'Not Found',
        500 => 'Internal Server Error'
    ];

    public function __construct(private string $body, private int $statusCode = 200) {}

    public function withHeader(string $label, string $value): self
    {
        $this->headers[$label] = $value;

        return $this;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getReasonPhrase(): string
    {
        if ($this->reasonPhrase === null && isset(self::$phrases[$this->statusCode])) {
            $this->reasonPhrase = self::$phrases[$this->statusCode];
        }

        return $this->reasonPhrase;
    }
}