<?php
/**
 * @Author yaangvu
 * @Date   May 20, 2022
 */

namespace Yaangvu\LaravelKong\Models;

interface KongEntity
{
    /**
     * @return string|null
     */
    public function getId(): ?string;

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void;

    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string $name
     */
    public function setName(string $name): void;
}