<?php
namespace Mapado\Sdk\Entity\Repository;
use \Mapado\RestClientSdk\EntityRepository;
use Mapado\RestClientSdk\Exception\RestClientException;

class ActivityRepository extends EntityRepository
{
    public function findByUserId($id, $param, $client){
        // generate the path to call
        // api.mapado.net/v2/me?
        try{
            $data = $this->restClient->findBy($id);
            return $this->sdk->getModelHydrator()->hydrateList($data, $this->entityName); // hydrate for an entity, hydrateList for a list
        }catch(\RestClientException $e) {
            $response = $e->getResponse(); // $response should be a Psr\Http\Message\ResponseInterface
            $body = $response->getBody();
        }
        return;
    }
}
