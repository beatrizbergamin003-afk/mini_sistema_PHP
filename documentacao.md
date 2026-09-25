# Gestão de alunos
## Mini sistema com crud HTML + CSS + PHP + postgress

## Introdução:
### O que é o projeto?
  O Gestão de Alunos é uma aplicação web simples desenvolvida no modelo CRUD(Create, Read, Update, Delete). O projeto foi construido para gerenciar o cadastro e a manutenção de informações acadêmicas e de contato de alunos em um banco de dados relacional.

  ### Como funciona?
   A interface visual foi construída com HTML5. O processamento dos dados fica por conta do PHP, que recebe as informações enviadas pelos formulários (via métodos GET e POST) e executa os comandos SQL correspondentes no banco de dados PostgreSQL para salvar, ler ou alterar registros.



### Objetivos 

 ## 1. Tela Incial 
   O meu objetivo na página inicial foi criar um ponto central de boa-vindas para o sistema, garantindo uma interface simples e direta. Fiz uma estrutura na área para conter um menu de navegação superior fixo, que permite que eu me alterne entre as páginas de cadastrar, ver todos que já foram cadastrados, ver só um aluno especifíco, atualizar algum dado ou deletar rapidamente.
  

## 2. Relatórios de alunos cadastrados 
Nesta secção, o propósito principal foi desenvolver uma funcionalidade que consulte e liste todos os estudantes armazenados na base de dados PostgreSQL. Criei um fluxo onde o PHP executa a leitura completa dos registros para apresentar a ficha de cada aluno, incluindo o ID, nome, turma, e-mail, data de nascimento e o estado(ativo ou inativo). Proporcionando-me uma visão geral do volume total de alunos inscritos no sistema.

## 3. Consulta de alunos especifícos
Para evitar a necessidade de procurar manualmente um registro numa lista extensa, projetei esta página focada na busca individual. O objetivo é permitir a inserção do código único (ID) do aluno num campo de pesquisa para que o sistema filtre e devolva unicamente os dados do estudante pretendido, tornando a verificação de informações pontuais muito mais ágil.

## 4. Cadastrar Novo aluno
Desenvolvi essa página com o objetivo de capturar novas entradas de dados de forma intuitiva através de um formulário. Os campos recolhem o nome, turma, data de nascimento, e-mail e o estado do aluno, enviando estes dados via PHP para serem inseridos diretamente na tabela do PostgreSQ. Incluí também um botão para limpar os campos, facilitando o cancelamento ou a correção da digitação antes de submeter os dados.

## 5. Atualizar alunos 
O objetivo dessa funcionalidade é permitir a alteração das informações de um aluno já existente sem a necessidade de manipular diretamente a base de dados. Ao introduzir o ID do estudante e preencher os novos dados, a aplicação executa um comando de atualização no banco de dados. Mantive uma instrução orientadora para repitir os dados atuais nos campos que não precisam de alteração, garantindo a integridade do registro.

## 6. Excluir alunos
Criei essa funcionalidade para disponibilizar um mecanismo rápido e direto de remoção permanente de dados. Ao introduzir o ID correspondente e confirmar a ação, a aplicação elimina o registro do aluno selecionado no PostgreSQL, sendo ideal para remover cadastros indevidos ou limpar dados inseridos durante a fase de testes.


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



