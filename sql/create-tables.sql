CREATE TABLE kayttaja (
	id serial primary key,
	name varchar(15) NOT NULL,
	password varchar(50) NOT NULL
);

CREATE TABLE mokki (
	id serial primary key,
	name varchar (30) NOT NULL
);

CREATE TABLE varaus (
	id serial primary key,
	kayttaja_id integer references kayttaja(id) ON DELETE cascade
                                      			ON UPDATE cascade,
	mokki_id integer references mokki(id) 	ON DELETE cascade
                                      		ON UPDATE cascade,
	alkupvm date NOT NULL,
	loppupvm date NOT NULL
);

CREATE TABLE puute (
	id serial primary key,
	kayttaja_id integer references kayttaja(id)	 ON DELETE cascade
                                     			 ON UPDATE cascade,
	mokki_id integer references mokki(id) 	ON DELETE cascade
                                      		ON UPDATE cascade,
	kuvaus varchar(200) NOT NULL,
	luotu date NOT NULL
);

CREATE TABLE tarvike (
	id serial primary key,
	mokki_id integer references	mokki(id)	ON DELETE cascade
                                     		ON UPDATE cascade,
	kuvaus varchar(200) NOT NULL,
	luotu date NOT NULL
);