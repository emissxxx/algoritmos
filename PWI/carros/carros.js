const ul = document.querySelector('#carros');

const carregarCarros = async () => {
        const res = await fetch('http://localhost:8080/PWI/carros');
        const dados = await res.json();
        
        dados.forEach((val) => {
            const li = document.createElement('li');
            li.innerText = val;
            ul.appendChild(li);
        });
};

carregarCarros()