<?php

namespace Platron\Evotor\data_objects;

class PayingAgent extends BaseDataObject
{
	/** @var string */
	protected $operation;
	/** @var string[] */
	protected $phones;

	/**
	 * PayingAgent constructor.
	 * @param string $operation
	 */
	public function __construct($operation)
	{
		$this->operation = (string)$operation;
	}

	/**
	 * @param string $phone
	 */
	public function addPhone($phone)
	{
		$this->phones[] = (string)$phone;
	}
}