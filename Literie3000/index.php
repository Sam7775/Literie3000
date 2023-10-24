<?php
$dsn = "mysql:host=localhost;dbname=Literie3000";
try {
    $db = new PDO($dsn, "root", "root");
    $stmt = $db->query("SELECT * FROM matelas");
    $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

include("header.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
    <style>
        .catalogue-container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #e0e0e0;
            background-color: #fff;
        }

        .catalogue-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px 0;
            border-bottom: 2px solid #ccc;
        }

        .product {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding: 10px 0;
            border-bottom: 1px dashed #ccc;
        }

        .product-image {
            width: 30%;
            height: auto;
            border: 1px solid #e0e0e0;
            margin-right: 20px;
        }

        .product-details {
            flex: 1;
            display: flex;
            justify-content: space-between;
        }

        .price {
            color: red;
            font-weight: bold;
        }

        .btn {
            padding: 5px 10px;
            border: 1px solid #e0e0e0;
            background-color: #f4f4f4;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<div class="catalogue-container">
    <div class="catalogue-header">
        <img src="https://lpo-demo.dataiads.io/api/image/unsafe/fit-in/800x800/https%3A%2F%2Fmedias.maisonsdumonde.com%2Fimages%2Fmkp%2FM22045985_1%2Fmatelas-140x190-cm-epais-24-cm-mousse-hr-blue-latex.jpg" alt="Logo">
        <span>CATALOGUE</span>
    </div>

    <?php foreach($produits as $produit): ?>
    <div class="product">
        <img class="product-image" src="<?php echo $produit['images']; ?>" alt="Image du produit">
        <div class="product-details">
            <div>
                <span><?php echo $produit['marque']; ?></span>
                <span><?php echo $produit['nom']; ?></span>
            </div>
            <div>
                <span class="price"><?php echo $produit['prix'] . "€"; ?></span>
                <!-- Boutons -->
                <a href="../addMatelas.php?id=<?php echo $produit['id']; ?>"><button class="btn">Ajouter</button></a>
                <a href="modifier.php"><button class="btn">Modifier</button></a>
                <a href="supprimer.php"><button class="btn">Supprimer</button></a>
                <a href="afficher.php"><button class="btn">Afficher</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

</div>

</body>
</html>
