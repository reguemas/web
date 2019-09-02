create table PIZZA
(
	nom_pizza varchar(100),
	temps_preparacio integer,
	preu numeric(5,2),
	primary key (nom_pizza)
)engine=innodb;

create table INGREDIENT
(
	nom_ingredient varchar(100),
	unitat_mesura char(3),
	tipus char,
	primary key (nom_ingredient)
)engine = innodb;

create table CONTE
(
	nom_pizza varchar(100),
	nom_ingredient varchar(100),
	quantitat numeric(5,2),
	primary key (nom_pizza, nom_ingredient),
	foreign key (nom_pizza) references PIZZA(nom_pizza),
	foreign key (nom_ingredient) references INGREDIENT(nom_ingredient)
)engine = innodb;

create table CLIENT
(
	dni char(9),
	nom_client varchar(100),
	cognoms varchar(100),
	adreça varchar(100),
	poblacio varchar(100),
	telefon varchar(13),
	email varchar(100),
	primary key (dni)
)engine = innodb;

create table COMANDA
(
	num_comanda int auto_increment not null,
	dataHora datetime,
	nom_pizza varchar(100),
	nom_ingredient varchar(100),
	dni_client char(9),
	primary key (num_comanda),
	foreign key (nom_pizza) references PIZZA(nom_pizza),
	foreign key (nom_ingredient) references INGREDIENT(nom_ingredient),
	foreign key (dni_client) references CLIENT(dni)
)engine = innodb;

insert into ingredient values ("Pernil","gr","C");
insert into ingredient values ("Xampinyó","gr","V");
insert into ingredient values ("Oliva","gr","V");
insert into ingredient values ("Formatge","gr","L");
insert into ingredient values ("Espàrrecs","gr","V");
insert into ingredient values ("Pepperoni","gr","C");
insert into ingredient values ("Vedella","gr","C");
insert into ingredient values ("Salsa Barbacoa","ml","V");
insert into ingredient values ("Pinya","gr","V");

insert into pizza values ("Margarita",15,8.50);
insert into pizza values ("Quatre formatges",10,8.50);
insert into pizza values ("Mediterrània",14,8.50);
insert into pizza values ("Ranxera",18,10.0);
insert into pizza values ("Quatre estacions",10,8.0);
insert into pizza values ("Hawaiana",18,7.50);

insert into conte values ("Margarita","Pernil",50);
insert into conte values ("Margarita","Xampinyó",15);
insert into conte values ("Margarita","Oliva",5);
insert into conte values ("Quatre formatges","Formatge",200);
insert into conte values ("Mediterrània","Pernil",50);
insert into conte values ("Mediterrània","Espàrrecs",30);
insert into conte values ("Mediterrània","Oliva",30);
insert into conte values ("Mediterrània","Xampinyó",20);
insert into conte values ("Ranxera","Pepperoni",40);
insert into conte values ("Ranxera","Vedella",100);
insert into conte values ("Ranxera","Salsa Barbacoa",10);
insert into conte values ("Quatre estacions","Pernil",40);
insert into conte values ("Quatre estacions","Xampinyó",30);
insert into conte values ("Quatre estacions","Formatge",40);
insert into conte values ("Quatre estacions","Pepperoni",30);
insert into conte values ("Hawaiana","Formatge",30);
insert into conte values ("Hawaiana","Vedella",50);
insert into conte values ("Hawaiana","Pinya",40);

insert into client values ("45673821N","Joan","Garcia Torrent","C/Santaló, 15","Barcelona","+34673867471","joantorrent23@gmail.com");
insert into client values ("54321897M","Jordi","Mediona Torregrossa","C/Muntaner, 153","Barcelona","+34546333221","jordimediona@hotmail.com");
insert into client values ("37345654V","Josep","Tarrés Quintana","C/Aribau, 135","Barcelona","+34454714321","jtarres@gmail.com");
insert into client values ("24675821O","Marc","Vilagrassa Comas","C/Sepulveda, 214","Barcelona","+34721892345","marcvilagrassa@gmail.com");