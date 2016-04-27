<?php

namespace Blizzard\Model\Modules;

require_once MODEL_PATH . 'Model.php';

class Pet extends \Blizzard\Model\Model
{

    public function updateAll($pets = null)
    {
        if(!is_array($pets)) { return false; }

        foreach($pets as $pet)
        {
            $this->processPet($pet);

            try
            {
                if(!$this->havePetBd($pet->creatureId))
                {
                    $this->mapper->pet->persist($pet);
                    continue;
                }

                $this->editPet($pet);
            }
            catch(\Exception $e) { continue; } // Depois criar um armazenador pra informar quais não foram gravados.
        }

        $this->mapper->flush();

        return true;
    }

    private function havePetBd($pet_id)
    {
        if(!$this->mapper->pet(['creatureId' => $pet_id])->fetch()) { return false; }

        return true;
    }

    private function editPet($pet)
    {
        $pet_bd = $this->mapper->pet(['creatureId' => $pet->creatureId])->fetch();

        foreach($pet as $attribute => $value) { $pet_bd->$attribute = $value; }

        $this->mapper->pet->persist($pet_bd);
    }

    private function processPet($pet)
    {
        if(!($pet instanceof \stdClass)) { throw new \Exception('Pet não é um objeto do tipo stdClass.'); }

        $bd_fields = ['canBattle' , 'creatureId' , 'name' , 'family', 'icon' , 'qualityId' , 'typeId'];

        foreach($pet as $attribute => $value)
        {
            if(!in_array($attribute , $bd_fields)) { unset($pet->$attribute); }
        }

        if(!isset($pet->creatureId)) { throw new \Exception('Não foi informado o ID do Pet pela API'); }

        if(!is_int($pet->creatureId)) { throw new \Exception('ID não é um número inteiro.'); }
    }

}