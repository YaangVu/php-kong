<?php
/**
 * @Author yaangvu
 * @Date   May 19, 2022
 */

namespace Yaangvu\LaravelKong\Models;

/**
 * @link src/Models/JsonExample/service.json
 */
class Service implements KongEntity
{
    private string  $host; //require
    private ?int    $connectTimeout    = 60000;
    private ?string $protocol          = 'http';
    private ?int    $readTimeout       = 60000;
    private ?int    $port              = 80;
    private ?string $path              = null;
    private ?int    $retries           = 5;
    private ?int    $writeTimeout      = 60000;
    private ?array  $tags              = null;
    private ?string $clientCertificate = null;
    private ?string $id                = null;
    private ?string $name              = null;

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    /**
     * @return int|null
     */
    public function getConnectTimeout(): ?int
    {
        return $this->connectTimeout;
    }

    /**
     * @param int|null $connectTimeout
     */
    public function setConnectTimeout(?int $connectTimeout): void
    {
        $this->connectTimeout = $connectTimeout;
    }

    /**
     * @return string|null
     */
    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    /**
     * @param string|null $protocol
     */
    public function setProtocol(?string $protocol): void
    {
        $this->protocol = $protocol;
    }

    /**
     * @return int|null
     */
    public function getReadTimeout(): ?int
    {
        return $this->readTimeout;
    }

    /**
     * @param int|null $readTimeout
     */
    public function setReadTimeout(?int $readTimeout): void
    {
        $this->readTimeout = $readTimeout;
    }

    /**
     * @return int|null
     */
    public function getPort(): ?int
    {
        return $this->port;
    }

    /**
     * @param int|null $port
     */
    public function setPort(?int $port): void
    {
        $this->port = $port;
    }

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string|null $path
     */
    public function setPath(?string $path): void
    {
        $this->path = $path;
    }

    /**
     * @return int|null
     */
    public function getRetries(): ?int
    {
        return $this->retries;
    }

    /**
     * @param int|null $retries
     */
    public function setRetries(?int $retries): void
    {
        $this->retries = $retries;
    }

    /**
     * @return int|null
     */
    public function getWriteTimeout(): ?int
    {
        return $this->writeTimeout;
    }

    /**
     * @param int|null $writeTimeout
     */
    public function setWriteTimeout(?int $writeTimeout): void
    {
        $this->writeTimeout = $writeTimeout;
    }

    /**
     * @return array|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param array|null $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return string|null
     */
    public function getClientCertificate(): ?string
    {
        return $this->clientCertificate;
    }

    /**
     * @param string|null $clientCertificate
     */
    public function setClientCertificate(?string $clientCertificate): void
    {
        $this->clientCertificate = $clientCertificate;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}