<?php

namespace Blizzard\Model\Modules;

require_once MODEL_PATH . 'Model.php';

use Respect\Relational\Sql;

class Boss extends \Blizzard\Model\Model
{

    public function updateAll($bosses = null)
    {
        if(!is_array($bosses)) { return false; }

        foreach($bosses as $boss)
        {
            $this->processBoss($boss);

            try
            {
                if(!$this->haveBossBd($boss->boss_id))
                {
                    $this->mapper->boss->persist($boss);
                    continue;
                }

                $this->editBoss($boss);
            }
            catch(\Exception $e) { continue; } // Depois criar um armazenador pra informar quais não foram gravados.
        }

        $this->mapper->flush();

        return true;
    }

    private function haveBossBd($boss_id)
    {
        if(!$this->mapper->boss(['boss_id' => $boss_id])->fetch()) { return false; }

        return true;
    }

    private function editBoss($boss)
    {
        $boss_bd = $this->mapper->boss(['boss_id' => $boss->boss_id])->fetch();

        foreach($boss as $attribute => $value) { $boss_bd->$attribute = $value; }

        $this->mapper->boss->persist($boss_bd);
    }

    private function processBoss($boss)
    {
        if(!($boss instanceof \stdClass)) { throw new \Exception('Boss não é um objeto do tipo stdClass.'); }

        $bd_fields = ['name' , 'urlSlug' , 'description' , 'zoneId', 'availableInNormalMode' ,
                        'availableInHeroicMode' , 'health' , 'heroicHealth' , 'level' , 'heroicLevel' , 'journalId'];

        foreach($boss as $attribute => $value)
        {
            if((string)$attribute === 'id') { $boss_id = $boss->id; }
            if(!in_array($attribute , $bd_fields)) { unset($boss->$attribute); }
        }

        if(!isset($boss_id)) { throw new \Exception('Não foi informado o ID do Boss pela API'); }

        if(!is_int($boss_id)) { throw new \Exception('ID não é um número inteiro.'); }

        $boss->boss_id = $boss_id;
    }

}