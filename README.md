# 🎧 Sonder

Plataforma web para avaliar, comentar e descobrir músicas, desenvolvida com PHP e PostgreSQL.

## 📑 Sumário

1. [Sobre o projeto](#-1-sobre-o-projeto)
2. [Funcionalidades](#-2-funcionalidades)
3. [Tecnologias utilizadas](#-3-tecnologias-utilizadas)
4. [Requisitos funcionais](#-4-requisitos-funcionais)
5. [Requisitos não funcionais](#-5-requisitos-não-funcionais)
6. [Banco de dados](#-6-banco-de-dados)
7. [Organização dos arquivos](#-7-organização-dos-arquivos)
8. [Como executar o projeto](#-8-como-executar-o-projeto)
9. [Testando o sistema](#-9-testando-o-sistema)

---

## 🎵 1. Sobre o projeto

O **Sonder** é um site para pessoas que gostam de música e querem compartilhar suas opiniões sobre o que escutam. Inspirado no Letterboxd, o projeto permite avaliar músicas, escrever comentários e consultar avaliações.

**Objetivo:** desenvolver uma plataforma de avaliações musicais utilizando HTML, CSS, PHP e PostgreSQL.

## ✨ 2. Funcionalidades

- Cadastro de usuários.
- Login e logout.
- Cadastro de músicas e avaliações.
- Notas de 0 a 5 estrelas.
- Comentários sobre as músicas.
- Consulta, edição e exclusão de avaliações.

## 💻 3. Tecnologias utilizadas

| Tecnologia | Utilização |
|---|---|
| HTML5 e CSS3 | Estrutura e aparência das páginas. |
| PHP | Funcionamento do sistema. |
| PostgreSQL | Armazenamento dos dados. |
| PDO | Conexão entre PHP e PostgreSQL. |
| Git e GitHub | Versionamento e compartilhamento do código. |
| VS Code | Edição dos arquivos. |

O MobaXterm é opcional: ele pode ser usado para acessar um servidor remoto, mas não é necessário para executar o projeto localmente.

## 📋 4. Requisitos funcionais

| Código | Requisito | Descrição |
|---|---|---|
| RF01 | Página inicial | Apresentar o site e suas opções. |
| RF02 | Cadastro de usuários | Permitir criar uma conta. |
| RF03 | Login e logout | Entrar e sair da conta. |
| RF04 | Controle de acesso | Proteger páginas que exigem autenticação. |
| RF05 | Cadastro de avaliações | Cadastrar músicas com nota e comentário. |
| RF06 | Consulta de avaliações | Exibir as avaliações cadastradas. |
| RF07 | Notas em estrelas | Mostrar a nota em formato de estrelas. |
| RF08 | Edição | Permitir editar avaliações. |
| RF09 | Exclusão | Permitir excluir avaliações. |
| RF10 | Identificação do usuário | Relacionar a avaliação ao usuário responsável. |

## ⚙️ 5. Requisitos não funcionais

| Código | Categoria | Descrição |
|---|---|---|
| RNF01 | Usabilidade | Apresentar interface simples. |
| RNF02 | Interface | Utilizar tema escuro e detalhes em roxo. |
| RNF03 | Organização | Manter PHP e CSS em pastas organizadas. |
| RNF04 | Armazenamento | Utilizar PostgreSQL. |
| RNF05 | Segurança | Verificar autenticação nas páginas protegidas. |
| RNF06 | Conexão | Utilizar PDO para conectar ao banco. |
| RNF07 | Manutenção | Facilitar a localização dos arquivos. |
| RNF08 | Compatibilidade | Executar em ambiente com PHP, extensão PDO PostgreSQL e PostgreSQL configurados. |

## 🗄️ 6. Banco de dados

O projeto utiliza um banco PostgreSQL chamado `sonder`, com duas tabelas principais:

- **`usuarios`**: armazena nome, e-mail e senha das contas.
- **`musicas`**: armazena título, artista, álbum, nota, comentário e `usuario_id`, que relaciona a avaliação ao usuário.

O arquivo `database/dump.sql` contém a estrutura inicial do banco, sem contas ou avaliações pessoais de teste.

## 📁 7. Organização dos arquivos

A estrutura principal do projeto inclui:

- `app/`: páginas de cadastro, consulta, edição e exclusão.
- `database/`: conexão e estrutura do banco de dados.
- `includes/`: funções do sistema.
- `login/`: arquivos de autenticação.
- `style/`: arquivos CSS.
- `imagens/` e `assets/`: imagens e recursos visuais.
- `index.php`: página inicial.

## 🚀 8. Como executar o projeto

Estes passos permitem executar o Sonder no próprio computador. Não é necessário usar o MobaXterm para a instalação local.

### 8.1. Requisitos

Instale:
- [Git](https://git-scm.com/downloads)
- [PHP](https://www.php.net/downloads) com as extensões `PDO` e `pdo_pgsql`
- [PostgreSQL](https://www.postgresql.org/download/)
- Um navegador de internet

Confira as extensões do PHP com:

```bash
php -m
```

Na lista, confirme que aparecem `PDO` e `pdo_pgsql`.

### 8.2. Baixar o projeto

No PowerShell (Windows), Terminal (Linux) ou terminal do VS Code, execute:

```bash
git clone https://github.com/Isabelassantoss/Sonder.git
cd Sonder
```

Entre na pasta que contém `index.php`, `database`, `app` e `login`. Se essas pastas estiverem dentro de outra pasta chamada `Sonder`, entre nela também.

### 8.3. Criar usuário e banco de dados

Crie o usuário e o banco usando uma conta administrativa do PostgreSQL. Os comandos dependem do sistema operacional.

**Windows:** abra o SQL Shell (psql) ou o pgAdmin e conecte-se como administrador do PostgreSQL. Execute cada comando SQL separadamente:

```sql
CREATE USER sonder_user WITH PASSWORD 'escolha_uma_senha';
CREATE DATABASE sonder OWNER sonder_user;
```

Substitua `escolha_uma_senha` por uma senha criada para sua instalação. Se o usuário ou o banco já existir, não repita o comando; verifique a configuração existente.

**Linux:** no terminal, execute:

```bash
sudo -u postgres psql
```

No prompt `postgres=#`, execute os dois comandos SQL acima, um de cada vez. Depois, saia com:

```sql
\q
```

### 8.4. Importar a estrutura do banco

No terminal, na pasta principal do projeto, execute:

```bash
psql -h localhost -U sonder_user -d sonder -f database/dump.sql
```

Digite a senha definida para `sonder_user` quando for solicitada. O banco deve existir antes da importação. O arquivo disponibilizado cria a estrutura das tabelas, sem importar dados pessoais ou avaliações de teste.

### 8.5. Configurar a conexão

Abra `database/connect.php` e confira se os valores correspondem à sua instalação:

```php
<?php
$host = 'localhost';
$dbname = 'sonder';
$user = 'sonder_user';
$pass = 'SUA_SENHA_DO_BANCO';

try {
    $conexao = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pass
    );
} catch (PDOException $e) {
    exit("Não foi possível conectar ao banco de dados.");
}
?>
```

Troque `SUA_SENHA_DO_BANCO` pela senha que você definiu. Não publique senhas pessoais no repositório.

### 8.6. Iniciar o site

No terminal, entre na pasta que contém o arquivo `index.php` e execute:

```bash
php -S localhost:8000
```

Mantenha o terminal aberto e acesse [http://localhost:8000](http://localhost:8000).

Se o comando `php` não for reconhecido, configure o PHP no PATH ou execute o PHP pelo caminho completo. Se a página inicial não abrir, confira se o terminal está na pasta correta.

**Importante:** o servidor embutido do PHP serve para desenvolvimento e demonstração local; não deve ser usado como hospedagem pública na internet.

## ✅ 9. Testando o sistema

Depois de abrir o site, verifique se é possível:

- [ ] Criar uma conta e fazer login.
- [ ] Cadastrar uma avaliação musical.
- [ ] Consultar avaliações.
- [ ] Visualizar notas em estrelas.
- [ ] Editar uma avaliação.
- [ ] Excluir uma avaliação.
- [ ] Sair da conta.

Se ocorrer um erro, confira se o PostgreSQL está em execução, se o PHP possui a extensão `pdo_pgsql`, se a senha em `database/connect.php` está correta e se o banco foi importado.

---

## Considerações finais

O Sonder reúne cadastro de usuários, avaliações musicais e gerenciamento de dados em uma plataforma com identidade visual própria. O GitHub disponibiliza o código; para usar o sistema, cada computador precisa ter PHP e PostgreSQL configurados, ou o projeto deve ser hospedado em um servidor apropriado.
