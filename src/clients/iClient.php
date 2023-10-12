<?php

namespace Platron\Evotor\clients;

use Platron\Evotor\services\BaseServiceRequest;
use stdClass;

interface iClient
{

	/**
	 * Послать запрос
	 * @param BaseServiceRequest $service
	 * @return stdClass
	 */
	public function sendRequest(BaseServiceRequest $service);
}
