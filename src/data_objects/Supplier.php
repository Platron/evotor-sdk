<?php

namespace Platron\Evotor\data_objects;

class Supplier extends BaseDataObject
{
	/** @var string[] */
	protected $phones;
	/** @var string */
	protected $name;
	/** @var string */
	protected $inn;

	/**
	 * Supplier constructor.
	 * @param $name
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
	 * @param string $inn
	 */
	public function addInn($inn)
	{
		$this->inn = (string)$inn;
	}
}