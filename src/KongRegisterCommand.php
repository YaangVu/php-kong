<?php
/**
 * @Author yaangvu
 * @Date   Jun 19, 2022
 */

namespace Yaangvu\LaravelKong;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Console\Command;
use Yaangvu\LaravelKong\Models\Route;
use Yaangvu\LaravelKong\Models\Service;
use Yaangvu\LaravelKong\Models\Target;
use Yaangvu\LaravelKong\Models\Upstream;

class KongRegisterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kong:register';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register Service, Upstream, Target to KongEntity Service';


    /**
     * @throws GuzzleException
     */
    public function handle(Kong $kong): void
    {
        //Register Upstream and Target
        $upstream = $this->_registerUpstream($kong);
        $this->_registerTarget($kong, $upstream);

        //Register Service and Route
        $service = $this->_registerService($kong);
        $this->_registerRoute($kong, $service);
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
     * @return void
     * @throws GuzzleException
     */
    private function _registerTarget(Kong $kong, Upstream $upstream): void
    {
        $targets = config('kong.kong_targets');
        foreach ($targets as $targetString) {
            $target = new Target();
            $target->setTarget($targetString);
            $target->setUpstream($upstream);

            $kong->createOrUpdateTarget($target);
        }
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
     * @return void
     * @throws GuzzleException
     */
    private function _registerRoute(Kong $kong, Service $service): void
    {
        $route = new Route();
        $route->setName(config('kong.kong_route_name'));
        $route->setService($service);
        $route->setPaths(config('kong.kong_route_paths'));

        $kong->createOrUpdateRoute($route);
    }
}
