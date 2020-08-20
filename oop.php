<?php

/**
 * 
 */
class Fund
{
	public $fund;
	
	function __construct($initialfund)
	{
		$this->fund=$initialfund;
	}


	public function addfund($money)
	{
		$this->fund += $money;

	}

	function deductfund($money)
	{
		$this->fund -=$money;
	}

	function gettotalmoney()
	{
		echo "our total money is {$this->fund}\n";
	}
}

$ourfund = new Fund(100);
$ourfund->gettotalmoney();

$ourfund->addfund(10);
$ourfund->gettotalmoney();
?>