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


INSERT INTO registered (email, username, password) VALUES ('joaomanuel@gmail.com','joaomanuel','password');
INSERT INTO registered (email, username, password) VALUES ('mariam@hotmail.com','maria','12345678');


INSERT INTO poll (question, img, idRegistered)VALUES ('What is your favorite digital camera brand?',
	'http://i.i.cbsi.com/cnwk.1d/i/tim2/2013/06/23/Samsung_Galaxy_Camera_NX_rear_view.jpg' ,1);
INSERT INTO answer (text, idPoll) VALUES ('Panasonic', 1);
INSERT INTO answer (text, idPoll) VALUES ('Canon', 1);
INSERT INTO answer (text, idPoll) VALUES ('Sony', 1);
INSERT INTO answer (text, idPoll) VALUES ('Nikon', 1);


INSERT INTO poll (question, img, idRegistered)VALUES ('When can you play football?',
	'https://gigaompaidcontent.files.wordpress.com/2012/02/soccer-football-ball-in-goal-net-o.jpg' ,1);
INSERT INTO answer (text, idPoll) VALUES ('Monday', 2);
INSERT INTO answer (text, idPoll) VALUES ('Tuesday', 2);
INSERT INTO answer (text, idPoll) VALUES ('Wednesday', 2);
INSERT INTO answer (text, idPoll) VALUES ('Thursday', 2);
INSERT INTO answer (text, idPoll) VALUES ('Friday', 2);


INSERT INTO poll (question, img, idRegistered)VALUES ('What is your favourite season?',
	'http://blog.realestatebook.com/wp-content/uploads/2014/01/the_four_seasons___vivaldi_by_irvinggfm-d4tj3vc.jpg' ,1);
INSERT INTO answer (text, idPoll) VALUES ('Spring', 3);
INSERT INTO answer (text, idPoll) VALUES ('Summer', 3);
INSERT INTO answer (text, idPoll) VALUES ('Fall', 3);
INSERT INTO answer (text, idPoll) VALUES ('Winter', 3);








