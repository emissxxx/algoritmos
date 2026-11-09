document.addEventListener('DOMContentLoaded', () => {
    const tooltip = document.getElementById('tooltip');
    const nomeEstado = document.getElementById('nome-estado');
    const votosA = document.getElementById('votos-a');
    const votosB = document.getElementById('votos-b');
    const totalVotos = document.getElementById('total-votos');
    const mapContainer = document.querySelector('.map-container');
    const paths = document.querySelectorAll('svg path');

    fetch('dados.json')
        .then(response => response.json())
        .then(dados => {
            const dadosPorUf = {};
            dados.forEach(item => {
                dadosPorUf[item.estado] = item;
            });
            paths.forEach(path => {
                const uf = path.getAttribute('data-uf');
                const info = dadosPorUf[uf];

                if (info) {
                    path.addEventListener('mouseenter', () => {
                        tooltip.style.display = 'block';
                    });

                    path.addEventListener('mousemove', (event) => {
                        const total = info.votos_A + info.votos_B;
                        const percA = total > 0 ? ((info.votos_A / total) * 100).toFixed(2) : 0;
                        const percB = total > 0 ? ((info.votos_B / total) * 100).toFixed(2) : 0;
                        nomeEstado.textContent = info.nome;
                        votosA.textContent = `${percA}%`;
                        votosB.textContent = `${percB}%`;
                        totalVotos.textContent = total.toLocaleString('pt-BR');

                        const rect = mapContainer.getBoundingClientRect();
                        const x = event.clientX - rect.left + 15;
                        const y = event.clientY - rect.top + 15;

                        tooltip.style.left = `${x}px`;
                        tooltip.style.top = `${y}px`;
                    });

                    path.addEventListener('mouseleave', () => {
                        tooltip.style.display = 'none';
                    });
                }
            });
        })
        .catch(error => {
            console.error('Erro ao carregar o arquivo dados.json:', error);
        });
});