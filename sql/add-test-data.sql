INSERT INTO kayttaja (name, password) VALUES
	('testi', 'testaus'),
	('testaaja', 'testeri');

INSERT INTO mokki (name) VALUES
	('mokki1'),
	('mokki2');
	
INSERT INTO varaus (kayttaja_id, mokki_id, alkupvm, loppupvm) VALUES
	(1, 1, to_date('2014-01-22', 'YYYY-MM-DD'), to_date('2014-04-01', 'YYYY-MM-DD')),
	(2, 2, to_date('2014-02-15', 'YYYY-MM-DD'), to_date('2014-03-01', 'YYYY-MM-DD'));
	
INSERT INTO puute (kayttaja_id, mokki_id, kuvaus, luotu) VALUES
	(1, 1, 'Maitoa tarvitaan', CURRENT_DATE),
	(2, 2, 'Juustoa', CURRENT_DATE);
	
INSERT INTO tarvike (mokki_id, kuvaus, luotu) VALUES
	(1, 'Leipää', CURRENT_DATE),
	(2, 'Kalaa', CURRENT_DATE);