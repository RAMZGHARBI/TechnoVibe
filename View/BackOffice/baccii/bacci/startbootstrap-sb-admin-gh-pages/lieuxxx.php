<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="LiveTheMusic - Dashboard" />
        <meta name="author" content="" />
        <title>Dashboard - LiveTheMusic</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/lieuxxx.css">

    </head>
    <style>
          /* lieuxxx.css */

.container {
    background-color: #1e1e2f;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(255, 0, 85, 0.3);
    color: #fff;
    font-family: 'Poppins', sans-serif;
    margin-top: 60px;
}

.container h2 {
    color: #ff0055;
    font-weight: 600;
    margin-bottom: 20px;
}

.table {
    background-color: #2c2c3e;
    border-collapse: collapse;
}

.table th, .table td {
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 12px;
    text-align: center;
    color: #fff;
}

.table thead {
    background-color: #3a3a4d;
    color: #ff0055;
}

.table input[type="text"],
.table input[type="number"] {
    background-color: #1e1e2f;
    border: 1px solid #ff0055;
    color: #fff;
    padding: 6px;
    border-radius: 4px;
    width: 100%;
}

.table .btn-success {
    background-color: #ff0055;
    border: none;
    padding: 6px 12px;
    font-weight: 500;
    border-radius: 6px;
    transition: background 0.3s ease;
}

.table .btn-success:hover {
    background-color:rgb(229, 35, 100);
}
.btn-danger {
    background-color: #dc3545;
    border: none;
    padding: 6px 12px;
    font-weight: 500;
    border-radius: 6px;
    color: white;
    text-decoration: none;
}
.btn-danger:hover {
    background-color: #c82333;
}

.btn-warning {
    background-color: #ffc107;
    color: black;
    padding: 6px 12px;
    text-decoration: none;
    border-radius: 6px;
    margin-right: 5px;
}

    </style>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">LIVE<span>THE</span>MUSIC</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for artists, events..." aria-label="Search" aria-describedby="btnNavbarSearch" style="background-color: rgba(255, 255, 255, 0.1); color: white; border: 1px solid rgba(255, 0, 85, 0.3);" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="background-color: var(--light-color); border: 1px solid rgba(255, 0, 85, 0.3);">
                        <li><a class="dropdown-item" href="#!" style="color: white;">Profile</a></li>
                        <li><a class="dropdown-item" href="#!" style="color: white;">Settings</a></li>
                        <li><hr class="dropdown-divider" style="border-color: rgba(255, 0, 85, 0.3);" /></li>
                        <li><a class="dropdown-item" href="#!" style="color: white;">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Music</div>
                            <a class="nav-link" href="artists.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Users
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEvents" aria-expanded="false" aria-controls="collapseEvents">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div>
                                Events
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseEvents" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="lieuxxx.html">Lieux</a>
                                    <a class="nav-link" href="lieuxxx.html">Concerts</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="playlists.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-music"></i></div>
                                Artistes
                            </a>
                            <a class="nav-link" href="tickets.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-ticket-alt"></i></div>
                                Tickets
                            </a>
                            <div class="sb-sidenav-menu-heading">Community</div>
                            <a class="nav-link" href="friends.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
                                Friends
                            </a>
                            <a class="nav-link" href="messages.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                                Messages
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Music Lover
                    </div>
                </nav>
            </div>
            



            <main class="main-content">
            <header class="content-header">
    
            <?php
// Include your controller to manage the places
include 'C:\xampp\htdocs\fatma\Controller\lieuxController.php';





// Handle the delete action
if (isset($_GET['supprimer']) && is_numeric($_GET['supprimer'])) {
    $idASupprimer = $_GET['supprimer'];
    supprimerLieu($idASupprimer);
}

// Get all venues to display
$lieux = getLieux();
$lieuAModifier = null;

