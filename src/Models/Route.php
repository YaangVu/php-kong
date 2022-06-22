<?php
/**
 * @Author yaangvu
 * @Date   May 19, 2022
 */

namespace Yaangvu\LaravelKong\Models;

/**
 * @link src/Models/JsonExample/route.json
 */
class Route implements KongEntity
{
    private ?string $id                      = null;
    private ?string $name                    = null;
    private ?int    $createdAt               = null;
    private ?int    $updatedAt               = null;
    private ?array  $protocols               = ['http', 'https'];
    private ?array  $methods                 = null;
    private ?array  $hosts                   = null;
    private ?array  $paths                   = null;
    private ?array  $headers                 = null;
    private ?int    $httpsRedirectStatusCode = 426;
    private ?int    $regexPriority           = 0;
    private ?bool   $stripPath               = true;
    private ?string $pathHandling            = 'v1';
    private ?bool   $preserveHost            = false;
    private ?bool   $requestBuffering        = true;
    private ?bool   $responseBuffering       = true;
    private ?array  $snis                    = null;
    private ?array  $sources                 = null;
    private ?array  $destinations            = null;
    private ?array  $tags                    = null;
    private Service $service;

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
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getCreatedAt(): ?int
    {
        return $this->createdAt;
    }

    /**
     * @param int|null $createdAt
     */
    public function setCreatedAt(?int $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int|null
     */
    public function getUpdatedAt(): ?int
    {
        return $this->updatedAt;
    }

    /**
     * @param int|null $updatedAt
     */
    public function setUpdatedAt(?int $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return array|string[]|null
     */
    public function getProtocols(): ?array
    {
        return $this->protocols;
    }

    /**
     * @param array|string[]|null $protocols
     */
    public function setProtocols(?array $protocols): void
    {
        $this->protocols = $protocols;
    }

    /**
     * @return array|null
     */
    public function getMethods(): ?array
    {
        return $this->methods;
    }

    /**
     * @param array|null $methods
     */
    public function setMethods(?array $methods): void
    {
        $this->methods = $methods;
    }

    /**
     * @return array|null
     */
    public function getHosts(): ?array
    {
        return $this->hosts;
    }

    /**
     * @param array|null $hosts
     */
    public function setHosts(?array $hosts): void
    {
        $this->hosts = $hosts;
    }

    /**
     * @return array|null
     */
    public function getPaths(): ?array
    {
        return $this->paths;
    }

    /**
     * @param array|null $paths
     */
    public function setPaths(?array $paths): void
    {
        $this->paths = $paths;
    }

    /**
     * @return array|null
     */
    public function getHeaders(): ?array
    {
        return $this->headers;
    }

    /**
     * @param array|null $headers
     */
    public function setHeaders(?array $headers): void
    {
        $this->headers = $headers;
    }

    /**
     * @return int|null
     */
    public function getHttpsRedirectStatusCode(): ?int
    {
        return $this->httpsRedirectStatusCode;
    }

    /**
     * @param int|null $httpsRedirectStatusCode
     */
    public function setHttpsRedirectStatusCode(?int $httpsRedirectStatusCode): void
    {
        $this->httpsRedirectStatusCode = $httpsRedirectStatusCode;
    }

    /**
     * @return int|null
     */
    public function getRegexPriority(): ?int
    {
        return $this->regexPriority;
    }

    /**
     * @param int|null $regexPriority
     */
    public function setRegexPriority(?int $regexPriority): void
    {
        $this->regexPriority = $regexPriority;
    }

    /**
     * @return bool|null
     */
    public function getStripPath(): ?bool
    {
        return $this->stripPath;
    }

    /**
     * @param bool|null $stripPath
     */
    public function setStripPath(?bool $stripPath): void
    {
        $this->stripPath = $stripPath;
    }

    /**
     * @return string|null
     */
    public function getPathHandling(): ?string
    {
        return $this->pathHandling;
    }

    /**
     * @param string|null $pathHandling
     */
    public function setPathHandling(?string $pathHandling): void
    {
        $this->pathHandling = $pathHandling;
    }

    /**
     * @return bool|null
     */
    public function getPreserveHost(): ?bool
    {
        return $this->preserveHost;
    }

    /**
     * @param bool|null $preserveHost
     */
    public function setPreserveHost(?bool $preserveHost): void
    {
        $this->preserveHost = $preserveHost;
    }

    /**
     * @return bool|null
     */
    public function getRequestBuffering(): ?bool
    {
        return $this->requestBuffering;
    }

    /**
     * @param bool|null $requestBuffering
     */
    public function setRequestBuffering(?bool $requestBuffering): void
    {
        $this->requestBuffering = $requestBuffering;
    }

    /**
     * @return bool|null
     */
    public function getResponseBuffering(): ?bool
    {
        return $this->responseBuffering;
    }

    /**
     * @param bool|null $responseBuffering
     */
    public function setResponseBuffering(?bool $responseBuffering): void
    {
        $this->responseBuffering = $responseBuffering;
    }

    /**
     * @return array|null
     */
    public function getSnis(): ?array
    {
        return $this->snis;
    }

    /**
     * @param array|null $snis
     */
    public function setSnis(?array $snis): void
    {
        $this->snis = $snis;
    }

    /**
     * @return array|null
     */
    public function getSources(): ?array
    {
        return $this->sources;
    }

    /**
     * @param array|null $sources
     */
    public function setSources(?array $sources): void
    {
        $this->sources = $sources;
    }

    /**
     * @return array|null
     */
    public function getDestinations(): ?array
    {
        return $this->destinations;
    }

    /**
     * @param array|null $destinations
     */
    public function setDestinations(?array $destinations): void
    {
        $this->destinations = $destinations;
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
     * @return Service
     */
    public function getService(): Service
    {
        return $this->service;
    }

    /**
     * @param Service $service
     */
    public function setService(Service $service): void
    {
        $this->service = $service;
    }
}