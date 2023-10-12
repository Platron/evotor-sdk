<?php

namespace Platron\Evotor\data_objects;


class Service extends BaseDataObject
{
	/** @var string */
	protected $callbackUrl;

	/**
	 * Service constructor
	 * @param string $callbackUrl
	 */
	public function __construct($callbackUrl)
	{
		$this->callbackUrl = (string)$callbackUrl;
	}
}