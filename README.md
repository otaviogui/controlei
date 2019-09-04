# Para rodar o projeto leia as instruções

## Primeiro passos

## Instalações
* Git bash
* Xampp server 
* Composer ( Ao instalar procure na pasta do xamp o arquivo chamado PHP tem que ser versão >=7 para cima)
* Node JS

## Logo apos das instalações rode os seguintes comandos na raiz do projeto 
* composer install ( Irá instalar todas as dependencias do projeto)
* npm install ( Irá instalar todas as dependencias do projeto )

## Iniciando o programa
* Ligar o xampp Apache e Mysql
* Abrir terminal de comando na raiz do projeto e executar o seguinte codigo { php artisan server } 
* Abrir o segun termina de comando na raiz do projeto e executar { npm run watch } 
* Lembre nao pode fechar os dois terminais. 
* Depois de configurado e tudo seu banco rode { php artisan make:migration } servirá para criar as tabelas no banco de dados.

## Após realizar as mudanças passos para atualizar o arquivo remoto 
* Para atualizar o arquivo remoto assim eu podendo ter acesso configure o remoto primeiro. { git remote add origin "Aqui vai a url do projeto" }
* use { git add * } para adicionar todas as mudanças, caso seja mudanças especificas rode { git add nomeDoArquivo.extençãoDele }, caso esteja em uma pasta coloque o caminho da pasta. 

* Codigo { git status} vai mostar todas as mudanças que realizou

* codigo { git commit -m"Aqui você escreve o que você fez de mudança exe: Fiz o layout da tela login" } escreva em inglês para padronização. 

* Depois { git push origin master} - A função push é para atualizar o projeto no site do github 

OBS: No outro dia quando for mexer no projeto abra o terminal de comando e rode { git push origin master}, esse codigo vai atualizar seu projeto caso eu tenha alterado


## Arquivo .ENV Configurar 
Lembre de configurar o seu banco de dados e seu servidor, para isso na raiz do projeto tem um arquivo chamado .env, realize o acesso e procure por essas informações 
***Dados do banco de dados***
DB_CONNECTION=mysql
DB_HOST=127.0.0.1   ***Numero do servidor por padrão é esse mesmo***
DB_PORT=3306       ***porta do servidor do bda que está rodando***
DB_DATABASE=teste  ***Aqui é o nome do seu banco, padrão utf8-general-cli***
DB_USERNAME=root   ***Aqui é o nome do usuario do seu banco ***
DB_PASSWORD=       ***Aqui é a senha,  caso nao tenha senha deixa vazio mesmo***