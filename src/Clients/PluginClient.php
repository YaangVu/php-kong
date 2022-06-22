<?php
/**
 * @Author yaangvu
 * @Date   Jun 17, 2022
 */

namespace Yaangvu\LaravelKong\Clients;

use Yaangvu\LaravelKong\Models\KongEntity;
use Yaangvu\LaravelKong\Models\Plugin;
use Yaangvu\LaravelKong\Models\Service;

class PluginClient extends KongClient
{
    protected string  $path  = '/plugins';
    protected string  $model = Plugin::class;
    protected Service $service;

    /**
     * @inheritDoc
     */
    function _handleData(KongEntity $kongEntity): array
    {
        // TODO: Implement _handleData() method.
    }
}