
    function getScore() {
        const urlParams = new URLSearchParams(window.location.search);
        const score = parseInt(urlParams.get('score')) || 0;
        document.getElementById('score').innerText = `Tu puntaje total es: ${score}`;

        generarGraficas(score);
        mostrarRecomendaciones(score);
    }

    function generarGraficas(score) {
        const restante = 40 - score;

        // Pastel
        new Chart(document.getElementById('graficaPastel'), {
            type: 'pie',
            data: {
                labels: ['Tu consumo', 'Resto posible'],
                datasets: [{
                    data: [score, restante],
                    backgroundColor: ['#08036b', '#d1d1d1']
                }]
            },
            options: {
                responsive: true
            }
        });

        // Barras
        new Chart(document.getElementById('graficaBarras'), {
            type: 'bar',
            data: {
                labels: ['Consumo de agua'],
                datasets: [{
                    label: 'Tu nivel',
                    data: [score],
                    backgroundColor: '#100699'
                }]
            },
            options: {
                scales: {
                    y: {
                        max: 40,
                        beginAtZero: true
                    }
                }
            }
        });
    }

    function mostrarRecomendaciones(score) {
        const mensajeDiv = document.getElementById('mensajeFinal');
        let mensaje = '';
        let recomendaciones = '';
    
        if (score <= 13) {
            mensaje = '🎉 ¡Felicidades! Tu consumo de agua es excelente. Sigue así con tus buenas prácticas.';
            recomendaciones = `
                <ul>
                    <li>Continúa con duchas cortas (menos de 5 minutos).</li>
                    <li>Cierra la llave al lavarte los dientes o enjabonar las manos.</li>
                    <li>Usa electrodomésticos solo con carga completa.</li>
                </ul>`;
        } else if (score <= 25) {
            mensaje = '🧠 Tu consumo es moderado. Revisa algunos hábitos y podrás mejorarlo.';
            recomendaciones = `
                <ul>
                    <li>Reduce el tiempo en la ducha a 5 minutos.</li>
                    <li>Reutiliza el agua del enjuague de frutas y verduras para regar plantas.</li>
                    <li>Instala dispositivos ahorradores en grifos y duchas.</li>
                    <li>Revisa posibles fugas en llaves o el sanitario.</li>
                </ul>`;
        } else {
            mensaje = '🚨 Tu consumo es alto. Es momento de tomar acciones más firmes.';
            recomendaciones = `
                <ul>
                    <li>Toma duchas más cortas (máx. 5 minutos).</li>
                    <li>Evita lavar vehículos con manguera, usa balde.</li>
                    <li>Instala inodoros de doble descarga o ahorradores.</li>
                    <li>Captura agua lluvia para limpieza o riego.</li>
                    <li>Monitorea tu consumo mensualmente.</li>
                </ul>`;
        }
    
        mensajeDiv.innerHTML = `
            <p style="font-size: 18px; margin-top: 20px;">${mensaje}</p>
            <div style="font-size: 16px; margin-top: 10px;">
                <strong>Recomendaciones:</strong>
                ${recomendaciones}
            </div>
        `;
    }
    

    function goBack() {
        window.location.href = 'formulario.html';
    }

    getScore();

