<?php
class Adicionais extends Model {
    
    private Verify $testes;
    private int | null $id;
    private string $nome;
    private string $descricao;
    private float $valor;
    private string $table;
    private array $camps = [];

    public function __construct(){
        $this->table = "Adicionais";
        $this->camps[] = "id";
        $this->camps[] = "nome";
        $this->camps[] = "descricao";
        $this->camps[] = "valor";
        $this->testes = new Verify();
        $this->conexion();
    }
    public function CampComparation() : string {
        return $this->nome;
    }
    public function getCamps() : array {
        return $this->camps;
    }
    public function getTable() : string {
        return $this->table;
    }
    public function setVal(string $nome, string $descricao, float $valor){
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->setId();
    }
    public function setId(){
        $query = "SELECT id FROM adicionais WHERE nome = :nome";
        $stm = self::prepare($query);
        $stm->bindValue(':nome', $this->nome);
        $stm->execute();

        $result = $stm->fetch();
        $this->id = $result['id'] ?? null;
    }
    public function getId() : int | null {
        return $this->id;
    }

    public function createEntitis(){
        if($this->testes->entExist($this)) throw new Errors("Entidade já existe no banco");
        $query = 'INSERT INTO adicionais(nome, descricao, valor) values(:nome,:descr,:val)';
        
        $stm = self::prepare($query);        
        $stm->bindValue(':nome',$this->nome, PDO::PARAM_STR);
        $stm->bindValue(':descr',$this->descricao, PDO::PARAM_STR);
        $stm->bindValue(':val',$this->valor, PDO::PARAM_STR);
        $stm->execute();
    }
    public function readEntitis() : array {
        $query = 'SELECT * FROM adicionais WHERE id = :id';
        $stm = self::prepare($query);
        $stm->bindValue(':id', $this->id);
        $stm->execute();

        $result = $stm->fetchAll(self::FETCH_ASSOC);
        return $result;
    }
    public function readEntitisAll(){
        $query = 'SELECT * FROM adicionais';
        $stm = self::prepare($query);
        $stm->execute();
        return $stm->fetchAll(self::FETCH_ASSOC);
    }
    public function updateEntitis(){}
    public function deleteEntitis(){
        $query = "DELETE FROM {$this->table} WHERE id = :id";
        $stm = self::prepare($query);
        $stm->bindValue(':id', $this->id);
        $stm->execute();
        return $stm->fetchAll();
    }
}




?>