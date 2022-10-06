<?php

declare(strict_types=1);

namespace Phant\Env;

class Manager
{
	public static function set(string $key, string $value, bool $force = false): void
	{
		if (!$force && false !== getenv($key)) {
			throw new \Exception('Env var "' . $key . '" is already defined');
		}

		putenv($key, $value);
	}

	public static function get(string $key, string $default = null): ?string
	{
		$value = getenv($key);

		if (false === $value) {
			if (is_null($default)) {
				$caller = debug_backtrace()[0];

				throw new \Exception('Env var "' . $key . '" is not defined. (Required in file ' . $caller['file'] . ' at line ' . $caller['line'] . ')');
			}

			return $default;
		}

		return $value;
	}
}
