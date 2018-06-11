<?php
/**
 * Created by PhpStorm.
 * User: Yoom Team. Denis Kolpakov <dkolpakov@yoom.team>
 * Date: 12.06.2018
 * Time: 1:30
 */

namespace Yoom\Interfaces;

/**
 * Interface ToArray
 * @package Yoom\Interfaces
 */
interface BaseModel
{
	const PROPERTY_TYPE = 'type';

	const TYPE_INT = 'int';
	const TYPE_NUMERIC = 'numeric';
	const TYPE_STRING = 'string';
	const TYPE_ARRAY = 'array';
	const TYPE_BOOLEAN = 'boolean';
	const TYPE_OBJECT = 'object';

	const PROPERTY_OBJECT_CLASS = 'class';
	const PROPERTY_OBJECT_FACTORY = 'factory';

	const PROPERTY_REQUIRED = 'required';

	const PROPERTY_DEFAULT = 'default';

	const PROPERTY_LIMITS = 'limits';

	const LIMIt_MIN = 'min';
	const LIMIt_MAX = 'max';
}