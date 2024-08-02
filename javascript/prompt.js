// Demander à l'utilisateur de saisir son âge
let age = prompt("Quel est votre âge ?");

// Convertir la saisie en nombre
age = parseInt(age);

// Vérifier si l'utilisateur est majeur ou mineur
if (age >= 18) {
  console.log("Vous êtes majeur.");
} else {
  console.log("Vous êtes mineur.");
}
