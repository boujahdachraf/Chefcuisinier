CREATE TABLE utilisateur(
id_user int PRIMARY KEY AUTO_INCREMENT not null,
    name varchar (200) not null,
    email varchar (200) UNIQUE not null,
    mots_passe varchar (200)UNIQUE not null,
    role ENUM ('user','chef') not null
);


CREATE TABLE reservation (
statut ENUM('en attente', 'acceptee', 'refusee', 'annulee') DEFAULT 'en attente',
id_reserv int PRIMARY key AUTO_INCREMENT not null ,
    id_user int not null,
    FOREIGN key (id_user) REFERENCES utilisateur (id_user) ON DELETE CASCADE,
    id_chef int not null,
    FOREIGN key ( id_chef) REFERENCES utilisateur (id_user) ON DELETE CASCADE
);

CREATE TABLE menu (
    id_menu int PRIMARY KEY AUTO_INCREMENT not null,
    id_chef int,
    FOREIGN key ( id_chef) REFERENCES utilisateur (id_user) ON DELETE CASCADE,
    titre varchar (200) not null,
    description varchar(200) not null
);
CREATE TABLE plat (
id_plat int PRIMARY key AUTO_INCREMENT not null,
    nom_plat varchar(200),
    imqge VARCHAR(200) NOT NULL,
    prix varchar (200),
    id_menu int,
    FOREIGN key (id_menu) REFERENCES menu(id_menu) on DELETE CASCADE
);