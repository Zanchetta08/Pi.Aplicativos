# Tarefa 07 - APP


</br></br>
## 📋 Introdução (Tema)
#### Na atual dinâmica do mercado de trabalho, as empresas de diversos setores têm enfrentado um desafio significativo: a disparidade entre as expectativas e necessidades da organização e o conhecimento técnico e comportamental dos profissionais disponíveis. Essa diferença muitas vezes dificulta o recrutamento de talentos qualificados, levando as empresas a buscar alternativas para suprir essa lacuna e garantir o desenvolvimento contínuo de sua equipe.
#### Diante desse cenário, algumas empresas estão adotando uma abordagem inovadora, assumindo a dianteira e propondo-se a desenvolver as competências técnicas e comportamentais dos indivíduos antes mesmo de contratá-los. Essa nova estratégia consiste em oferecer programas de treinamento abrangentes, nos quais um grande número de pessoas é capacitado, permitindo às empresas identificar e selecionar os profissionais mais destacados e alinhados com suas necessidades.



</br></br>
## 📌 Objetivo
#### Este projeto tem como objetivo utilizar os diversos temas aprendidos em aula, para então, desenvolver um aplicativo para administrar e acompanhar todos os alunos e empresas parceiras.


</br></br>
## 🛠️ Linguagens utilizadas
* [Php](https://www.php.net/docs.php) - Linguagem utilizada
* [Laravel](https://laravel.com/docs/10.x/readme) - Framework utilizado
* [Electron](https://www.electronjs.org/pt/docs/latest) - Framework utilizado
* [MySQL](https://dev.mysql.com/doc/) - Banco de Dados utilizado
* [Docker](https://docs.docker.com/) - Docker
* [HTML](https://devdocs.io/html/) - HTML
* [Css](https://devdocs.io/css/) - CSS

<h3 align="left">Languages and Tools:</h3>
<p align="left"> <a href="https://getbootstrap.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-plain-wordmark.svg" alt="bootstrap" width="40" height="40"/> </a> <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a> <a href="https://www.docker.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/docker/docker-original-wordmark.svg" alt="docker" width="40" height="40"/> </a> <a href="https://www.electronjs.org" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/electron/electron-original.svg" alt="electron" width="40" height="40"/> </a> <a href="https://git-scm.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git" width="40" height="40"/> </a> <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> <a href="https://laravel.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain-wordmark.svg" alt="laravel" width="40" height="40"/> </a> <a href="https://www.mysql.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/> </a> <a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> </p>

</br></br>
## Frontend
#### Frontend refere-se à parte do software que interage diretamente com o usuário. É a interface com a qual as pessoas interagem visualmente e por meio da qual podem acessar as funcionalidades do sistema. O desenvolvimento frontend envolve a criação de elementos visuais, como layouts, botões, formulários e outros componentes de uma aplicação. As tecnologias comumente usadas no frontend incluem HTML (HyperText Markup Language) para estruturar o conteúdo, CSS (Cascading Style Sheets) para estilizar a aparência e JavaScript para adicionar interatividade e comportamento aos elementos.
</br>

<p align="center">
  <img src="/media/gif1_coding.gif" alt="animated" width="350"/>
</p>
</br>

[Saiba mais](https://css-tricks.com/front-end-documentation-style-guides-and-the-rise-of-mdx/) - Saiba mais sobre o frontend!


</br></br>
## Backend
#### Backend, por outro lado, refere-se à parte do software que fica "nos bastidores" e é responsável pelo processamento dos dados e pela lógica de negócios. O desenvolvimento backend envolve a criação de servidores, bancos de dados e sistemas que suportam as funcionalidades do sistema. Ele lida com a manipulação de dados, autenticação, autorização, lógica de negócios e outras operações. As tecnologias comumente usadas no backend incluem linguagens de programação como Java, Python, PHP ou JavaScript (usando frameworks como Node.js), além de bancos de dados como MySQL, PostgreSQL ou MongoDB.
</br>

<p align="center">
  <img src="/media/gif3_code.gif" alt="animated" width="350"/>
</p>
</br>

[Saiba Mais](https://docs.backend.ai/en/latest/) - Saiba mais sobre o backend!



</br></br>
## 🔧 Instalação

#### Passo 1
* Crie o arquivo .env
```
cp .env.example .env
```
* Atualize as variáveis de ambiente do arquivo .env
```
APP_NAME-Laravel
APP_URL-http://localhost:8080

DB_PASSWORD-root
```
* Suba os containers do projeto
```
docker compose up -d
```
* Acessar o container
```
docker compose exec app bash
```
* Instalar as dependências do projeto
```
composer install
```
* Gerar a key do projeto Laravel
```
php artisan key:generate
```
* Comando usado para executar as migrações do banco de dados.
```
php artisan migrate
```
* Execução da alimentação (seeding) do banco de dados. (Lembre-se de configurar adequadamente os dados de conexão com o banco de dados no arquivo '.env' do seu projeto Laravel antes de executar o comando 'php artisan db:seed'.)
```
php artisan db:seed
```

* Caso queira usar o teste unitário rodar o código abaixo
```
vendor/bin/phpunit
```



</br></br>
## 🚀 Começando

#### Passo 2
* **Utilizando um novo terminal**: use o código abaixo para começar
```
git init
```
* Clone o componente do repositório complementar
```
git clone https://github.com/Zanchetta08/Electron.git
```
* Instalação electron
```
npm install electron
```
* Rodar o electron
```
npm run electron
```
* Executar o framework (Certifique-se de ter instalado o PHPUnit como uma dependência em seu projeto usando o Composer.)

```
npm install electron
```

* Inicialização do programa

```
npm run electron
```


</br></br>
## ⚙️ Funcionamento

* O aplicativo se inicia com o login/cadastro
* No menu inicial existem as seguintes opções disponíveis:
  * Dashboard
  * Treinamentos disponíveis
  * Criação de treinamentos
  * Vagas
  * Criação de vagas


#### Menu do programa
 <p align="center">
  <img src="/media/image.png"  width="700"/>
</p>
</br>


#### Imagem mostrando a criação de treinamentos
 <p align="center">
  <img src="/media/image2.png"  width="700"/>
</p>
</br>

</br></br>
## 🗿 Integrantes 

<table align="center">
<tr>
<td align="center"><a href="https://github.com/xF3rd"><img src="https://github.com/Gabriewlz/Teste/blob/main/profile_xF3rd.png" width=100px height=100px /></a></br> <h4 style="color:red;">Fernando Bordin Correa</h4><br>Ra:20098174
</a></td>

<td align="center" ><a href="https://github.com/Zanchetta08"><img src="https://github.com/Gabriewlz/Teste/blob/main/profile_Zanchetta08.png" width=100px height=100px /></a></br> <h4 style="color:red;">Plinio Zanchetta de Souza Fernandes Filho</h4><br>Ra:22023003
</a></td>

<td align="center"><a href="https://github.com/YshalltearY"><img src="https://github.com/Gabriewlz/Teste/blob/main/profile_YshalltearY.jpeg" width=100px height=100px /></a></br> <h4 style="color:red;">Nathan Rocha Gardin</h4><br>Ra:21008193
</a></td>

<td align="center"><a href="https://github.com/Gabriewlz"><img src="https://github.com/Gabriewlz/Teste/blob/main/profile_Gabriewlz.png" width=100px height=100px /></a></br> <h4 style="color:red;">Gabriel Teixeira Gabetta</h4><br>Ra:21003071
</a></td>

<td align="center"><a href="https://github.com/MeindlT"><img src="https://github.com/Gabriewlz/Teste/blob/main/profile_MeindlT.png" width=100px height=100px /></a></br> <h4 style="color:red;">Thiago Meindl Leonardo</h4><br>Ra:21003771
</a></td>

<td align="center"><a href="https://github.com"><img src="https://github.com/Gabriewlz/Teste/blob/main/profile_Default.jpg" width=100px height=100px /></a></br> <h4 style="color:red;">Rafael Fatol Lopes</h4><br>Ra:21013400
</a></td>
</tr>
</table>
