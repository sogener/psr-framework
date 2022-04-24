<?php

namespace Framework\Http;

class Request
{
    private array $queryParams;
    private ?array $parsedBody;

    public function getQueryParams(): array
    {
        return $this->queryParams;
    }

    public function getParsedBody(): ?array
    {
        return $this->parsedBody;
    }

    public function setQueryParams(array $params): self
    {
        $this->queryParams = $params;

        return $this;
    }

    public function setParsedBody(array $body): self
    {
        $this->parsedBody = $body;

        return $this;
    }
}
