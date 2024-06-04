<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de produit</title>
</head>
<body>
    <form action="process_form.php" method="post">
        <label for="product_name">Nom du produit:</label>
        <input type="text" id="product_name" name="product_name" required><br><br>
        
        <label for="price">Prix:</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>
        
        <label for="quantity">Quantité:</label>
        <input type="number" id="quantity" name="quantity" required><br><br>
        
        <button type="submit">Soumettre</button>
    </form>
</body>
</html>
