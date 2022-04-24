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
        $new = clone($this);
        $new->queryParams = $params;

        return $new;
    }

    public function setParsedBody(array $body): self
    {
        $new = clone($this);
        $new->parsedBody = $body;

        return $new;
    }
}
