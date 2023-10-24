CREATE DATABASE Literie3000;

use Literie3000;

CREATE TABLE matelas (
    id SMALLINT PRIMARY KEY auto_increment,
    nom VARCHAR(100) not null,
    marque VARCHAR(100) not null,
    images VARCHAR(250) not null,
    prix INT not null,
    promotion SMALLINT
);



INSERT INTO matelas
(nom, marque, images, prix, promotion)
VALUES
("Matelas Brigitte", "Epeda", "https://eu-images.contentstack.com/v3/assets/blt167b24547e5b1906/blt1f74a8db0f0ad2ca/647db10e3e9a67df9a9f5333/Bundle_Select_(1).png?width=1920&format=pjpg&auto=webp&quality=80&disable=upscale", 759, 529),
("Matelas Marine", "Dreamway", "https://cdn.conforama.fr/prod/product/image/8c7f/G_CNF_X16884930_B.jpeg", 809, 709),
("Matelas Positive Attitude", "Bultex", "https://hypnia.fr/cdn/shop/files/ambi-fanny.jpg?v=1685460751&width=2048", 759, 529),
("Matelas Buro Club", "Epeda", "https://media.intex.fr/shop/5838-large_default/64414np-lit-gonflable-comfort-plush-2-personnes.jpg", 1019 , 500),
("Matelas Samurai", "Dorsoline", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMxVuBImckU8RvIG67EzJTfUahqPBcXA6_Ig&usqp=CAU", 609, 100),
("Matelas Princesse", "MemoryLine", "https://www.maison-aubertin.com/23433-large_default/matelas-ressorts-ensachees-et-memoire-de-forme-dolce-vita.jpg", 509, 100);