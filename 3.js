const datos = require("./3.json");

const totales = datos.clientes.map((cliente) => {
    let total = 0
    cliente.compras.forEach(element => {
        total += element
    });
    return {nombre: cliente.nombre, total: total}
})

function mayorNumero(totales) {
  let mayor = totales[0];
  for (let i = 1; i < totales.length; i++) {
    if (totales[i].total > mayor.total) {
      mayor = totales[i];
    }
  }
  return mayor;
}

console.log(datos)
console.log(totales)
console.log("el cliente que más gasto es: ", mayorNumero(totales).nombre)