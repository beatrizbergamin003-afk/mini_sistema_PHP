# Gestão de alunos
## Mini sistema com crud HTML + CSS + PHP + postgress

## Introdução:
### O que é o projeto?
  O Gestão de Alunos é uma aplicação web simples desenvolvida no modelo CRUD(Create, Read, Update, Delete). O projeto foi construido para gerenciar o cadastro e a manutenção de informações acadêmicas e de contato de alunos em um banco de dados relacional.

  ### Como funciona?
   A interface visual foi construída com HTML5. O processamento dos dados fica por conta do PHP, que recebe as informações enviadas pelos formulários (via métodos GET e POST) e executa os comandos SQL correspondentes no banco de dados PostgreSQL para salvar, ler ou alterar registros.

  ## Requisitos funcionais:

 | ID   | Título               | Descrição                                                                         | Prioridade |
| :--- | :------------------- | :-------------------------------------------------------------------------------- | :--------- |
| RF01 | Cadastro do aluno    | O sistema deve permitir o registo de novos alunos para frequentar a escola/colégio. | Média      |
| RF02 | Relatório dos alunos | O sistema deve listar todos os alunos cadastrados na plataforma para a visualização. | Média      |
| RF03 | Atualização do aluno | O sistema deve possuir a capacidade de alterar o estado: Ativo ou Inativo.        | Média      |
| RF04 | Exclusão do aluno    | O sistema deve permitir apagar o registo de um aluno do banco de dados.          | Média      |
| RF05 | Consultar o aluno    | O sistema deve listar o aluno com base no ID mostrando as informações sobre ele.  | Média      |



### Objetivos 

 ## 1. Tela Incial 
   O meu objetivo na página inicial foi criar um ponto central de boa-vindas para o sistema, garantindo uma interface simples e direta. Fiz uma estrutura na área para conter um menu de navegação superior fixo, que permite que eu me alterne entre as páginas de cadastrar, ver todos que já foram cadastrados, ver só um aluno especifíco, atualizar algum dado ou deletar rapidamente.

Na tela:

Aparece uma página central de boas-vindas com um menu de navegação fixo no topo da tela, permitindo alternar facilmente entre as seções do sistema (Cadastrar, Relatórios, Consultar, Atualizar e Excluir).

No código:

Monta a estrutura básica HTML do site, carregando o cabeçalho (header.php) com a barra de navegação no topo e o rodapé (footer.php) ao final, servindo como ponto central de navegação da aplicação.
  

## 2. Relatórios de alunos cadastrados 
Nesta secção, o propósito principal foi desenvolver uma funcionalidade que consulte e liste todos os estudantes armazenados na base de dados PostgreSQL. Criei um fluxo onde o PHP executa a leitura completa dos registros para apresentar a ficha de cada aluno, incluindo o ID, nome, turma, e-mail, data de nascimento e o estado(ativo ou inativo). Proporcionando-me uma visão geral do volume total de alunos inscritos no sistema.

Na tela:

Aparece uma lista com todos os alunos (menos os que foram deletados) mostrando dados como data de nascimento, e-mail, nome, se está ativo e a turma onde o aluno está.

No código:

Ele começa chamando o arquivo que guarda todas as funções do sistema. Depois, monta a estrutura básica da página na internet. No topo e no final da página, ela puxa o cabeçalho e o rodapé para manter o visual padrão do site. Bem no meio (no main), ele dá a ordem para rodar a função do relatório, que vai trazer os dados do banco e jogar na tela.


## 3. Consulta de alunos especifícos
Para evitar a necessidade de procurar manualmente um registro numa lista extensa, projetei esta página focada na busca individual. O objetivo é permitir a inserção do código único (ID) do aluno num campo de pesquisa para que o sistema filtre e devolva unicamente os dados do estudante pretendido, tornando a verificação de informações pontuais muito mais ágil.

Na tela:

Aparece um título indicando "Consulta aluno:" e um campo numérico onde o usuário digita o ID do aluno desejado. Há um botão "Consultar" para enviar a busca e um link direto para "Consulta DB". Após clicar em consultar, o resultado das informações do aluno buscado é exibido logo abaixo. No topo e no rodapé, aparecem a navegação do site e a área de anúncios.

No código:

