let filmesGlobais = [];

const gridFilmes = document.getElementById('gridFilmes');
const inputBusca = document.getElementById('inputBusca');
const selectGenero = document.getElementById('selectGenero');

async function carregarFilmes() {
    try {
        const resposta = await fetch('filmes.json');
        filmesGlobais = await resposta.json();
        renderizarFilmes(filmesGlobais);
    } catch (erro) {
        console.error('Erro ao carregar o arquivo JSON:', erro);
    }
}

function renderizarFilmes(lista) {
    gridFilmes.innerHTML = '';

    lista.forEach(filme => {
        const card = document.createElement('div');
        card.classList.add('card-filme');

        card.innerHTML = `
      <img src="${filme.imagem}" alt="${filme.titulo}">
      <div class="info-filme">
        <h3>${filme.titulo}</h3>
        <p>Diretor: ${filme.diretor}</p>
        <p>Ano: ${filme.ano}</p>
        <p>Gênero: ${filme.genero}</p>
        <span class="nota">Nota: ${filme.nota}</span>
      </div>
    `;

        gridFilmes.appendChild(card);
    });
}

function filtrarFilmes() {
    const termoBusca = inputBusca.value.toLowerCase();
    const generoSelecionado = selectGenero.value;

    const filmesFiltrados = filmesGlobais.filter(filme => {
        const combinaTitulo = filme.titulo.toLowerCase().includes(termoBusca);
        const combinaGenero = generoSelecionado === 'todos' || filme.genero === generoSelecionado;

        return combinaTitulo && combinaGenero;
    });

    renderizarFilmes(filmesFiltrados);
}

inputBusca.addEventListener('input', filtrarFilmes);
selectGenero.addEventListener('change', filtrarFilmes);

carregarFilmes();