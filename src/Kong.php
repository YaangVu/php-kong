<?php
/**
 * @Author yaangvu
 * @Date   Jun 16, 2022
 */

namespace Yaangvu\LaravelKong;

use Yaangvu\LaravelKong\Clients\KongClient;
use Yaangvu\LaravelKong\Clients\PluginClient;
use Yaangvu\LaravelKong\Clients\RouteClient;
use Yaangvu\LaravelKong\Clients\ServiceClient;
use Yaangvu\LaravelKong\Clients\TargetClient;
use Yaangvu\LaravelKong\Clients\UpstreamClient;
use Yaangvu\LaravelKong\Constants\KongEntityConstant;
use Yaangvu\LaravelKong\Interfaces\Kong as KongInterface;
use Yaangvu\LaravelKong\Models\Plugin;
use Yaangvu\LaravelKong\Models\Route;
use Yaangvu\LaravelKong\Models\Service;
use Yaangvu\LaravelKong\Models\Target;
use Yaangvu\LaravelKong\Models\Upstream;

class Kong implements KongInterface
{
    private string $baseUrl;
    private array  $options;

    public function __construct(string $baseUrl, array $options)
    {
        $this->baseUrl = $baseUrl;
        $this->options = $options;
    }

    /**
     * @inheritDoc
     */
    function getPlugins(array $params = []): array
    {
        return $this->_setEntity(KongEntityConstant::PLUGIN)->index($params);
    }

    /*
    |--------------------------------------------------------------------------
    | KongEntity Plugin APIs
    |--------------------------------------------------------------------------
    */

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 17, 2022
     *
     * @param string $entity
     *
     * @return KongClient|null
     */
    private function _setEntity(string $entity): ?KongClient
    {
        return match ($entity) {
            KongEntityConstant::PLUGIN => new PluginClient($this->baseUrl, $this->options),
            KongEntityConstant::ROUTE => new RouteClient($this->baseUrl, $this->options),
            KongEntityConstant::SERVICE => new ServiceClient($this->baseUrl, $this->options),
            KongEntityConstant::TARGET => new TargetClient($this->baseUrl, $this->options),
            KongEntityConstant::UPSTREAM => new UpstreamClient($this->baseUrl, $this->options),
            default => null,
        };
    }

    /**
     * @inheritDoc
     */
    function getPlugin(int|string $id): Plugin
    {
        return $this->_setEntity(KongEntityConstant::PLUGIN)->show($id);
    }

    /**
     * @inheritDoc
     */
    function createPlugin(Plugin $plugin): Plugin
    {
        return $this->_setEntity(KongEntityConstant::PLUGIN)->store($plugin);
    }

    /**
     * @inheritDoc
     */
    function updatePlugin(int|string $id, Plugin $plugin): Plugin
    {
        return $this->_setEntity(KongEntityConstant::PLUGIN)->update($id, $plugin);
    }

    /**
     * @inheritDoc
     */
    function createOrUpdatePlugin(Plugin $plugin): Plugin
    {
        return $this->_setEntity(KongEntityConstant::PLUGIN)->updateOrCreate($plugin);
    }

    /**
     * @inheritDoc
     */
    function deletePlugin(int|string $id): bool
    {
        return $this->_setEntity(KongEntityConstant::PLUGIN)->destroy($id);
    }

    /*
    |--------------------------------------------------------------------------
    | KongEntity Route APIs
    |--------------------------------------------------------------------------
    */


    /**
     * @inheritDoc
     */
    function getRoutes(array $params = []): array
    {
        return $this->_setEntity(KongEntityConstant::ROUTE)->index($params);
    }

    /**
     * @inheritDoc
     */
    function getRoute(int|string $id): Route
    {
        return $this->_setEntity(KongEntityConstant::ROUTE)->show($id);
    }

    /**
     * @inheritDoc
     */
    function createRoute(Route $route): Route
    {
        return $this->_setEntity(KongEntityConstant::ROUTE)->store($route);
    }

    /**
     * @inheritDoc
     */
    function updateRoute(int|string $id, Route $route): Route
    {
        return $this->_setEntity(KongEntityConstant::ROUTE)->update($id, $route);
    }

