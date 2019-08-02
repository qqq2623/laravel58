<?php

namespace Dotenv\Regex;

abstract class Result {
	/**
	 * Get the error value, if possible.
	 *
	 * @return string
	 */
	public function getSuccess() {
		return $this->success()->get();
	}

	/**
	 * Get the success option value.
	 *
	 * @return \PhpOption\Option
	 */
	abstract public function success();

	/**
	 * Map over the success value.
	 *
	 * @param callable $f
	 *
	 * @return \Dotenv\Regex\Result
	 */
	abstract public function mapSuccess(callable $f);

	/**
	 * Get the error value, if possible.
	 *
	 * @return string
	 */
	public function getError() {
		return $this->error()->get();
	}

	/**
	 * Get the error option value.
	 *
	 * @return \PhpOption\Option
	 */
	abstract public function error();

	/**
	 * Map over the error value.
	 *
	 * @param callable $f
	 *
	 * @return \Dotenv\Regex\Result
	 */
	abstract public function mapError(callable $f);
}
