<?php

namespace Platron\Evotor\services;

abstract class CreateDocumentResponse extends BaseServiceResponse
{
	/** @var string Уникальный идентификатор */
	public $uuid;

	/** @var string */
	public $status;
}