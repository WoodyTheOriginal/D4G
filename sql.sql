create table panier (	
	idpanier int(3) not null auto_increment, 
	idArticlePanier varchar(50),
	primary key(idpanier)
);





SELECT * from eco_rules
RIGHT JOIN panier
ON panier.idArticlePanier = eco_rules.ID



SELECT * from eco_rules
INNER JOIN panier
ON panier.idArticlePanier = eco_rules.ID