<?php
/**
 * @Author yaangvu
 * @Date   May 19, 2022
 */

namespace Yaangvu\LaravelKong\Clients;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Yaangvu\LaravelKong\Mapper;
use Yaangvu\LaravelKong\Models\KongEntity;

abstract class KongClient
{
    use Mapper;

    public Client    $client;
    protected string $path = '/';
    protected string $model;

    public function __construct(string $baseUrl, array $options = ['timeout' => 2.0])
    {
        $this->client = new Client(
            [
                'base_uri' => $baseUrl,
                ...$options
            ]
        );
    }

    /**
     * @Description Get list KongEntity entities
     *
     * @Author      yaangvu
     * @Date        May 19, 2022
     *
     * @param array $params
     *
     * @return array
     * @throws GuzzleException
     */
    public function index(array $params = []): array
    {
        $result = json_decode($this->client->get($this->path)->getBody()->getContents());

        return $result->data ?? [];
    }

    /**
     * @Description Get detail KongEntity entity
     *
     * @Author      yaangvu
     * @Date        May 19, 2022
     *
     * @param string $id
     *
     * @return mixed
     * @throws GuzzleException
     */
    public function show(string $id): mixed
    {
        $result = json_decode($this->client->get("$this->path/$id")->getBody()->getContents());

        return $this->map((array)$result, $this->model);
    }

    /**
     * @Description Create new KongEntity entity
     *
     * @Author      yaangvu
     * @Date        May 19, 2022
     *
     * @param KongEntity $kongEntity
     *
     * @return mixed
     * @throws GuzzleException
     */
    public function store(KongEntity $kongEntity): mixed
    {
        $data   = $this->_handleDataBeforeStore($kongEntity);
        $result = json_decode($this->client->post($this->path, ['json' => $data])->getBody()->getContents());

        return $this->map((array)$result, $this->model);
    }

    /**
     * @Description Handle data before add
     *
     * @Author      yaangvu
     * @Date        Jun 22, 2022
     *
     * @param KongEntity $kongEntity
     *
     * @return array
     */
    protected function _handleDataBeforeStore(KongEntity $kongEntity): array
    {
        return $this->_handleData($kongEntity);
    }

    /**
     * @Description Handle data before add or update
     *
     * @Author      yaangvu
     * @Date        Jun 22, 2022
     *
     * @param KongEntity $kongEntity
     *
     * @return array
     */
    abstract function _handleData(KongEntity $kongEntity): array;

    /**
     * @Description Update KongEntity entity via $ID
     *
     * @Author      yaangvu
     * @Date        May 19, 2022
     *
     * @param string     $id
     * @param KongEntity $kongEntity
     *
     * @return mixed
     * @throws GuzzleException
     */
    public function update(string $id, KongEntity $kongEntity): mixed
    {
        $data   = $this->_handleDataBeforeUpdate($kongEntity);
        $result = json_decode($this->client->patch("$this->path/$id", ['json' => $data])->getBody()->getContents());

        return $this->map((array)$result, $this->model);
    }

    /**
     * @Description Handle data before update
     *
     * @Author      yaangvu
     * @Date        Jun 22, 2022
     *
     * @param KongEntity $kongEntity
     *
     * @return array
     */
    protected function _handleDataBeforeUpdate(KongEntity $kongEntity): array
    {
        return $this->_handleData($kongEntity);
    }

    /**
     * @Description Insert or update KongEntity Entity via name
     *
     * @Author      yaangvu
     * @Date        May 20, 2022
     *
     * @param KongEntity $kongEntity
     *
     * @return mixed
     * @throws GuzzleException
     * @throws Exception
     */
    public function updateOrCreate(KongEntity $kongEntity): mixed
    {
        $id = $kongEntity->getId() ?? $kongEntity->getName() ?? null;

        if (!$id)
            throw new Exception('id or name is required');

        $data   = $this->_handleDataBeforeUpsert($kongEntity);
        $result = json_decode(
            $this->client->put("$this->path/$id", ['json' => $data])
                         ->getBody()
                         ->getContents());

        return $this->map((array)$result, $this->model);
    }

    /**
     * @Description Handle data before upsert
     *
     * @Author      yaangvu
     * @Date        Jun 22, 2022
     *
     * @param KongEntity $kongEntity
     *
     * @return array
     */
    protected function _handleDataBeforeUpsert(KongEntity $kongEntity): array
    {
        return $this->_handleData($kongEntity);
    }

    /**
     * @Description Delete KongEntity entity via $id
     *
     * @Author      yaangvu
     * @Date        May 19, 2022
     *
     * @param string $id
     *
     * @return bool|null
     * @throws GuzzleException
     */
    public function destroy(string $id): ?bool
    {
        $this->client->delete("$this->path/$id");

        return true;
    }
}