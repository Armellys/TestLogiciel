<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $_count = 8;

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->_count;
    }
    public function setCount(int $number): void
    {
        $this->_count = $number;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if (($this->_count-$number) < 0) {
            throw new InvalidArgumentException('Trop grand nombre de cheval à enlever');
        }
        $this->_count -= $number;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à ajouter
     *
     * @return void
     */
    public function addPoney(int $number): void
    {
        if (($this->_count+$number) > 15) {
            throw new InvalidArgumentException('Trop grand nombre de cheval dans le champ');
        }
        $this->_count += $number;
    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }

    public function placeAvailable(): bool
    {
        if($this->_count >=15){
            return FALSE;
        }
        else if($this->_count < 0){
            throw new Exception('Erreur: Nombre de chevaux négatif dans le champ');
        }else{
            return TRUE;
        }
    }
}
?>
