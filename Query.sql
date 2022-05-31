CREATE DATABASE pemweb;

USE pemweb;

CREATE TABLE bukutamu(
	nomor INT(10) NOT NULL AUTO_INCREMENT,
	nama VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	tanggal DATETIME NOT NULL,
	komentar TEXT NOT NULL,
	PRIMARY KEY(nomor)
);

DROP TABLE bukutamu;

INSERT INTO bukutamu (nama, email, tanggal, komentar)VALUES('Budi','budi@gmail.com','2022-02-06', 'bagus');

SELECT * FROM bukutamu;