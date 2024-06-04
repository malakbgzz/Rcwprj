<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    
    // Appeler le script Node qui calcul le total
    $command = "node calculate_total.js " . escapeshellarg($price) . " " . escapeshellarg($quantity);
    $total = shell_exec($command);
    
    // Appeler le script Python qui calcul la taxe
    $command = "python calculate_tax.py " . escapeshellarg($total);
    $tax = shell_exec($command);
    
    $totalWithTax = $total + $tax;
    
    echo "<h2>Résultat du formulaire</h2>";
    echo "<p>Nom du produit: " . htmlspecialchars($product_name) . "</p>";
    echo "<p>Prix: " . htmlspecialchars($price) . "</p>";
    echo "<p>Quantité: " . htmlspecialchars($quantity) . "</p>";
    echo "<p>Total: " . htmlspecialchars($total) . "</p>";
    echo "<p>Taxe: " . htmlspecialchars($tax) . "</p>";
    echo "<p>Total avec taxe: " . htmlspecialchars($totalWithTax) . "</p>";
}
?>
