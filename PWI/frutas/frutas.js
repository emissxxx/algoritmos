const ul = document.querySelector('#frutas')
const carregarFrutas = async () => {
    const res = await fetch('http://localhost:8080/PWI/frutas');
    const dados = await res.json()
    dados.forEach((val) => {
        const li = document.createElement('li');
        li.innerText = val;
        ul.appendChild(li);
    })
}
carregarFrutas()