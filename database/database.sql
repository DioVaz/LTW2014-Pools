DROP TABLE IF EXISTS userPoll;
DROP TABLE IF EXISTS answer;
DROP TABLE IF EXISTS vote;
DROP TABLE IF EXISTS poll;
DROP TABLE IF EXISTS nonRegistered;
DROP TABLE IF EXISTS registered;
DROP TABLE IF EXISTS users;


CREATE TABLE users(
	idUser INTEGER PRIMARY KEY AUTOINCREMENT	
);

CREATE TABLE registered(
	idRegistered INTEGER REFERENCES users(idUser),
	email VARCHAR NOT NULL UNIQUE,
	username VARCHAR NOT NULL UNIQUE,
    password VARCHAR NOT NULL,
    PRIMARY KEY(idRegistered)
);

CREATE TABLE nonRegistered(
	idNonRegistered INTEGER REFERENCES users(idUser),
	PRIMARY KEY(idNonRegistered)
);

CREATE TABLE poll(
	idPoll INTEGER PRIMARY KEY AUTOINCREMENT,
	question VARCHAR NOT NULL, 
	img VARCHAR NOT NULL,
	idRegistered INTEGER REFERENCES registered(idRegistered)
);


CREATE TABLE answer(
	idAnswer INTEGER PRIMARY KEY AUTOINCREMENT,
	text VARCHAR NOT NULL,
	votes INTEGER DEFAULT 0,
	idPoll INTEGER REFERENCES poll(idPoll)
);

CREATE TABLE userPoll(
	idUser INTEGER REFERENCES user(idUser),
	idPoll INTEGER REFERENCES poll(idPoll),
	PRIMARY KEY (idUser, idPoll)
);



INSERT INTO registered (email, username, password) VALUES ('cenas@cenas.com','cenas','cenas1');
INSERT INTO poll (question, img, idRegistered)VALUES ('Como esta o tempo?',
	'http://www.gostodeler.com.br/images/681/cienciaetecnologia/meteorologia1.jpg' ,1);
INSERT INTO answer (text, idPoll) VALUES ('Muito bom', 1);
INSERT INTO answer (text, idPoll) VALUES ('Médio', 1);
INSERT INTO answer (text, idPoll) VALUES ('Mau', 1);

