# Conecta + Saúde - Entenda o projeto e execute ele em seu computador

O Conecta + Saúde é uma plataforma que conecta médicos voluntários com a comunidade de Embu-Guaçu, para isso criamos uma solução web para cadastramento de médicos voluntários e pacientes a fim de levar mais saúde e bem-estar a população.

O projeto está em fase de desenvolvimente e é possível encontrar nesses repositório o MVP do projeto com algumas funcionalidades e as páginas web implementadas.

Esse arquivo será um guia para a instalação do projeto em um dispositivo local, para melhor usabilidade da implementação remomentamos que utilize [VS Code][link_vscode], ou um editor de código de sua escolha.

## Preparando o Ambiente

Para que o a aplicação funcione em seu computador é necessário ter instalado:
> - PHP, você pode fazer o download clicando [aqui][download_php]
> - Composer, você pode fazer o download clicando [aqui][download_composer]

Após feito o download, instale ambos os softwares em sua máquina.

## Baixando a aplicação e configurando o sistema

### Clonando o Projeto

Já dentro do VS Code (ou seu editor de preferência), abra o terminal navegue até a pasta onde deseja clonar o projeto, digite o seguinte comando para clonar o repositório do projeto a partir do GitHub:

```text
git clone https://github.com/bryanmoreira/hackathon
```

### Instalando Dependências

Abra o projeto recém clonado no Vs Code e execute o comando abaixo para instalar as dependências do Laravel:

```text
composer install
```

### Configurando o Arquivo

Copie o arquivo '.env.example' para '.env' e em seguida acesse o arquivo php.ini, localize dentro do arquivo as linhas:

> * XXXXXXXXXXXXXXX
> * XXXXXXXXXXXXXXX
> * XXXXXXXXXXXXXXX

Nas linhas acima, tire o ';' da frente para descomentar a linha, em seguida salve o arquivo.

Após as alterações, gere uma nova chave de aplicativo usando o comando:

```text
php artisan key:generate
```

### Configurar o Banco de Dados

No Vs Code abra a pasta do projeto chamada 'database' e altere as linhas 11 e 14 para:
> * DB_CONNECTION=sqlite
> * DB_DATABASE=database/database.sqlite


### Executar as Migrações

Execute as migrações do banco de dados usando o comando:

```text
php artisan migrate
```

Clique em 'y' para selecionar o opção 'yes' e em seguinda execute.

### Instalando e Copilando os recursos Front-end

Execute o comando para instalar o npm:

```text
npm install
```

E em seguinda o comando para executar o npm:

```text
npm run dev
```
Caso entre em um ambiente diferente clique em Ctrl + C para sair do ambiente

### Iniciando o servidor de Desenvolvimento

Você pode iniciar o servidor local com o seguinte comando:

```text
php artisan serve
```

Isso iniciará o servidor, se for o servidor padrão será o 'http://localhost:8000' ou '127.0.0.1:8000', copie o servidor local criado e cole no seu navegador.

Isso te dará acessa as funcionalidades existentes do projeto.

## Framewort Utilizado

Neste projeto foi utilizado o framework da Laravel, saiba mais sobre este framewort acessando a [documentação de apoio][Laravel_site].

<!---
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.
--->

## Licença

O framework Laravel é software de código aberto licenciado pela [MIT license](https://opensource.org/licenses/MIT).


[Laravel_site]: https://laravel.com/docs/10.x
[link_vscode]: https://code.visualstudio.com/
[download_php]: https://www.php.net/downloads.php
[download_composer]: https://getcomposer.org/download/
