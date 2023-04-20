# projeto-final-PHP
Projeto final do curso avançado de PHP da UTD(universidade do trabalho digital).

O projeto foi criado com base no template admin-lte com algumas melhorias. Foi utilizado o framework CODE IGNITER 4 na manipulação dos arquivos internos.

Descrição:
Mini e-commerce com tela inicial para acesso dos clientes, com cadastro, carrinho e visualização de todos os produtos. Ao clicar em comprar é adicionado automaticamente ao carrinho.

Na mesma tela, em "Acesso -> Funcionário", é possível realizar o login e acessar a parte administrativa/sistema. O sistema interno conta com dashboard, menu lateral, usuário logado e possibilidade de fazer logout.

O menu lateral conta com crud de produtos, fornecedores, clientes e usuários. No menu "Seu Perfil", é possível atualizar a senha do usuário logado.

Utilização: 
1. Ao realizar o download do projeto, acessar a pasta raiz "public/storage" e executar o script SCRIPT_BASE_LOJA.sql para criar a base e suas tabelas.
2. Acessar a url base "http://localhost/sistema/".
3. Para acessar o sistema administrativo, acessar "Acesso -> Funcionário" usuário fabio@email.com e senha 1.

Últimas atualizações:
1. Mudança nas views, removendo o arquivo de insert e update, transformando em um só "insert_update". Onde é possível, por meio do id, que o sistema faça a distinção entre arquivo de cadastro ou edição.
2. Implementação da tela de dashboard.
3. Refatoração de alguns métodos interno.
4. Usuário logado.
5. Na parte do cliente, foi feito a página inicial com listagem de produtos, carrinho e cadastro de cliente(Acesso -> Cliente).
