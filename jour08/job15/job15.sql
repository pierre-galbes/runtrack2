SELECT salles.nom,etage.nom FROM salles INNER JOIN etage WHERE etage.id = salles.id_etage 