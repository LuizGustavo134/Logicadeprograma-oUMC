let produtos = document.querySelectorAll(".produto")
console.log(produtos);
// seleciona os td que estão no TR produto
let valorUnitProduto = produto[0].querySelector(".info-valor-unidade").textContent
let QuanidadeProduto = produto[0].querySelector(".info-quantidade").textContent
let valorTotalProduto = produto[0].querySelector(".info-valor-total")



console.log(valorUnitProduto);
console.log(QuanidadeProduto);
console.log(valorTotalProduto);

//excluir o R$
let valorUnitProdutoLimpo = valorUnitProduto.replace(/R\$\ /, "")
console.log(valorUnitProdutoLimpo);
console.log(parseFloat(valorUnitProdutoLimpo) * parseInt(QuanidadeProduto));