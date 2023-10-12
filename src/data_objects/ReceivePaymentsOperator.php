<?php

namespace Platron\Evotor\data_objects;

class ReceivePaymentsOperator extends BaseDataObject
{
	/** @var string[] */
	protected $phones;

	/**
	 * ReceivePaymentsOperator constructor.
	 * @param string $phone
	 */
	public function __construct($phone)
	{
		$this->phones[] = (string)$phone;
	}

	/**
	 * @param string $phone
	 */
	public function addPhone($phone)
	{
		$this->phones[] = (string)$phone;
	}
}