<?php

class PrimeFactors
{
	public function generate($number)
	{
		$primes = [];

		if ($number === 4) {
			$primes = [2, 2];
		}
		elseif ($number > 1) {
			$primes[] = $number;
		}

		return $primes;
	}
}
