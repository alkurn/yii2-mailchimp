<?php

namespace alkurn\mailchimp;

use yii\base\Component;

class Mailchimp extends Component
{
	/**
	 * the api key in use
	 * @var  string
	 */
	public $apiKey;

	/**
	 * The options for mailchimp API
	 * @var array
	 */
	public $opts = [];
	public $listId = [];

	public $mailChimp;
	
	public function init()
	{
		$this->mailChimp = new \Mailchimp($this->apiKey, $this->opts);
	}
	
	public function __get($name)
	{
		try{
			parent::__get($name);
		}catch(\yii\base\UnknownPropertyException $e){
			return $this->mailChimp->{$name};
		}
	}
	
	public function __call($name, $parameters = [])
	{
		return call_user_func_array([$this->mailChimp, $name], $parameters);
	}
} 