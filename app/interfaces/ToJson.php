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
interface ToJson
{
	public function toJson(): string;
}