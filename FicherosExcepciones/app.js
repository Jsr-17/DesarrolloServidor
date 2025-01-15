const container = document.getElementById("container");
const addProduct = document.getElementById("add");
const deleteProduct = document.getElementById("delete");
const showProduct = document.getElementById("show");
const updateProduct = document.getElementById("update");

addProduct.addEventListener("click", () => {
  const form =
    '<form class="mt-3" action="add.php" method="post"><input type="text" name="name" placeholder="Nombre Del Producto" class="mx-1"><input type="number" name="quantity" placeholder="Cantidad Del Producto" class="mx-1"><input type="number" class="mx-1" name="prize" placeholder="Precio Del Producto"><input type="number" name="id" class="mx-1" placeholder="Id Del Producto"><button  class="mx-3" type="submit">Enviar formulario</button></form>';
  container.innerHTML = form;
});

deleteProduct.addEventListener("click", () => {
  const form =
    '<form class="mt-3" action="delete.php" method="post"><input type="number" name="id" class="mx-1" placeholder="Id Del Producto"><button  class="mx-3" type="submit">Enviar formulario</button></form>';
  container.innerHTML = form;
});

updateProduct.addEventListener("click", () => {
  const form =
    '<form class="mt-3" action="update.php" method="post"><input type="text" name="name" placeholder="Nombre Del Producto" class="mx-1"><input type="number" name="quantity" placeholder="Cantidad Del Producto" class="mx-1"><input type="number" class="mx-1" name="prize" placeholder="Precio Del Producto"><input type="number" name="id" class="mx-1" placeholder="Id Del Producto"><button  class="mx-3" type="submit">Enviar formulario</button></form>';
  container.innerHTML = form;
});
