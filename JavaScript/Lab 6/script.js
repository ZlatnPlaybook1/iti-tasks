function addStyles() {
  const style = document.createElement("style");
  style.textContent = `
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f5f5f5;
        flex-direction: column;
      }
      #card-container {
        display: flex;
        justify-content: center; 
        flex-wrap: wrap;
        gap: 20px;
        width: 80%; 
        margin-top: 20px;
      }
      .card {
        width: 300px;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        font-family: Arial, sans-serif;
      }
      .card img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
      }
      .card h3 {
        margin: 15px 0 10px;
        font-size: 24px;
      }
      .card p {
        color: #777;
        font-size: 16px;
      }
      .card button {
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #6200ea;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
      }
      .search {
        border: 2px solid  black;
        border-radius : 5px ;
        height: 35px; 
        width: 200px;
        margin-bottom: 20px;
        margin-top : 20px  ;
      }
    `;
  document.head.appendChild(style);
}
//  function cards 
function createCard(imageSrc, title, description, price) {
  const card = document.createElement("div");
  card.className = "card";

  const img = document.createElement("img");
  img.src = imageSrc;
  card.appendChild(img);

  const h3 = document.createElement("h3");
  h3.textContent = title;
  card.appendChild(h3);

  const p = document.createElement("p");
  p.textContent = `${description} ${price}`;
  card.appendChild(p);

  const button = document.createElement("button");
  button.textContent = "Buy";
  card.appendChild(button);

  document.getElementById("card-container").appendChild(card);
}
//  function search input  
function Serching() {
  const search = document.createElement("input");
  search.type = "text";
  search.className = "search";
  search.placeholder = "Searching Text....";

  const container = document.getElementById("card-container");
  container.parentNode.insertBefore(search, container);
}

Serching();

addStyles();

createCard(
  "./menu-3.png",
  "Bread Basket",
  "Assortment of fresh baked fruit breads and muffins",
  "5.50"
);
createCard(
  "./menu-4.png",
  "Belgian Waffle",
  "Assortment of fresh baked fruit breads and muffins",
  "7.50"
);
createCard(
  "./menu-5.png",
  "Scrambled eggs",
  "Assortment of fresh baked fruit breads and muffins",
  "7.50"
);
createCard(
  "./menu-6.png",
  "Bread Basket",
  "Assortment of fresh baked fruit breads and muffins",
  "5.50"
);
createCard(
  "./service-2.jpg",
  "Belgian Waffle",
  "Assortment of fresh baked fruit breads and muffins",
  "7.50"
);
createCard(
  "./service-3.jpg",
  "Scrambled eggs",
  "Assortment of fresh baked fruit breads and muffins",
  "7.50"
);
