<?php

namespace Platron\Evotor\handbooks;

use MyCLabs\Enum\Enum;

class PaymentObjects extends Enum
{
	const
		COMMODITY = 1,
		EXCISE = 2,
		JOB = 3,
		SERVICE = 4,
		GAMBLING_BET = 5,
		GAMBLING_PRIZE = 6,
		LOTTERY = 7,
		LOTTERY_PRIZE = 8,
		INTELLECTUAL_ACTIVITY = 9,
		PAYMENT = 10,
		AGENT_COMMISSION = 11,
		AWARD = 12,
		ANOTHER = 13,
		PROPERTY_RIGHT = 14,
		NON_OPERATING_GAIN = 15,
		INSURANCE_PREMIUM = 16,
		SALES_TAX = 17,
		RESORT_TAX = 18,
		DEPOSIT = 19,
		EXPENSE = 20,
		PENSION_INSURANCE_IP = 21,
		PENSION_INSURANCE = 22,
		MEDICAL_INSURANCE_IP = 23,
		MEDICAL_INSURANCE = 24,
		SOCIAL_INSURANCE = 25,
		CASINO_PAYMENT = 26,
		AGENT_PAYMENT = 27,
		EXCISE_WITHOUT_MARK = 30,
		EXCISE_WITH_MARK = 31,
		NON_EXCISE_WITHOUT_MARK = 32,
		NON_EXCISE_WITH_MARK = 33;

}