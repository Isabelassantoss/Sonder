-- CREATE TABLE usuarios (
--     id SERIAL PRIMARY KEY,
--     email VARCHAR(100) NOT NULL,
--     senha VARCHAR(100) NOT NULL
-- );

-- SELECT * FROM usuarios;

-- CREATE TABLE musicas (
--     id SERIAL PRIMARY KEY,
--     titulo VARCHAR(100) NOT NULL,
--     artista VARCHAR(100) NOT NULL,
--     album VARCHAR(100),
--     genero VARCHAR(50),
--     nota NUMERIC(2,1),
--     comentario TEXT,
--     data_avaliacao DATE NOT NULL,
--     usuario_id INTEGER REFERENCES usuarios(id)
-- );

-- SELECT * FROM musicas;

