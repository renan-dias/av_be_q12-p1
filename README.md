Claro, aqui está o README completo com todas as informações solicitadas:

# Avaliação Prática de Backend - Projeto de Locadora de Filmes (2077)

Este repositório contém o código de um projeto PHP de CRUD (Criar, Ler, Atualizar, Deletar) para gerenciar informações de clientes e filmes de uma antiga locadora de filmes, encontrado em um projeto antigo do GitHub.

## Enunciado

O ano é 2077, e você decide vasculhar seus projetos antigos no extinto GitHub. Para sua surpresa, você encontra um repositório com um projeto PHP de CRUD (Criar, Ler, Atualizar, Deletar) para gerenciar informações de reclamações.

Ao tentar executar o projeto, você se depara com diversos erros e percebe que ele não está conectado a um banco de dados. Sua tarefa é:

1.  **Clonar o repositório:** Utilize o Git para clonar o repositório em sua máquina local.
2.  **Identificar e corrigir os erros:** Analise o código PHP e corrija todos os erros que impedem a execução correta do projeto.
3.  **Conectar o projeto a um banco de dados:** Crie um banco de dados MySQL com as tabelas necessárias para armazenar as informações dos clientes e filmes. Em seguida, modifique o código PHP para conectar-se ao banco de dados e realizar as operações de CRUD.

**Dica:**

Como todas as partes do CRUD precisam se conectar ao banco de dados, lembre-se de incluir o arquivo de conexão com o banco de dados em todos os arquivos PHP relevantes utilizando a instrução `include "arquivo_conexao.php";` (ou o nome do arquivo de conexão que você criar).

## Instruções para Clonar o Repositório

1.  **Certifique-se de ter o Git instalado em sua máquina.** Caso contrário, você pode baixá-lo em [https://git-scm.com/downloads](https://git-scm.com/downloads).
2.  **Abra o terminal ou prompt de comando.**
3.  **Navegue até o diretório onde você deseja clonar o repositório.**
4.  **Execute o seguinte comando:**

    ```bash
    git clone https://github.com/renan-dias/av-be-q12-p1.git
    ```

    

5.  **Após a conclusão do clone, navegue até o diretório do repositório:**

    ```bash
    cd [nome do repositório]
    ```

 

## Instruções para Executar o Código

1.  **Certifique-se de ter um servidor web com suporte a PHP instalado em sua máquina.** Você pode usar o XAMPP, WAMP ou outro servidor similar.
2.  **Copie os arquivos do repositório para o diretório raiz do seu servidor web.**
3.  **conecte-se a  um banco de dados MySQL.**
4.  **Crie um arquivo chamado `conexao.php` para armazenar as informações de conexão com o banco de dados (host, usuário, senha, nome do banco de dados).**
5.  **Modifique o código PHP para conectar-se ao banco de dados, utilizando as informações do arquivo `conexao.php`.**
6.  **Abra um navegador web e acesse o arquivo principal do projeto através do seu servidor web.** Por exemplo, se você estiver usando o XAMPP, o endereço pode ser `http://localhost/av_be_q12/index.php`.
7.  **Teste todas as operações de CRUD para garantir que o sistema esteja funcionando corretamente.**

## Observações

* Certifique-se de que o código PHP esteja livre de erros e siga as boas práticas de programação.
* Utilize a extensão MySQLi ou PDO para conectar o PHP ao banco de dados.
* Você pode adicionar estilos CSS para melhorar a aparência do projeto.
* Teste o sistema completo para garantir que todas as funcionalidades estejam operacionais.

