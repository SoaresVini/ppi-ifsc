1) Explique como JavaScript pode ser executado, apresente um print com uma menssagem exemplificando a execução de um Hello

Pode ser executada em diversos ambientes, tais como navegadores web, servidores e até mesmo dispositivos móveis.

2) O JS quando executado em um navegador possui algumas variáveis de ambiente que dão acesso ao recursos explique e apresente um exemplo dos recursos window, document,location, history evidenciando principais funções e propriedades de cada um deles. 

- window: Representa a janela do navegador que está exibindo a página atual e contém muitas propriedades e métodos úteis para trabalhar com a janela atual.

    - window.alert("Essa é uma mensagem de alerta!");

- document: Representa o documento atualmente carregado na janela e é o ponto de entrada para trabalhar com o conteúdo HTML da página.

    - document.getElementById

- location: Fornece informações sobre a URL atual da página e permite navegar para outras páginas.

    - console.log(location.hostname); 

- history: Permite acessar e manipular o histórico de navegação do usuário na sessão atual do navegador. Algumas propriedades e métodos importantes incluem:

    - history.back();

3)Escreva um programa em js que imprima no console todos números de 0 a 100; 

for (let i=0 ; i<=100 ; i++){
    console.log(i);
}

4)Escreva um programa em js que imprima no console todos números de 0 a n, sendo n um
número informado pelo usuário. 

let x = prompt("Alerta")
for (let i = 0; i <= x; i++) {
    console.log(i)
}
