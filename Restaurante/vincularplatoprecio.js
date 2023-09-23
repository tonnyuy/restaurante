document.addEventListener("DOMContentLoaded", function () {
    const select = document.getElementById("plato");
    const input = document.getElementById("precio");

    select.addEventListener("change", function () {
        const selectedOption = select.value;
        
        // Aquí puedes agregar lógica para asignar el valor deseado al input
        // Dependiendo de la opción seleccionada en el select.

        if (selectedOption === "Plato italiano de marisco y pescado") {
            input.value = 350;
        } else if (selectedOption === "Tapas de gourmet Príncipe") {
            input.value = 200;
        } else if (selectedOption === "Tacos de carne y puerco") {
            input.value = 200;
        }
     else if (selectedOption === "flan de coco") {
        input.value = 60;
    }
 else if (selectedOption === "pizza") {
    input.value = 250;
}
 else if (selectedOption === "HotDog") {
    input.value = 120;
}
 else if (selectedOption === "hamburguesa suiza") {
    input.value = 180;
}
 else if (selectedOption === "Medallones de filete con tocino") {
    input.value = 150;
}
 else if (selectedOption === "Tacos mexicanos con camarones") {
    input.value = 200;
}
 else if (selectedOption === "Lasaña tradicional de carne y pollo") {
    input.value = 190;
}
 else if (selectedOption === "Pollo asado al limón con vegetales") {
    input.value = 220;
}
 else if (selectedOption === "Espagueti a la bolognesa") {
    input.value = 190;
}
 else if (selectedOption === "Bizcocho de queso y cerezas en taza") {
    input.value = 60;
}
 else if (selectedOption === "Pastel mil hojas") {
    input.value = 60;
}

    });
});
