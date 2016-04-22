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
            if(isset($boss->npcs)) { unset($boss->npcs); } // Precisamos estudar como salvar npcs se necessário.
            if(isset($boss->location)) { unset($boss->location); } // Precisamos estudar como salvar npcs se necessário.

            if(isset($boss->id))
            {
                $boss->boss_id = $boss->id;
                unset($boss->id);
            }

            try
            {
                if(!$this->haveBossBd($boss->boss_id))
                {
                    $this->saveNewBoss($boss);
                    continue;
                }

                $this->editBoss($boss);
            }
            catch(\Exception $e) { continue; } // Depois criar um armazenador pra informar quais não foram gravados.
        }

        return true;
    }

    private function haveBossBd($boss_id)
    {
        if(!is_int($boss_id)) { throw new Exception('ID não é um número inteiro.'); }

        if(!$this->mapper->boss(array('boss_id' => $boss_id))->fetch()) { return false; }

        return true;
    }

    private function saveNewBoss($boss)
    {
        $this->mapper->boss->persist($boss);
        $this->mapper->flush();
    }

    private function editBoss($boss)
    {
        $retorno = Sql::update('boss')
                        ->set((array)$boss)
                        ->where(array('boss_id' => $boss->boss_id));

        echo "<pre>"; print_r($retorno); exit;
    }

}