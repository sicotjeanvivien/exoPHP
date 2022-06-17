<?php

class Author
{
	const PRENOM_ENTRE_PARENTHESE = "PRENOM_ENTRE_PARENTHESE";
	const PRENOM_APRES_VIRGULE = "PRENOM_APRES_VIRGULE";

	private string $nom;
	private string $prenom;

	public function __construct(string $patronyme)
	{
		$array = explode(" ", $patronyme);
		$this->nom = $array[1];
		$this->prenom = $array[0];
	}

	public function __toString()
	{
		return "$this->prenom $this->nom";
	}

	public function format(?string $format = null): ?string
	{
		$retour = "Format inconnu";
		switch ($format) {
			case self::PRENOM_ENTRE_PARENTHESE:
				$retour = "$this->nom ($this->prenom)";
				break;

			case self::PRENOM_APRES_VIRGULE:
				$retour = "$this->nom, $this->prenom";
				break;

			case null:
				$retour = "$this->prenom $this->nom";
				break;
		}

		return $retour;
	}
}
