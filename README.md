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

> * ;extension=pdo_sqlite
> * ;extension=openssl
> * ;extension=fileinfo

Nas linhas acima, tire o ';' da frente para descomentar a linha, em seguida salve o arquivo.

Após as alterações, gere uma nova chave de aplicativo usando o comando:

```text
php artisan key:generate
```

### Configurar o Banco de Dados

No Vs Code abra a pasta do projeto chamada 'database' e altere as linhas 11 e 14 para:
> * DB_CONNECTION=sqlite
> * DB_DATABASE=database/database.sqlite

Em seguida, copie o caminho do arquivo database/database.sqlite e substitua no DB_DATABASE
> * C:\Users\Desktop\Documents\hackathon\database\database.sqlite


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