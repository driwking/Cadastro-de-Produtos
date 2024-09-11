CREATE TABLE IF NOT EXISTS Adicionais (
    id int PRIMARY KEY UNIQUE,
    nome varchar(255) NOT NULL,
    descricao varchar(500),
    valor float NOT NULL
);

CREATE TABLE IF NOT EXISTS Tamanhos (
    id int PRIMARY KEY UNIQUE,
    nome varchar(255) NOT NULL,
    descricao varchar(255),
    valor float NOT NULL
);

CREATE TABLE IF NOT EXISTS Categorias (
    id int PRIMARY KEY UNIQUE,
    nome varchar(255) NOT NULL,
    descricao varchar(500),
    idTamanho int,
    FOREiGN KEY (idTamanho) REFERENCES Tamanhos(id) 
);

CREATE TABLE IF NOT EXISTS Pizzas (
    id int PRIMARY KEY UNIQUE,
    nome varchar(255) NOT NULL,
    descricao varchar(500),
    idCategoria int,
    FOREiGN KEY (idCategoria) REFERENCES Categorias(id) 
);