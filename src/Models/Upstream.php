<?php
/**
 * @Author yaangvu
 * @Date   May 19, 2022
 */

namespace Yaangvu\LaravelKong\Models;

/**
 * @link src/Models/JsonExample/upstream.json
 */
class Upstream implements KongEntity
{
    private ?int    $createdAt          = null;
    private ?string $hashOn             = 'none'; // none, consumer, ip, header or cookie
    private ?string $id                 = null;
    private ?string $algorithm          = 'round-robin'; // round-robin
    private string  $name;
    private ?array  $tags               = null;
    private ?string $hashFallbackHeader = null;
    private ?string $hashFallback       = 'none';
    private ?string $hashOnCookie       = null;
    private ?string $hostHeader         = null;
    private ?string $hashOnCookiePath   = '/';
    private ?object $healthChecks       = null;
    private ?string $hashOnHeader       = null;
    private ?int    $slots              = 10000;

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
     * @return string|null
     */
    public function getHashOn(): ?string
    {
        return $this->hashOn;
    }

    /**
     * @param string|null $hashOn
     */
    public function setHashOn(?string $hashOn): void
    {
        $this->hashOn = $hashOn;
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
    public function getAlgorithm(): ?string
    {
        return $this->algorithm;
    }

    /**
     * @param string|null $algorithm
     */
    public function setAlgorithm(?string $algorithm): void
    {
        $this->algorithm = $algorithm;
    }

    /**
     * @return string
     */
    public function getName(): string
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
    public function getHashFallbackHeader(): ?string
    {
        return $this->hashFallbackHeader;
    }

    /**
     * @param string|null $hashFallbackHeader
     */
    public function setHashFallbackHeader(?string $hashFallbackHeader): void
    {
        $this->hashFallbackHeader = $hashFallbackHeader;
    }

    /**
     * @return string|null
     */
    public function getHashFallback(): ?string
    {
        return $this->hashFallback;
    }

    /**
     * @param string|null $hashFallback
     */
    public function setHashFallback(?string $hashFallback): void
    {
        $this->hashFallback = $hashFallback;
    }

    /**
     * @return string|null
     */
    public function getHashOnCookie(): ?string
    {
        return $this->hashOnCookie;
    }

    /**
     * @param string|null $hashOnCookie
     */
    public function setHashOnCookie(?string $hashOnCookie): void
    {
        $this->hashOnCookie = $hashOnCookie;
    }

    /**
     * @return string|null
     */
    public function getHostHeader(): ?string
    {
        return $this->hostHeader;
    }

    /**
     * @param string|null $hostHeader
     */
    public function setHostHeader(?string $hostHeader): void
    {
        $this->hostHeader = $hostHeader;
    }

    /**
     * @return string|null
     */
    public function getHashOnCookiePath(): ?string
    {
        return $this->hashOnCookiePath;
    }

    /**
     * @param string|null $hashOnCookiePath
     */
    public function setHashOnCookiePath(?string $hashOnCookiePath): void
    {
        $this->hashOnCookiePath = $hashOnCookiePath;
    }

    /**
     * @return object|null
     */
    public function getHealthChecks(): ?object
    {
        return $this->healthChecks;
    }

    /**
     * @param object|null $healthChecks
     */
    public function setHealthChecks(?object $healthChecks): void
    {
        $this->healthChecks = $healthChecks;
    }

    /**
     * @return string|null
     */
    public function getHashOnHeader(): ?string
    {
        return $this->hashOnHeader;
    }

    /**
     * @param string|null $hashOnHeader
     */
    public function setHashOnHeader(?string $hashOnHeader): void
    {
        $this->hashOnHeader = $hashOnHeader;
    }

    /**
     * @return int|null
     */
    public function getSlots(): ?int
    {
        return $this->slots;
    }

    /**
     * @param int|null $slots
     */
    public function setSlots(?int $slots): void
    {
        $this->slots = $slots;
    }
}

