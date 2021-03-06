<?php
namespace AliOpen\Vod;

use AliOpen\Core\RpcAcsRequest;

class AIVideoCensorJobListRequest extends RpcAcsRequest {
    private $aIVideoCensorJobIds;
    private $resourceOwnerId;
    private $resourceOwnerAccount;
    private $ownerAccount;
    private $ownerId;

    public function __construct(){
        parent::__construct("vod", "2017-03-21", "ListAIVideoCensorJob", "vod", "openAPI");
        $this->setMethod("POST");
    }

    public function getAIVideoCensorJobIds(){
        return $this->aIVideoCensorJobIds;
    }

    public function setAIVideoCensorJobIds($aIVideoCensorJobIds){
        $this->aIVideoCensorJobIds = $aIVideoCensorJobIds;
        $this->queryParameters["AIVideoCensorJobIds"] = $aIVideoCensorJobIds;
    }

    public function getResourceOwnerId(){
        return $this->resourceOwnerId;
    }

    public function setResourceOwnerId($resourceOwnerId){
        $this->resourceOwnerId = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"] = $resourceOwnerId;
    }

    public function getResourceOwnerAccount(){
        return $this->resourceOwnerAccount;
    }

    public function setResourceOwnerAccount($resourceOwnerAccount){
        $this->resourceOwnerAccount = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"] = $resourceOwnerAccount;
    }

    public function getOwnerAccount(){
        return $this->ownerAccount;
    }

    public function setOwnerAccount($ownerAccount){
        $this->ownerAccount = $ownerAccount;
        $this->queryParameters["OwnerAccount"] = $ownerAccount;
    }

    public function getOwnerId(){
        return $this->ownerId;
    }

    public function setOwnerId($ownerId){
        $this->ownerId = $ownerId;
        $this->queryParameters["OwnerId"] = $ownerId;
    }
}