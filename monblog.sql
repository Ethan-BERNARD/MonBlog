
drop table if exists COMMENTAIRE;
drop table if exists BILLET;

create table BILLET (
  idBillet integer primary key auto_increment,
 dateBillet datetime not null,
  titreBillet varchar(100) not null,
  contenuBillet varchar(400) not null
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

create table COMMENTAIRE (
  idCommentaire integer primary key auto_increment,
  dateCommentaire datetime not null,
  auteurCommentaire varchar(100) not null,
  contenuCommentaire varchar(200) not null,
  idBillet integer not null,
  constraint fk_com_bil foreign key(idBillet) references BILLET(idBillet)
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

insert into BILLET(dateBillet, titreBillet, contenuBillet) values
(NOW(), 'Premier billet', 'Bonjour le monde ! Ceci est le premier billet sur mon blog.');
insert into BILLET(dateBillet, titreBillet, contenuBillet) values
(NOW(), 'Au travail', 'Il faut enrichir ce blog dès maintenant. L\'aventure ne fait que commencer ;)');

insert into COMMENTAIRE(dateCommentaire, auteurCommentaire, contenuCommentaire, idBillet) values
(NOW(), 'A. Nonyme', 'Bravo pour ce début', 1);
insert into COMMENTAIRE(dateCommentaire, auteurCommentaire, contenuCommentaire, idBillet) values
(NOW(), 'Moi', 'Merci ! Je vais continuer sur ma lancée', 1);