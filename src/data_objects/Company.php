<?php

namespace Platron\Evotor\data_objects;

use Platron\Evotor\handbooks\SnoTypes;

class Company extends BaseDataObject
{
	/** @var string */
	protected $email;
	/** @var string */
	protected $sno;
	/** @var string */
	protected $inn;
	/** @var string */
	protected $payment_address;

	/**
	 * Company constructor
	 * @param string $email
	 * @param SnoTypes $sno
	 * @param string $inn
	 * @param string $paymentAddress
	 */
	public function __construct($email, SnoTypes $sno, $inn, $paymentAddress)
	{
		$this->email = (string)$email;
		$this->sno = $sno->getValue();
		$this->inn = (string)$inn;
		$this->payment_address = (string)$paymentAddress;
	}
}