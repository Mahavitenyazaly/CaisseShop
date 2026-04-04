function ajouterProduitDansCaisse(){
    const ticketList = document.getElementById("");
             ticketList.innerHTML += `
          <div class="ticket-item">
            <div class="info">
              <strong>produit1</strong>
              <span>1.99 €</span>
            </div>
            <div class="actions">
            </div>
          </div>
        `;
}

function afficherProduits(){
   const productList = document.getElementById("");

   for (let index = 0; index < produits.length; index++) {
      productList.innerHTML = productList + `
          <div class="product-card">
            <h3>${produits[index].Nom}</h3>
            <p>${produits[index].Prix.toFixed(2)} €</p>
            <button type="button" onclick="ajouterProduitDansCaisse(${produits[index].id})">Ajouter</button>
          </div>
        `;
   }
}