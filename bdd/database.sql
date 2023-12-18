CREATE TABLE employees  (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prénom  VARCHAR(155),
    nom VARCHAR(255),
    poste VARCHAR(255),
    email VARCHAR(100) UNIQUE
);

CREATE TABLE formations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    durée INT,
    abréviation VARCHAR(255),
    RNCP_niveau INT,
    nombre_module BOOLEAN
);

CREATE TABLE modules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    durée INT,
    module_id INT,
    FOREIGN KEY (module_id) REFERENCES Formation(id)
);
