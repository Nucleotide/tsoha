INSERT INTO kayttajat VALUES
	('testi', 'testaus'),
	('testaaja', 'testeri');

INSERT INTO mokki VALUES
	('mokki1'),
	('mokki2');
	
INSERT INTO varaus VALUES
	(1, 1, to_date('01-03-2014', 'DD-MM-YYYY'), to_date('31-03-2014', 'DD-MM-YYYY')),
	(2, 2, to_date('01-04-2014', 'DD-MM-YYYY'), to_date('07-04-2014', 'DD-MM-YYYY'));
	
INSERT INTO puute VALUES
	(1, 1, 'Maitoa tarvitaa', GETDATE()),
	(2, 2, 'Juustoa', GETDATE());
	
INSERT INTO tarvike VALUES
	(1, 'Leipää', GETDATE()),
	(2, 'Kalaa', GETDATE());