function invertirCadenaTexto(cadena) {
    const cadenaEnArray = cadena.split(" ")
    const arrayInvertido = cadenaEnArray.reverse()
    const cadenaInvertido = arrayInvertido.join(" ")
    return cadenaInvertido;
}

console.log(invertirCadenaTexto("Hola mundo desde JS"))