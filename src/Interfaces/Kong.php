<?php
/**
 * @Author yaangvu
 * @Date   Jun 16, 2022
 */

namespace Yaangvu\LaravelKong\Interfaces;

use GuzzleHttp\Exception\GuzzleException;
use Yaangvu\LaravelKong\Models\Plugin;
use Yaangvu\LaravelKong\Models\Route;
use Yaangvu\LaravelKong\Models\Service;
use Yaangvu\LaravelKong\Models\Target;
use Yaangvu\LaravelKong\Models\Upstream;

interface Kong
{
    /*
    |--------------------------------------------------------------------------
    | Plugin apis
    |--------------------------------------------------------------------------
    */

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 17, 2022
     *
     * @param array $params
     *
     * @return Plugin[]
     *
     * @throws GuzzleException
     */
    function getPlugins(array $params = []): array;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 17, 2022
     *
     * @param string|int $id
     *
     * @return Plugin
     *
     * @throws GuzzleException
     */
    function getPlugin(string|int $id): Plugin;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param Plugin $plugin
     *
     * @return Plugin
     *
     * @throws GuzzleException
     */
    function createPlugin(Plugin $plugin): Plugin;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param string|int $id
     * @param Plugin     $plugin
     *
     * @return Plugin
     *
     * @throws GuzzleException
     */
    function updatePlugin(string|int $id, Plugin $plugin): Plugin;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param Plugin $plugin
     *
     * @return Plugin
     *
     * @throws GuzzleException
     */
    function createOrUpdatePlugin(Plugin $plugin): Plugin;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param string|int $id
     *
     * @return bool
     *
     * @throws GuzzleException
     */
    function deletePlugin(string|int $id): bool;

    /*
    |--------------------------------------------------------------------------
    | Route apis
    |--------------------------------------------------------------------------
    */

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param array $params
     *
     * @return Route[]
     *
     * @throws GuzzleException
     */
    function getRoutes(array $params = []): array;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param string|int $id
     *
     * @return Route
     *
     * @throws GuzzleException
     */
    function getRoute(string|int $id): Route;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param Route $route
     *
     * @return Route
     *
     * @throws GuzzleException
     */
    function createRoute(Route $route): Route;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param string|int $id
     * @param Route      $route
     *
     * @return Route
     *
     * @throws GuzzleException
     */
    function updateRoute(string|int $id, Route $route): Route;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param Route $route
     *
     * @return Route
     *
     * @throws GuzzleException
     */
    function createOrUpdateRoute(Route $route): Route;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param string|int $id
     *
     * @return bool
     *
     * @throws GuzzleException
     */
    function deleteRoute(string|int $id): bool;

    /*
    |--------------------------------------------------------------------------
    | Service apis
    |--------------------------------------------------------------------------
    */

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param array $params
     *
     * @return Service[]
     *
     * @throws GuzzleException
     */
    function getServices(array $params = []): array;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param string|int $id
     *
     * @return Service
     *
     * @throws GuzzleException
     */
    function getService(string|int $id): Service;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param Service $service
     *
     * @return Service
     *
     * @throws GuzzleException
     */
    function createService(Service $service): Service;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param string|int $id
     * @param Service    $service
     *
     * @return Service
     *
     * @throws GuzzleException
     */
    function updateService(string|int $id, Service $service): Service;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param Service $service
     *
     * @return Service
     *
     * @throws GuzzleException
     */
    function createOrUpdateService(Service $service): Service;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param string|int $id
     *
     * @return bool
     *
     * @throws GuzzleException
     */
    function deleteService(string|int $id): bool;

    /*
    |--------------------------------------------------------------------------
    | Upstream apis
    |--------------------------------------------------------------------------
    */

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param array $params
     *
     * @return Upstream[]
     *
     * @throws GuzzleException
     */
    function getUpstreams(array $params = []): array;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param string|int $id
     *
     * @return Upstream
     *
     * @throws GuzzleException
     */
    function getUpstream(string|int $id): Upstream;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param Upstream $upstream
     *
     * @return Upstream
     *
     * @throws GuzzleException
     */
    function createUpstream(Upstream $upstream): Upstream;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param string|int $id
     * @param Upstream   $upstream
     *
     * @return Upstream
     *
     * @throws GuzzleException
     */
    function updateUpstream(string|int $id, Upstream $upstream): Upstream;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param Upstream $upstream
     *
     * @return Upstream
     *
     * @throws GuzzleException
     */
    function createOrUpdateUpstream(Upstream $upstream): Upstream;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param string|int $id
     *
     * @return bool
     *
     * @throws GuzzleException
     */
    function deleteUpstream(string|int $id): bool;

    /*
    |--------------------------------------------------------------------------
    | Upstream Target apis
    |--------------------------------------------------------------------------
    */

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param array $params
     *
     * @return Target[]
     *
     * @throws GuzzleException
     */
    function getTargets(array $params = []): array;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param string|int $id
     *
     * @return Target
     *
     * @throws GuzzleException
     */
    function getTarget(string|int $id): Target;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param Target $target
     *
     * @return Target
     *
     * @throws GuzzleException
     */
    function createTarget(Target $target): Target;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param string|int $id
     * @param Target     $target
     *
     * @return Target
     *
     * @throws GuzzleException
     */
    function updateTarget(string|int $id, Target $target): Target;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param Target $target
     *
     * @return Target
     *
     * @throws GuzzleException
     */
    function createOrUpdateTarget(Target $target): Target;

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param string|int $id
     *
     * @return bool
     *
     * @throws GuzzleException
     */
    function deleteTarget(string|int $id): bool;
}