<?php
namespace alkurn\mailchimp;

use Yii;
use yii\base\Component;
use alkurn\mailchimp\Root;




class Mailchimp extends Component
{
    public $apiKey;
    private $_client;

    public function init()
    {
        $this->_client = new Root(['apiKey' => $this->apiKey]);
        return parent::init();
    }

    public function __call($name, $params)
    {
        if(method_exists($this->_client, $name)){
            return call_user_func_array([$this->_client, $name], $params);
        }
        parent::call($name, $params); // We do this so we don't have to implement the exceptions ourselves
    }
}

