<?php


class Verify extends Conextion {
    public function entExist(Model $ent) : bool{
        if(!is_numeric($ent->getId()) && !is_null($ent->getId())) throw new Exception('Não é um tipo de id válido');
        $query = "SELECT " . $ent->getCamps()[0] . ", " . $ent->getCamps()[1] ." FROM "  . $ent->getTable();
        $stm = self::prepare($query);
        $stm->execute();
        
        $result = $stm->fetch();
        if($ent->CampComparation() == $result[$ent->getCamps()[1]]) return true;
        return false;
    }
}


?>