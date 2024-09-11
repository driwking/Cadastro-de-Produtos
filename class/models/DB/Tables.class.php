<?php

class Tables extends Conextion {
    public function recreateTables(){
        $query = self::prepare("CREATE TABLE IF NOT EXISTS Adicionais (
            id int PRIMARY KEY UNIQUE,
            nome varchar(255) NOT NULL,
            descricao varchar(500),
            valor float NOT NULL
        )");
        $query->execute();
        $query = self::prepare("CREATE TABLE IF NOT EXISTS Tamanhos (
            id int PRIMARY KEY UNIQUE,
            nome varchar(255) NOT NULL,
            descricao varchar(500),
            valor float NOT NULL             
        )");
        $query->execute();
        $query = self::prepare("CREATE TABLE IF NOT EXISTS Categorias (
            id int PRIMARY KEY UNIQUE,
            nome varchar(255) NOT NULL,
            descricao varchar(500),
            idTamanho int,
            FOREiGN KEY (idTamanho) REFERENCES Tamanhos(id)
        )");
        $query->execute();
        $query = self::prepare("CREATE TABLE IF NOT EXISTS Pizzas (
            id int PRIMARY KEY UNIQUE,
            nome varchar(255) NOT NULL,
            descricao varchar(500),
            idCategoria int,
            FOREiGN KEY (idCategoria) REFERENCES Categorias(id) 
        );");
        $query->execute();
    }
}


?>