Ele começa chamando o arquivo com as funções do sistema. Depois, constrói a estrutura da página incluindo o cabeçalho no topo. No formulário, cria um campo do tipo número para receber o ID do aluno. Quando o formulário é enviado (via requisição POST), o PHP inclui o arquivo de conexão com o banco de dados e chama a função consultar(), passando a conexão e o ID informado. Por fim, insere um link de navegação para "select.php" e fecha a página com o rodapé padrão.

## 4. Cadastrar Novo aluno
Desenvolvi essa página com o objetivo de capturar novas entradas de dados de forma intuitiva através de um formulário. Os campos recolhem o nome, turma, data de nascimento, e-mail e o estado do aluno, enviando estes dados via PHP para serem inseridos diretamente na tabela do PostgreSQ. Incluí também um botão para limpar os campos, facilitando o cancelamento ou a correção da digitação antes de submeter os dados.

Na tela:

Aparece um formulário com campos de texto e seleção para inserir os dados de um novo aluno: Nome, Turma, E-mail, Data de Nascimento e opção de seleção (rádio) para indicar se ele está Ativo (Sim ou Não). Também há um botão "Cadastrar" para salvar os dados e um botão "Limpar" para resetar os campos preenchidos.

No código:

Começa chamando o arquivo de conexão com o banco de dados e o arquivo de funções gerais. Em seguida, monta o HTML estruturado com o cabeçalho no topo e a área principal (main). Dentro do main, define o formulário com os devidos campos de entrada (input). Ao enviar o formulário (método POST), o código verifica a requisição e executa a função cadastrar(), enviando como parâmetros a conexão e os valores digitados (nome, turma, nascimento, status ativo e e-mail). Finaliza carregando o rodapé padrão do site.

## 5. Atualizar alunos 
O objetivo dessa funcionalidade é permitir a alteração das informações de um aluno já existente sem a necessidade de manipular diretamente a base de dados. Ao introduzir o ID do estudante e preencher os novos dados, a aplicação executa um comando de atualização no banco de dados. Mantive uma instrução orientadora para repitir os dados atuais nos campos que não precisam de alteração, garantindo a integridade do registro.

Na tela:

Exibe um formulário de alteração de cadastro. O primeiro campo obriga a digitação do ID do aluno que será atualizado. Logo abaixo, estão disponíveis os campos para redefinir as informações de Nome, Turma, E-mail, Data de Nascimento e o status de Ativo (Sim/Não). Há botões para confirmar as alterações ("Cadastrar"/Atualizar) e para resetar o formulário ("Limpar").

No código:

Abre com a inclusão do arquivo de funções do sistema. Desenvolve a estrutura de marcação da página, inserindo o cabeçalho padrão no topo. Na seção principal (main), cria o formulário contendo a entrada obrigatória do ID do aluno junto aos demais campos de dados cadastrais. Ao submeter o formulário (via POST), o PHP chama a função atualizar(), passando a conexão do banco de dados, o ID informado e todos os novos dados digitados para substituir os registros antigos. Para concluir, inclui o rodapé visual na parte inferior da tela.

## 6. Excluir alunos
Criei essa funcionalidade para disponibilizar um mecanismo rápido e direto de remoção permanente de dados. Ao introduzir o ID correspondente e confirmar a ação, a aplicação elimina o registro do aluno selecionado no PostgreSQL, sendo ideal para remover cadastros indevidos ou limpar dados inseridos durante a fase de testes.

Na tela:

Exibe um título "Página para apagar o usuário:" com um campo numérico para digitar o ID do aluno que será removido e o botão "Apagar". Também possui o link "Consulta DB" para verificar a lista do banco, além do menu de navegação no topo e a área de anúncios no rodapé.

No código:

Primeiro, faz a inclusão do arquivo contendo as funções do sistema. Desenvolve a estrutura básica HTML incluindo o cabeçalho padrão. Cria o formulário contendo apenas a caixa de texto para o ID e o botão de submissão. Quando o botão "Apagar" é acionado (via POST), conecta ao banco de dados e roda a função apagar(), informando a conexão e o ID que deve ser deletado. Encerra a página com o link para visualização da lista e a inclusão do rodapé.






```mermaid
erDiagram
ALUNO {
        int id PK "Chave Primária (Auto-incremento)"
        string nome "Nome do aluno"
        string turma "Identificação da turma"
        string email "Endereço de correio eletrónico"
        date data_nascimento "Data de nascimento (AAAA-MM-DD)"
        boolean status "Estado do aluno (1-Ativo, 0-Inativo)"
    }





