
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formulario-consumo');

    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Evita que se recargue la página
        calculadoraPuntos(); // Llama a tu función
    });
});

function calculadoraPuntos(event) {
    event.preventDefault(); // Previene el comportamiento por defecto del formulario

    // Aquí se definen los puntos por pregunta
    const puntos = {
        q1: { "1Opcion1": 1, "2Opcion1": 2, "3Opcion3": 3, "4Opcion4": 4, "More4": 5 },
        q2: { "1Opcion2": 1, "2Opcion2": 2, "3Opcion2": 3, "4Opcion2": 4 },
        q3: { "1Opcion3": 1, "2Opcion3": 2, "3Opcion3": 3, "4Opcion3": 4 },
        q4: { "opción1": 1, "opcion2": 2, "opcion3": 3, "opcion4": 4 },
        q5: { "1Opcion5": 0, "2Opcion5": 1, "3Opcion5": 2, "4Opcion5": 3 },
        q6: { "1Opcion6": 1, "2Opcion6": 2, "3Opcion6": 3, "4Opcion6": 4 },
        q7: { "1Opcion7": 0, "2Opcion7": 1, "3Opcion7": 2, "4Opcion7": 3 },
        q8: { "1Opcion8": 0, "2Opcion8": 1, "3Opcion8": 2, "4Opcion8": 3 },
        q9: { "1Opcion9": 1, "2Opcion9": 0 },
        q10: { "1Opcion10": 1, "2Opcion10": 2, "3Opcion10": 3, "4Opcion10": 4 }
    };

    let puntajeFinal = 0;

    // Calcula el puntaje total basado en las respuestas seleccionadas
    for (let pregunta in puntos) {
        const valorSeleccionado = document.querySelector(`#${pregunta}`).value;
        if (puntos[pregunta][valorSeleccionado] !== undefined) {
            puntajeFinal += puntos[pregunta][valorSeleccionado];
        }
    }

    // Redirecciona a la página de resultados con el puntaje final
    window.location.href = `resultado.html?score=${puntajeFinal}`;
}