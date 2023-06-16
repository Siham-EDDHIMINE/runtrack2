SELECT etage.nom AS nom_etage, salles.nom AS 'Biggest Room', salles.capacite
FROM salles
JOIN etage ON salles.etage_id = etage.id 
WHERE salles.capacite = (SELECT MAX(capacite) FROM salles);