SELECT * FROM articles

SELECT articles.titre, categories.nom 
FROM articles
RIGHT JOIN categories ON articles.categorie_id = categories.id;


SELECT UPPER(titre) AS titre_majuscule, LENGTH(description) AS longueur_description
FROM articles;

SELECT COUNT(*) AS nombre_articles, AVG(file_size) AS taille_moyenne_fichiers
FROM uploads;

SELECT titre, DATE_FORMAT(creation_date, '%d-%m-%Y') AS date_formatee
FROM articles;


SELECT titre, DATE_FORMAT(creation_date, '%d-%m-%Y %H:%i:%s') AS date_heure_formatee
FROM articles;