/* Si on clique sur "Modifier"
if (isset($_POST['id_modifier'])) {
    $idModif = $_POST['id_modifier'];
    foreach ($lieux as $lieu) {
        if ($lieu['id_lieux'] == $idModif) {
            $lieuAModifier = $lieu;
            break;
        }
    }
}

Si on valide une modification
if (isset($_POST['modifier'])) {
    $id = $_POST['id_lieux'];
    $nom = $_POST['nom_lieux'];
    $adresse = $_POST['adresse'];
    $capacite = $_POST['capacite'];

    if (modifierLieu($id, $nom, $adresse, $capacite)) {
        echo "<div class='alert alert-success'>Lieu modifié avec succès !</div>";
        $lieux = getLieux(); // Recharge les lieux après modif
        $lieuAModifier = null;
    } else {
        echo "<div class='alert alert-danger'>Erreur lors de la modification.</div>";
    }
}*/
// MODIFICATION D'UN UTILISATEUR
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateUser'])) {
    $id = $_POST['id'];
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $email = $_POST['email'];

    $userController->updateUser($id, $First_Name, $Last_Name, $email);

    header("Location: ".$_SERVER['PHP_SELF']); 
    exit(); 
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="LiveTheMusic - Dashboard" />
        <meta name="author" content="" />
        <title>Dashboard - LiveTheMusic</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/lieuxxx.css">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">LIVE<span>THE</span>MUSIC</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for artists, events..." aria-label="Search" aria-describedby="btnNavbarSearch" style="background-color: rgba(255, 255, 255, 0.1); color: white; border: 1px solid rgba(255, 0, 85, 0.3);" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="background-color: var(--light-color); border: 1px solid rgba(255, 0, 85, 0.3);">
                        <li><a class="dropdown-item" href="#!" style="color: white;">Profile</a></li>
                        <li><a class="dropdown-item" href="#!" style="color: white;">Settings</a></li>
                        <li><hr class="dropdown-divider" style="border-color: rgba(255, 0, 85, 0.3);" /></li>
                        <li><a class="dropdown-item" href="#!" style="color: white;">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Music</div>
                            <a class="nav-link" href="artists.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Users
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEvents" aria-expanded="false" aria-controls="collapseEvents">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div>
                                Events
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseEvents" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="lieuxxx.html">Lieux</a>
                                    <a class="nav-link" href="lieuxxx.html">Concerts</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="playlists.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-music"></i></div>
                                Artistes
                            </a>
                            <a class="nav-link" href="tickets.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-ticket-alt"></i></div>
                                Tickets
                            </a>
                            <div class="sb-sidenav-menu-heading">Community</div>
                            <a class="nav-link" href="friends.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
                                Friends
                            </a>
                            <a class="nav-link" href="messages.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                                Messages
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Music Lover
                    </div>
                </nav>
            </div>

            <main class="main-content">
                <header class="content-header">
                    <?php
                    // Inclusion du contrôleur
                    require_once 'C:\xampp\htdocs\fatma\Controller\lieuxController.php';

                    // Traitement de la suppression
                    if (isset($_GET['delete_id'])) {
                        if (supprimerLieu($_GET['delete_id'])) {
                            header("Location: lieuxxx.php?success=1");
                        } else {
                            header("Location: lieuxxx.php?error=1");
                        }
                        exit();
                    }

                    // Traitement de l'ajout
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter_ligne'])) {
                        $nom_lieux = $_POST['nom_lieux'];
                        $adresse = $_POST['adresse'];
                        $capacite = $_POST['capacite'];
                        ajouterLieu($nom_lieux, $adresse, $capacite);
                    }

                    // Récupération des données
                    $lieux = getLieux();
                    
                    ?>

                    <div class="container mt-5">
                        <!-- Messages d'alerte -->
                        <?php if (isset($_GET['success'])): ?>
                            <div class="alert alert-success mb-3">Lieu supprimé avec succès</div>
                        <?php elseif (isset($_GET['error'])): ?>
                            <div class="alert alert-danger mb-3">Erreur lors de la suppression</div>
                        <?php endif; ?>

                        <h2>Gestion des Lieux</h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom du Lieu</th>
                                    <th>Adresse</th>
                                    <th>Capacité</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Ligne d'ajout -->
                                <!-- Dans la partie du tableau où se trouve le formulaire d'ajout -->
<form method="POST" action="lieuxxx.php">
    <tr>
        <td>(auto)</td>
        <td><input type="text" name="nom_lieux" class="form-control" ></td>
        <td><input type="text" name="adresse" class="form-control"></td>
        <td><input type="number" name="capacite" class="form-control"></td>
        <td>
            <button type="submit" name="ajouter_ligne" class="btn btn-success" onclick="return validerFormulaire()">Ajouter</button>
        </td>
    </tr>
</form>

                                <!-- Lignes existantes -->
                                <?php foreach ($lieux as $lieu): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($lieu['id_lieux']) ?></td>
                                        <td><?= htmlspecialchars($lieu['nom_lieux']) ?></td>
                                        <td><?= htmlspecialchars($lieu['adresse']) ?></td>
                                        <td><?= htmlspecialchars($lieu['capacite']) ?></td>
                                        <td class="action-buttons">
                                        <a href="lieuxxx.php?supprimer=<?= $lieu['id_lieux'] ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce lieu ?');">Supprimer</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </header>
            </main>
        </div>

        
        <script src="js/user.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
        <!-- Chargement du script -->
<script src="js/controleSaisie.js"></script>
        
    </body>
</html>
                
            </div>
        </main>
        <script src="js/user.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
        