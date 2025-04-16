// controleSaisie.js
function validerFormulaire() {
    const nom = document.getElementsByName("nom_lieux")[0].value.trim();
    const adresse = document.getElementsByName("adresse")[0].value.trim();
    const capacite = document.getElementsByName("capacite")[0].value;

    // Validation
    if (!nom || !adresse || !capacite) {
        alert("⚠️ Tous les champs sont obligatoires !");
        return false;
    }

    if (nom.length < 3 || adresse.length < 3) {
        alert("📛 Le nom et l'adresse doivent avoir au moins 3 caractères");
        return false;
    }

    if (isNaN(capacite) || capacite <= 0) {
        alert("🔢 La capacité doit être un nombre positif");
        return false;
    }

    return true; // Soumission autorisée
}