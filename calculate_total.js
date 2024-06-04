const args = process.argv.slice(2);

const price = parseFloat(args[0]);
const quantity = parseInt(args[1]);

const total = price * quantity;

// Afficher le total
console.log(total);
