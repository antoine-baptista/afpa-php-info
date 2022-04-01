<?php

class RIBValidator
{
	private $bankCode;
	private $agencyCode;
	private $accountNumber;
	private $ribKey;
	
    //  constructeur
	public function __construct($bankCode, $agencyCode, $accountNumber, $ribKey)
	{
		$this->bankCode = (int) $bankCode;
		$this->agencyCode = (int) $agencyCode;
		$this->accountNumber = (string) $accountNumber;
		$this->ribKey = (int) $ribKey;
	}

    // méthode de la classe
    public function isValid()
    {
        $account = (int) strtr(strtoupper($this->accountNumber),
                                'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
                                '12345678912345678923456789');
        $key = 97 - ((89 * $this->bankCode + 15 * $this->agencyCode + 3 * $account) % 97);
        
        var_dump($account);
        // my_var_dump($key);
        

        return $key === $this->ribKey;
      
    }
    
    public function afficherRIB()
    {
        echo $this->bankCode . " / " . $this->agencyCode . " / " . $this->accountNumber . " / " . $this->ribKey;
        
    }
}
