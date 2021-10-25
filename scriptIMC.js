
function pesoAlt_obtener(){
    let pesoDato = Number(document.getElementById("pesoAlt_datoUno").value);
    let alturaDato = Number(document.getElementById("pesoAlt_datoDos").value);

    let alturaCuadrado = alturaDato * alturaDato;

    let pesoAltura = Math.round(pesoDato / alturaCuadrado);
    

    if(pesoAltura <= 16){
        document.getElementById("pesoAlt_result").innerText = `${pesoAltura}`;
        document.getElementById("categoria_result").innerText = `Desnutrición severa`;
    }else if(pesoAltura >= 16.1 && pesoAltura <= 18.4){
        document.getElementById("pesoAlt_result").innerText = `${pesoAltura}`;
        document.getElementById("categoria_result").innerText = `Desnutrición moderada`;
    }else if(pesoAltura >= 18.5 && pesoAltura <= 22){
        document.getElementById("pesoAlt_result").innerText = `${pesoAltura}`;
        document.getElementById("categoria_result").innerText = `Bajo peso`;
    }else if(pesoAltura >= 22.1 && pesoAltura <= 24.9){
        document.getElementById("pesoAlt_result").innerText = `${pesoAltura}`;
        document.getElementById("categoria_result").innerText = `Peso Normal`;
    }else if(pesoAltura >= 25 && pesoAltura <= 29.9){
        document.getElementById("pesoAlt_result").innerText = `${pesoAltura}`;
        document.getElementById("categoria_result").innerText = `Sobrepeso`;
    }else if(pesoAltura >= 30 && pesoAltura <= 34.9){
        document.getElementById("pesoAlt_result").innerText = `${pesoAltura}`;
        document.getElementById("categoria_result").innerText = `Obesidad tipo I`;
    }else if(pesoAltura >= 35 && pesoAltura <= 39.9){
        document.getElementById("pesoAlt_result").innerText = `${pesoAltura}`;
        document.getElementById("categoria_result").innerText = `Obesidad tipo II`;
    }else if(pesoAltura >= 40){
        document.getElementById("pesoAlt_result").innerText = `${pesoAltura}`;
        document.getElementById("categoria_result").innerText = `Obesidad tipo III`;
    }
}