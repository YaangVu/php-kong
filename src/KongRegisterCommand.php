<?php
/**
 * @Author yaangvu
 * @Date   Jun 19, 2022
 */

namespace Yaangvu\LaravelKong;

use GuzzleHttp\Exception\GuzzleException;
use Yaangvu\LaravelKong\Models\Route;
use Yaangvu\LaravelKong\Models\Service;
use Yaangvu\LaravelKong\Models\Target;
use Yaangvu\LaravelKong\Models\Upstream;

class KongRegisterCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected string $signature = 'kong:register';

    /**
     * The console command description.
     *
     * @var string
     */
    protected string $description = 'Register Service, Upstream, Target to KongEntity Service';


    /**
     * @throws GuzzleException
     */
    public function handle(Kong $kong): void
    {
        $upstream = $this->_registerUpstream($kong);
        $target   = $this->_registerTarget($kong, $upstream);
        $service  = $this->_registerService($kong);
        $route    = $this->_registerRoute($kong, $service);
    }

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param Kong $kong
     *
     * @return Upstream
     * @throws GuzzleException
     */
    private function _registerUpstream(Kong $kong): Upstream
    {
        $upstream = new Upstream();
        $upstream->setName(config('kong.kong_upstream'));

        return $kong->createOrUpdateUpstream($upstream);
    }

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param Kong     $kong
     * @param Upstream $upstream
     *
     * @return Target
     * @throws GuzzleException
     */
    private function _registerTarget(Kong $kong, Upstream $upstream): Target
    {
        $target = new Target();
        $target->setTarget(config('kong.kong_targets'));
        $target->setUpstream($upstream);

        return $kong->createOrUpdateTarget($target);
    }

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param Kong $kong
     *
     * @return Service
     * @throws GuzzleException
     */
    private function _registerService(Kong $kong): Service
    {
        $service = new Service();
        $service->setName(config('kong.kong_service'));
        $service->setHost(config('kong.kong_upstream'));

        return $kong->createOrUpdateService($service);
    }

    /**
     * @Description
     *
     * @Author yaangvu
     * @Date   Jun 19, 2022
     *
     * @param Kong    $kong
     * @param Service $service
     *
     * @return Route
     * @throws GuzzleException
     */
    private function _registerRoute(Kong $kong, Service $service): Route
    {
        $route = new Route();
        $route->setName(config('kong.kong_route_name'));
        $route->setService($service);
        $route->setPaths(config('kong.kong_route_paths'));

        return $kong->createOrUpdateRoute($route);
    }
}
