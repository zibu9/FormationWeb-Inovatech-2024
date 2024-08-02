function nomDeLaFonction(paramètre1, paramètre2) {
    // Corps de la fonction
    console.log("Voici un message !");
}

nomDeLaFonction();

function saluer(nom) {
    console.log("Bonjour, " + nom + "!");
}
  
saluer("Alice"); // Affiche "Bonjour, Alice!"
  

function additionner(a, b) {
    return a + b;
}

let resultat = additionner(5, 3);
console.log(resultat); // Affiche 8

let multiplier = function(x, y) {
   return x * y;
};
  
console.log(multiplier(4, 5)); // Affiche 20
  
let diviser = (x, y) => x / y;

console.log(diviser(10, 2)); // Affiche 5

// Déclaration de la fonction
function calculerRectangleSurface(longueur, largeur) {
    return longueur * largeur;
}
  
// Appel de la fonction et affichage du résultat
let surface = calculerRectangleSurface(10, 5);
console.log("Surface du rectangle : " + surface); // Affiche "Surface du rectangle : 50"

if (true) {
    let nom = "Alice"; // Variable avec portée de bloc
    console.log(nom); // Affiche "Alice"
}

console.log(nom); // Erreur : nom n'est pas défini en dehors du bloc

function saluer() {
    if (true) {
      var nom = "Alice"; // Variable avec portée fonctionnelle
    }
    console.log(nom); // Affiche "Alice" car `var` a une portée fonctionnelle
}
  
saluer();
  

  

  