<?php

namespace LendInvest\Entity;

class Tranch
{
	const maximum_amount_of_investment = 1000;

	public $name;
	public $interest_rate;
	public $current_total;

	/**
	 * Tranch constructor.
	 * @param string $name
	 * @param int $interest_rate
	 * @param int $current_total
	 */
	public function __construct(string $name, int $interest_rate, int $current_total)
	{
		$this->name = $name;
		$this->interest_rate = $interest_rate;
		$this->current_total = $current_total;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(string $name): void
	{
		$this->name = $name;
	}

	/**
	 * @return int
	 */
	public function getInterestRate(): int
	{
		return $this->interest_rate;
	}

	/**
	 * @param int $interest_rate
	 */
	public function setInterestRate(int $interest_rate): void
	{
		$this->interest_rate = $interest_rate;
	}

	/**
	 * @return int
	 */
	public function getCurrentTotal(): int
	{
		return $this->current_total;
	}

	/**
	 * @param int $current_total
	 */
	public function setCurrentTotal(int $current_total): void
	{
		$this->current_total = $current_total;
	}

}