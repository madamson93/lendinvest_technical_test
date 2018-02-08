<?php

namespace LendInvest;

use LendInvest\Entity\Loan;
use LendInvest\Entity\Tranch;

class Investment
{


	public function processInvestmentInTranch(string $investorName, int $investmentAmount, string $selectedTranch, string $investmentDate): bool
	{

	}

	public function saveInvestmentToArray(string $investorName, string $nameofTranch, int $amountInvested, string $dataInvested)
	{

	}

	public function returnInvestmentReport(string $reportStartDate, string $reportEndDate): array
	{

	}

}