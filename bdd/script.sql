create database findumois;
use findumois;

/*crée une table */

create table salaire(
    /*initier les variable
    id unique (primary key) qui s'incremente automatiquement*/
    id int auto_increment primary key,
    id_user int,
    /* not null= obligatoire*/
    libelle varchar(255) not null,
    montant float not null,
    FOREIGN KEY (id_user) REFERENCES user(id)
);

create table depense(
    /*initier les variable
    id unique (primary key) qui s'incremente automatiquement*/
    id int auto_increment primary key,
    id_user int,
    id_cate int,
    /* not null= obligatoire*/
    libelle varchar(255) not null,
    categorie varchar(255) not null,
    FOREIGN KEY (id_user) REFERENCES user(id),
    FOREIGN KEY (id_cate) REFERENCES categorie(id),

    montant float not null
);

create table epargne(
    /*initier les variable
    id unique (primary key) qui s'incremente automatiquement*/
    id int auto_increment primary key,
    id_user int,
    /* not null= obligatoire*/
    mois varchar(255) not null unique,
    FOREIGN KEY (id_user) REFERENCES user(id),
    reste float not null
);

