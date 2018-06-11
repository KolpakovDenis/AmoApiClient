<?php
/**
 * Created by PhpStorm.
 * User: Yoom Team. Denis Kolpakov <dkolpakov@yoom.team>
 * Date: 12.06.2018
 * Time: 1:21
 */

namespace Yoom\Base;

use Yoom\Interfaces\ToArray;
use Yoom\Interfaces\ToJson;
use Yoom\Interfaces\BaseModel as BaseModelInterface;

/**
 * Class BaseModel
 * @author  Yoom Team. Denis Kolpakov <dkolpakov@yoom.team>
 * @package Yoom\Base
 */
abstract class BaseModel implements ToArray, ToJson, BaseModelInterface
{
	/**
	 * @var array
	 */
	protected $_data = [];

	/**
	 * BaseModel constructor.
	 *
	 * @param array $data
	 */
	public function __construct(array $data = [])
	{
		$this->beforeInit();
		$data = $this->convertData($data);
	}

	/**
	 * Вызывается первой при инициализации модели.
	 * Если необходимо произвести какие-либо действия перед инициализацие, необходимо переопределить данный метод.
	 *
	 * @return void
	 */
	protected function beforeInit(): void
	{

	}

	/**
	 * @param array $data
	 *
	 * @return array
	 */
	protected function convertData(array $data = []): array
	{
		return $data ?: [];
	}

	protected function set_data(array $data = []): void
	{
		foreach ($data as $code => $value) {

		}
	}

	/**
	 * @param string $code
	 * @param mixed  $value
	 */
	protected function set_property(string $code, $value)
	{

	}

	/**
	 * @return array
	 */
	public function toArray(): array {
		$result = [];

		foreach ($this->_data as $code => $data) {
			$result[$code] = $data instanceof ToArray ? $data->toArray() : $data;
		}

		return $result;
	}

	/**
	 * @return string
	 */
	public function toJson(): string
	{
		$resultArray = [];
		foreach ($this->toArray() as $code => $data) {
			$resultArray[$code] = $data instanceof ToJson ? $data->toJson() : $data;
		}

		return json_encode($resultArray);
	}
}