    /**
     * @inheritDoc
     */
    function createOrUpdateRoute(Route $route): Route
    {
        return $this->_setEntity(KongEntityConstant::ROUTE)->updateOrCreate($route);
    }

    /**
     * @inheritDoc
     */
    function deleteRoute(int|string $id): bool
    {
        return $this->_setEntity(KongEntityConstant::ROUTE)->destroy($id);
    }

    /*
    |--------------------------------------------------------------------------
    | KongEntity Service APIs
    |--------------------------------------------------------------------------
    */

    /**
     * @inheritDoc
     */
    function getServices(array $params = []): array
    {
        return $this->_setEntity(KongEntityConstant::SERVICE)->index($params);
    }

    /**
     * @inheritDoc
     */
    function getService(int|string $id): Service
    {
        return $this->_setEntity(KongEntityConstant::SERVICE)->show($id);
    }

    /**
     * @inheritDoc
     */
    function createService(Service $service): Service
    {
        return $this->_setEntity(KongEntityConstant::SERVICE)->store($service);
    }

    /**
     * @inheritDoc
     */
    function updateService(int|string $id, Service $service): Service
    {
        return $this->_setEntity(KongEntityConstant::SERVICE)->update($id, $service);
    }

    /**
     * @inheritDoc
     */
    function createOrUpdateService(Service $service): Service
    {
        return $this->_setEntity(KongEntityConstant::SERVICE)->updateOrCreate($service);
    }

    /**
     * @inheritDoc
     */
    function deleteService(int|string $id): bool
    {
        return $this->_setEntity(KongEntityConstant::SERVICE)->destroy($id);
    }

    /*
    |--------------------------------------------------------------------------
    | KongEntity Upstream APIs
    |--------------------------------------------------------------------------
    */

    /**
     * @inheritDoc
     */
    function getUpstreams(array $params = []): array
    {
        return $this->_setEntity(KongEntityConstant::UPSTREAM)->index($params);
    }

    /**
     * @inheritDoc
     */
    function getUpstream(int|string $id): Upstream
    {
        return $this->_setEntity(KongEntityConstant::UPSTREAM)->show($id);
    }

    /**
     * @inheritDoc
     */
    function createUpstream(Upstream $upstream): Upstream
    {
        return $this->_setEntity(KongEntityConstant::UPSTREAM)->store($upstream);
    }

    /**
     * @inheritDoc
     */
    function updateUpstream(int|string $id, Upstream $upstream): Upstream
    {
        return $this->_setEntity(KongEntityConstant::UPSTREAM)->update($id, $upstream);
    }

    /**
     * @inheritDoc
     */
    function createOrUpdateUpstream(Upstream $upstream): Upstream
    {
        return $this->_setEntity(KongEntityConstant::UPSTREAM)->updateOrCreate($upstream);
    }

    /**
     * @inheritDoc
     */
    function deleteUpstream(int|string $id): bool
    {
        return $this->_setEntity(KongEntityConstant::UPSTREAM)->destroy($id);
    }

    /*
    |--------------------------------------------------------------------------
    | KongEntity Target APIs
    |--------------------------------------------------------------------------
    */

    /**
     * @inheritDoc
     */
    function getTargets(array $params = []): array
    {
        return $this->_setEntity(KongEntityConstant::TARGET)->index($params);
    }

    /**
     * @inheritDoc
     */
    function getTarget(int|string $id): Target
    {
        return $this->_setEntity(KongEntityConstant::TARGET)->show($id);
    }

    /**
     * @inheritDoc
     */
    function createTarget(Target $target): Target
    {
        return $this->_setEntity(KongEntityConstant::TARGET)->store($target);
    }

    /**
     * @inheritDoc
     */
    function updateTarget(int|string $id, Target $target): Target
    {
        return $this->_setEntity(KongEntityConstant::TARGET)->update($id, $target);
    }

    /**
     * @inheritDoc
     */
    function createOrUpdateTarget(Target $target): Target
    {
        return $this->_setEntity(KongEntityConstant::TARGET)->updateOrCreate($target);
    }

    /**
     * @inheritDoc
     */
    function deleteTarget(int|string $id): bool
    {
        return $this->_setEntity(KongEntityConstant::TARGET)->destroy($id);
    }
}