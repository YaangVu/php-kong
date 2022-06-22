<?php
/**
 * @Author yaangvu
 * @Date   Jun 16, 2022
 */

namespace Yaangvu\LaravelKong\Models;

class Target implements KongEntity
{
    private ?string  $id     = null;
    private ?string  $name   = null;
    private Upstream $upstream;
    private string   $target;
    private int      $weight = 100;
    private ?array   $tags   = null;

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
     * @return Upstream
     */
    public function getUpstream(): Upstream
    {
        return $this->upstream;
    }

    /**
     * @param Upstream $upstream
     */
    public function setUpstream(Upstream $upstream): void
    {
        $this->upstream = $upstream;
    }

    /**
     * @return string
     */
    public function getTarget(): string
    {
        return $this->target;
    }

    /**
     * @param string $target
     */
    public function setTarget(string $target): void
    {
        $this->target = $target;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
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
}