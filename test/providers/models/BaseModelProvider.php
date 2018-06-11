<?php
/**
 * Created by PhpStorm.
 * User: Yoom Team. Denis Kolpakov <dkolpakov@yoom.team>
 * Date: 12.06.2018
 * Time: 1:47
 */

namespace Test\Providers\Models;

use Yoom\Base\BaseModel;

class BaseModelProvider extends BaseModel
{
	protected $_data = [
		'id'   => [
			self::PROPERTY_TYPE     => self::TYPE_INT,
			self::PROPERTY_REQUIRED => TRUE,
			self::PROPERTY_LIMITS   => [
				self::LIMIt_MIN => 0,
				self::LIMIt_MAX => 10,
			],
		],
		'name' => [
			self::PROPERTY_TYPE     => self::TYPE_STRING,
			self::PROPERTY_REQUIRED => TRUE,
		],
		'age'  => [
			self::PROPERTY_TYPE     => self::TYPE_INT,
			self::PROPERTY_REQUIRED => FALSE,
			self::PROPERTY_DEFAULT => 23,
		],
		'weight' => [
			self::PROPERTY_TYPE => self::TYPE_NUMERIC,
		],
		'is_died' => [
			self::PROPERTY_TYPE => self::TYPE_BOOLEAN,
			self::PROPERTY_REQUIRED => TRUE,
		],
		'registration_date_time' => [
			self::PROPERTY_TYPE => self::TYPE_OBJECT,
			self::PROPERTY_OBJECT_CLASS => \DateTime::class,
			self::PROPERTY_REQUIRED => TRUE,
		],
		'default_date_time' => [
			self::PROPERTY_TYPE => self::TYPE_OBJECT,
			self::PROPERTY_OBJECT_CLASS => \DateTime::class,
			self::PROPERTY_REQUIRED => TRUE,
			self::PROPERTY_OBJECT_FACTORY => [\DateInterval::class, 'createFromDateString'],
		],
	];
}