--
-- Base de données :  `speculi`
--

CREATE DATABASE IF NOT EXISTS speculi DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE speculi;

-- --------------------------------------------------------

--
-- Structure de la table `quantite`
--

CREATE TABLE IF NOT EXISTS quantite (
    id     SMALLINT NOT NULL AUTO_INCREMENT,
    nombre SMALLINT NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB;


-- --------------------------------------------------------

--
-- Structure de la table `mesure`
--

CREATE TABLE IF NOT EXISTS mesure (
    id    SMALLINT                            NOT NULL AUTO_INCREMENT,
    unite VARCHAR(20) COLLATE utf8_general_ci NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE = utf8_general_ci;


-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS pays (
    id  SMALLINT                            NOT NULL AUTO_INCREMENT,
    nom VARCHAR(40) COLLATE utf8_general_ci NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE = utf8_general_ci;

--
-- Contenu de la table `pays`
--

INSERT INTO pays (id, nom)
VALUES (NULL, '');
INSERT INTO pays (id, nom)
VALUES (NULL, 'France');
INSERT INTO pays (id, nom)
VALUES (NULL, 'Vietnam');
INSERT INTO pays (id, nom)
VALUES (NULL, 'Espagne');

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE IF NOT EXISTS recette (
    id           SMALLINT                            NOT NULL AUTO_INCREMENT,
    libelle      VARCHAR(40) COLLATE utf8_general_ci NOT NULL,
    photo        VARCHAR(30) COLLATE utf8_general_ci NULL,
    type         VARCHAR(20) COLLATE utf8_general_ci NOT NULL,
    pourCombien  TINYINT                             NULL,
    vegetarienne BOOLEAN DEFAULT FALSE,
    idPays       SMALLINT                            NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES pays (id)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE = utf8_general_ci;

INSERT INTO recette (id, libelle, photo, type, pourCombien, vegetarienne, idPays)
VALUES (NULL, 'Choucroute', 'choucroute.jpg', 'Plat', 4, FALSE, 1);
INSERT INTO recette (id, libelle, photo, type, pourCombien, vegetarienne, idPays)
VALUES (NULL, 'Pot au feu', 'pot-au-feu.jpg', 'Plat', 6, FALSE, 1);
INSERT INTO recette (id, libelle, photo, type, pourCombien, vegetarienne, idPays)
VALUES (NULL, 'Pho', 'pho.jpg', 'Soupe', 8, FALSE, 2);
INSERT INTO recette (id, libelle, photo, type, pourCombien, vegetarienne, idPays)
VALUES (NULL, 'Boudin aux pommes', 'boudin-aux-pommes.jpg', 'Plat', 3, FALSE, 1);
INSERT INTO recette (id, libelle, photo, type, pourCombien, vegetarienne, idPays)
VALUES (NULL, 'Paella', 'paella.jpg', 'Plat', 10, FALSE, 3);

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE IF NOT EXISTS ingredient (
    id     SMALLINT                            NOT NULL AUTO_INCREMENT,
    label  VARCHAR(40) COLLATE utf8_general_ci NOT NULL,
    infos  TINYTEXT COLLATE utf8_general_ci,
    idQuan SMALLINT,
    idMesu SMALLINT,
    PRIMARY KEY (id),
    FOREIGN KEY (idQuan) REFERENCES quantite (id),
    FOREIGN KEY (idMesu) REFERENCES mesure (id)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE = utf8_general_ci;


-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE IF NOT EXISTS participer (
    idRec  SMALLINT NOT NULL,
    idIngr SMALLINT NOT NULL,
    FOREIGN KEY (idRec) REFERENCES recette (id),
    FOREIGN KEY (idIngr) REFERENCES ingredient (id)
) ENGINE = InnoDB;


-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE IF NOT EXISTS etape (
    id     SMALLINT                     NOT NULL AUTO_INCREMENT,
    num    TINYINT                      NOT NULL,
    detail TEXT COLLATE utf8_general_ci NOT NULL,
    idRec  SMALLINT                     NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (idRec) REFERENCES recette (id)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE = utf8_general_ci;


-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS user (
    id     SMALLINT                             NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(40) COLLATE utf8_general_ci  NOT NULL,
    pwd    VARCHAR(100) COLLATE utf8_general_ci NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE = utf8_general_ci;
