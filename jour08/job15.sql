SELECT salles.nom AS nom_salle, etage.nom AS nom_etage
FROM salles
JOIN etage ON salles.etage_id = etage.id;