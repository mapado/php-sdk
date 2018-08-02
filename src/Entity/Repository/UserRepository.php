<?php 
namespace Mapado\Sdk\Entity\Repository;
use \Mapado\RestClientSdk\EntityRepository;
use Mapado\RestClientSdk\Exception\RestClientException;

class UserRepository extends EntityRepository
{
    public function me($param) {
        // generate the path to call
        // api.mapado.net/v2/me?
        try{
            $path = "/v2/me?fields=".$param['fields'];        
            $data = $this->restClient->get($path);
            return $this->sdk->getModelHydrator()->hydrate($data, $this->entityName); // hydrate for an entity, hydrateList for a list
        }catch(\RestClientException $e) {
            $response = $e->getResponse(); // $response should be a Psr\Http\Message\ResponseInterface
            $body = $response->getBody();
            dump($body); // will dump your response body
        }
        return;
    }

    public function getListsImported($id, $param){
        // generate the path to call
        // api.mapado.net/v2/me?
        try{
            $path = "/v2/users/".$id."/user-lists?fields=".$param['fields'];
            $data = $this->restClient->get($path);        
            return $this->sdk->getModelHydrator()->hydrateList($data, $this->entityName); // hydrate for an entity, hydrateList for a list
        }catch(\RestClientException $e) {
            $response = $e->getResponse(); // $response should be a Psr\Http\Message\ResponseInterface
            $body = $response->getBody();
            dump($body); // will dump your response body
        }
        return;
    }

    public function test($uuid){
        // path to call 
        // api.mapado.com/activities/{slug}
        
    }
}