<?php
include("header.php");

$dsn = "mysql:host=localhost;dbname=Literie3000";
try {
    $db = new PDO($dsn, "root", "root");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $marque = $_POST['marque'];
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        $image_url = $_POST['image_url'];

        $stmt = $db->prepare("INSERT INTO matelas (marque, nom, prix, images) VALUES (:marque, :nom, :prix, :image_url)");
        $stmt->bindParam(':marque', $marque);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prix', $prix);
        $stmt->bindParam(':image_url', $image_url);
        $stmt->execute();

        header("Location: index.php");
        exit();  // C'est important d'appeler exit() après une redirection
    }
} catch(PDOException $e) {
    echo "Erreur lors de l'ajout : " . $e->getMessage();
}
?>

<head>
    <style>
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Ajouter un nouveau matelas</h2>
        <form action="./addMatelas.php" method="post"> <!-- Remarquez la modification ici -->
            <div class="form-group">
                <label for="marque">Marque:</label>
                <input type="text" id="marque" name="marque" required>
            </div>
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prix">Prix:</label>
                <input type="number" id="prix" name="prix" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="image_url">URL de l'image:</label>
                <input type="text" id="image_url" name="image_url" required>
            </div>
            <input type="submit" value="Ajouter">
        </form>
    </div>
</body>
