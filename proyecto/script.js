document.addEventListener("DOMContentLoaded", function() {
    const products = document.querySelectorAll(".product");
    let currentIndex = 0;

    function showProduct(index) {
        products.forEach((product, i) => {
            if (i === index) {
                product.style.display = "block";
            } else {
                product.style.display = "none";
            }
        });
    }

    function changeProduct() {
        currentIndex++;
        if (currentIndex >= products.length) {
            currentIndex = 0;
        }
        showProduct(currentIndex);
    }

    // Mostrar el primer producto al cargar la página
    showProduct(currentIndex);

    // Cambiar automáticamente de producto cada 5 segundos
    setInterval(changeProduct, 5000);
});
