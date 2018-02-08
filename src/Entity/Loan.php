<?php

namespace LendInvest\Entity;

class Loan
{
	public $start_date;
	public $end_date;
	public $total_invested;

	/**
	 * Loan constructor.
	 * @param \DateTime $start_date
	 * @param \DateTime $end_date
	 * @param int $total_invested
	 */
	public function __construct(\DateTime $start_date, \DateTime $end_date, int $total_invested)
	{
		$this->start_date = $start_date;
		$this->end_date = $end_date;
		$this->total_invested = $total_invested;
	}

	/**
	 * @return \DateTime
	 */
	public function getStartDate(): \DateTime
	{
		return $this->start_date;
	}

	/**
	 * @param \DateTime $start_date
	 */
	public function setStartDate(\DateTime $start_date): void
	{
		$this->start_date = $start_date;
	}

	/**
	 * @return \DateTime
	 */
	public function getEndDate(): \DateTime
	{
		return $this->end_date;
	}

	/**
	 * @param \DateTime $end_date
	 */
	public function setEndDate(\DateTime $end_date): void
	{
		$this->end_date = $end_date;
	}

	/**
	 * @return int
	 */
	public function getTotalInvested(): int
	{
		return $this->total_invested;
	}

	/**
	 * @param int $total_invested
	 */
	public function setTotalInvested(int $total_invested): void
	{
		$this->total_invested = $total_invested;
	}

}