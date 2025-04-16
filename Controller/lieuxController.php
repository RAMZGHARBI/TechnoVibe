<?php
// Inclusion du fichier de configuration
include 'C:\xampp\htdocs\fatma\Config.php';

// Fonction pour ajouter un lieu
function ajouterLieu($nom_lieux, $adresse, $capacite) {
    // Connexion à la base de données
    $pdo = config::getConnexion();

    // Préparation de la requête d'insertion
    $stmt = $pdo->prepare("INSERT INTO lieux (nom_lieux, adresse, capacite) VALUES (?, ?, ?)");

    // Exécution de la requête avec les données
    $stmt->execute([$nom_lieux, $adresse, $capacite]);

    return true;  // Indiquer que l'ajout a réussi
}
function getLieux() {
    $conn = config::getConnexion();

    try {
        $stmt = $conn->prepare("SELECT * FROM lieux");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        return [];
    }
}
function supprimerLieu($id_lieux) {
    $conn = config::getConnexion();

    try {
        $stmt = $conn->prepare("DELETE FROM lieux WHERE id_lieux = ?");
        $stmt->execute([$id_lieux]);
        return true;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        return false;
    }
}
function modifierLieu($id_lieux, $nom_lieux, $adresse, $capacite) {
    $conn = config::getConnexion();

    try {
        $stmt = $conn->prepare("UPDATE lieux SET nom_lieux = ?, adresse = ?, capacite = ? WHERE id_lieux = ?");
        $stmt->execute([$nom_lieux, $adresse, $capacite, $id_lieux]);
        return true;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        return false;
    }
}




?>
