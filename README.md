# 🎧 Sonder

Plataforma web para avaliar, comentar e descobrir músicas, desenvolvida com PHP e PostgreSQL.

## 📑 Sumário

1. [Sobre o projeto](#-1-sobre-o-projeto)
2. [Funcionalidades](#-2-funcionalidades)
3. [Tecnologias utilizadas](#-3-tecnologias-utilizadas)
4. [Requisitos funcionais](#-4-requisitos-funcionais)
5. [Requisitos não funcionais](#-5-requisitos-não-funcionais)
6. [Banco de dados](#-6-banco-de-dados)
7. [Organização dos arquivos](#-7-organização-dos-arquinos)
8. [Como executar o projeto](#-8-como-executar-o-projeto)
9. [Testando o sistema](#-9-testando-o-sistema)



---

## 🎵 1. Sobre o projeto

O **Sonder** é um site para pessoas que gostam de música e querem compartilhar suas opiniões sobre o que escutam.

Inspirado no Letterboxd, o projeto permite avaliar músicas, escrever comentários e consultar avaliações.

O site possui um visual escuro, detalhes em roxo e elementos inspirados no universo musical.

**Objetivo:** desenvolver uma plataforma de avaliações musicais utilizando conhecimentos de programação, desenvolvimento web e banco de dados.

## ✨ 2. Funcionalidades

O Sonder possui as seguintes funcionalidades:

- Cadastro de usuários.
- Login e logout.
- Cadastro de músicas e avaliações.
- Notas de 0 a 5 estrelas.
- Comentários sobre as músicas.
- Consulta de avaliações.
- Edição de avaliações.
- Exclusão de avaliações.

## 💻 3. Tecnologias utilizadas

| Tecnologia | Utilização |
|---|---|
| HTML5 | Estrutura das páginas. |
| CSS3 | Aparência do site. |
| PHP | Funcionamento do sistema. |
| PostgreSQL | Armazenamento dos dados. |
| PDO | Conexão entre PHP e banco de dados. |
| Git e GitHub | Armazenamento e versionamento do código. |
| VS Code | Edição dos arquivos. |
| MobaXterm | Acesso ao servidor remoto, quando necessário. |

## 📋 4. Requisitos funcionais

Os requisitos funcionais descrevem o que o sistema permite fazer.

| Código | Requisito | Descrição |
|---|---|---|
| RF01 | Página inicial | Apresentar o site e suas principais opções. |
| RF02 | Cadastro de usuários | Permitir criar uma conta. |
| RF03 | Login | Permitir entrar na conta cadastrada. |
| RF04 | Controle de acesso | Restringir o acesso às páginas protegidas. |
| RF05 | Cadastro de avaliações | Permitir cadastrar músicas com nota e comentário. |
| RF06 | Consulta de avaliações | Exibir as avaliações cadastradas. |
| RF07 | Notas em estrelas | Mostrar a nota da música em formato de estrelas. |
| RF08 | Edição | Permitir editar avaliações existentes. |
| RF09 | Exclusão | Permitir excluir avaliações. |
| RF10 | Identificação do usuário | Relacionar cada avaliação ao usuário responsável. |
| RF11 | Logout | Permitir sair da conta. |

## ⚙️ 5. Requisitos não funcionais

Os requisitos não funcionais descrevem características de funcionamento, aparência e organização do sistema.

| Código | Categoria | Descrição |
|---|---|---|
| RNF01 | Usabilidade | Apresentar uma interface simples e fácil de utilizar. |
| RNF02 | Interface | Utilizar tema escuro e detalhes em roxo. |
| RNF03 | Organização | Manter os arquivos PHP e CSS organizados em pastas. |
| RNF04 | Armazenamento | Utilizar PostgreSQL para guardar os dados. |
| RNF05 | Segurança | Verificar a autenticação nas páginas protegidas. |
| RNF06 | Conexão | Utilizar PDO para conectar o PHP ao PostgreSQL. |
| RNF07 | Manutenção | Facilitar a localização e a alteração dos arquivos. |
| RNF08 | Compatibilidade | Permitir a execução em um ambiente com PHP e PostgreSQL configurados. |

## 🗄️ 6. Banco de dados

O projeto utiliza o PostgreSQL e um banco de dados chamado `sonder`.

O banco possui duas tabelas principais:

**Tabela `usuarios` 👤**

Armazena os dados das contas cadastradas, como nome, e-mail e senha.

**Tabela `musicas` 🎵**

Armazena os dados das avaliações:

- `id`: identificador da avaliação.
- `titulo`: título da música.
- `artista`: nome do artista.
- `album`: nome do álbum.
- `nota`: nota atribuída.
- `comentario`: opinião do usuário.
- `usuario_id`: identificador de quem cadastrou a avaliação.

O campo `usuario_id` relaciona as avaliações aos usuários cadastrados.

## 📁 7. Organização dos arquivos

O projeto está dividido em pastas para facilitar a localização dos arquivos.

```text
Sonder/
├── app/
│   ├── create.php
│   ├── select.php
│   ├── update.php
│   └── delete.php
├── database/
│   ├── connect.php
│   └── dump.sql
├── includes/
│   └── functions.php
├── login/
├── style/
├── imagens/
├── assets/
├── index.php
└── documentacao.md
```

*Observação: os arquivos e as pastas devem corresponder à versão atual do projeto no GitHub.*

- `app/`: páginas de cadastro, consulta, edição e exclusão.
- `database/`: conexão e arquivos do banco de dados.
- `includes/`: funções utilizadas pelo sistema.
- `login/`: arquivos de autenticação.
- `style/`: arquivos CSS.
- `imagens/` e `assets/`: imagens e outros recursos visuais.
- `index.php`: página inicial.
- `documentacao.md`: documentação do projeto.

## 🚀 8. Como executar o projeto

Siga os passos abaixo para baixar e executar o Sonder no seu próprio computador.

### 8.1. O que você precisa

Antes de começar, instale ou tenha configurado:

- **Git:** para baixar os arquivos do projeto.
- **PHP:** com as extensões `PDO` e `pdo_pgsql`.
- **PostgreSQL:** para armazenar os dados.
- **Navegador de internet:** para acessar o site.
- **VS Code ou outro editor:** para visualizar e editar os arquivos.

O MobaXterm é opcional. Ele pode ser utilizado para acessar um servidor Linux remoto, mas não é necessário para executar o projeto localmente.

### 8.2. Baixar os arquivos 📥

Abra o terminal do VS Code ou o PowerShell e execute:

```bash
git clone https://github.com/Isabelassantoss/Sonder.git
```

Entre na pasta baixada:

```bash
cd Sonder
```

**Importante:** execute os próximos comandos na pasta que contém o arquivo `index.php` e as pastas `database`, `app` e `login`. Se essas pastas estiverem dentro de outra pasta chamada `Sonder`, entre nela também.

### 8.3. Criar o usuário e o banco de dados 🗄️

O banco utilizado pelo projeto se chama `sonder`, e o usuário de conexão se chama `sonder_user`.

**No Windows:**

Abra o PowerShell ou o terminal do VS Code e execute:

```powershell
psql -U postgres -d postgres
```

Digite a senha do administrador do PostgreSQL quando for solicitada. Quando aparecer o prompt `postgres=#`, execute um comando por vez:

```sql
CREATE USER sonder_user WITH PASSWORD 'sonder123';
```

```sql
CREATE DATABASE sonder OWNER sonder_user;
```

Para sair do PostgreSQL, digite:

```sql
\q
```

**No Linux:**

Abra o terminal e execute:

```bash
sudo -u postgres psql
```

Quando aparecer o prompt `postgres=#`, execute os mesmos dois comandos SQL apresentados na seção do Windows, um por vez. Depois, saia com:

```sql
\q
```

**Importante:** se o usuário ou o banco já existir, não crie novamente. Verifique se as configurações existentes correspondem às utilizadas pelo projeto.

### 8.4. Importar a estrutura do banco de dados 📦

Na pasta principal do projeto, execute:

```bash
psql -h localhost -U sonder_user -d sonder -f database/dump.sql
```

Digite a senha definida para `sonder_user` quando for solicitada.

O banco `sonder` precisa estar criado antes da importação. O arquivo `database/dump.sql` contém a estrutura inicial das tabelas utilizadas pelo sistema.

Se ocorrer um erro durante a importação, confira a mensagem exibida antes de continuar.

### 8.5. Configurar a conexão 🔗

Abra o arquivo `database/connect.php` no editor de código e confira os dados de conexão:

- **Servidor:** `localhost`, se o PostgreSQL estiver no próprio computador.
- **Banco de dados:** `sonder`.
- **Usuário:** `sonder_user`.
- **Senha:** `sonder123`.

### 8.6. Iniciar o site 🌐

No terminal, entre na pasta que contém o arquivo `index.php` e execute:

```bash
php -S localhost:8000
```

Mantenha o terminal aberto enquanto estiver utilizando o site.

No navegador, acesse:

http://localhost:8000

### 8.7. Verificar o funcionamento ✅

Depois de abrir o site, teste as principais funcionalidades:

- [ ] A página inicial abre corretamente.
- [ ] É possível cadastrar um usuário.
- [ ] É possível fazer login e logout.
- [ ] É possível cadastrar uma avaliação musical.
- [ ] As avaliações aparecem na página de consulta.
- [ ] É possível editar e excluir avaliações.

Se o site não funcionar, confira se o PostgreSQL está em execução, se o PHP possui a extensão `pdo_pgsql`, se os dados de conexão estão corretos e se a estrutura do banco foi importada sem erros.

## ✅ 9. Testando o sistema

Depois de abrir o site, verifique se é possível:

- [ ] Criar uma conta e fazer login.
- [ ] Cadastrar uma avaliação musical.
- [ ] Consultar as avaliações.
- [ ] Visualizar as notas em estrelas.
- [ ] Editar uma avaliação.
- [ ] Excluir uma avaliação.
- [ ] Sair da conta.

Se ocorrer algum erro, confira a conexão com o banco de dados e as configurações do PHP.

---

## Considerações finais

O Sonder foi desenvolvido para colocar em prática conhecimentos de HTML, CSS, PHP e PostgreSQL.
O projeto reúne cadastro de usuários, avaliações musicais e gerenciamento de dados em uma plataforma com identidade visual própria.
