const productContainer=document.querySelector(".product-list");

if (productContainer){
    displayProducts();
}

function displayProducts() {
    products.ForEach(product=> {
        const productCard = document.createElement("div");
        productCard.classList.add("product-card");
        productCard.innerHTML=`
        <div class="img-boxed">
            <img src"${product.colors[0].mainImage}" >        
        </div>
        <h2 class="title">${product.title}</h2>
        <span class"price">${product.price}</span>
        `;

        productContainer.appendChild(productCard);

        const imgBox = productCard.querySelector(".img-boxed");
        imgBox.addEventListener("click",()=>{
            sessionStorage.setItem("selected",JSON.stringify(product));
            window.location.href="product-details.php";

        }
        );
    });
}