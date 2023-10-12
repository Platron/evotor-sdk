<?php

namespace Platron\Evotor\data_objects;

class MoneyTransferOperator extends BaseDataObject
{
	/** @var string */
	protected $name;
	/** @var string[] */
	private $phones;
	/** @var string */
	protected $address;
	/** @var string */
	protected $inn;

	/**
	 * MoneyTransferOperator constructor.
	 * @param string $name
	 */
	public function __construct($name)
	{
		$this->name = (string)$name;
	}

	/**
	 * @param string $phone
	 */
	public function addPhone($phone)
	{
		$this->phones[] = (string)$phone;
	}

	/**
	 * @param string $address
	 */
	public function addAddress($address)
	{
		$this->address = (string)$address;
	}

	/**
	 * @param string $inn
	 */
	public function addInn($inn)
	{
		$this->inn = (string)$inn;
	}
}