USE davidijagbemi;

#Add some usernames and passwords to the database
INSERT INTO `users` (Firstname,Lastname,Username,Email,UserRole,Password)
	VALUES ('David','Ijagbemi','Davidij01','davidijagbemi@mail.adelphi.edu','Admin','Batman35'),
	('Kees','Leune','Kleune','kleune@adelphi.edu','Admin','Sovereign1'),
	('John', 'Gapour','JohnG69', 'johngapour@mail.adelphi.edu', 'Organizer', 'JimmyNut69'),
	('Robert', 'Fabio', 'Rfabio99', 'rfabio@mail.adelphi.edu', 'Participant', 'Passw3rd');
