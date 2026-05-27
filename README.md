# Cadastro de Usuários

Este é um projeto simples de sistema web para cadastro e listagem de usuários. A aplicação fornece um formulário onde é possível inserir o nome, sobrenome e endereço de uma pessoa. Após o envio, essas informações são salvas no banco de dados e a lista atualizada de usuários cadastrados é exibida na mesma página.

## Tecnologias Utilizadas

O projeto foi construído em um ambiente conteinerizado, utilizando a seguinte pilha de tecnologias:

* **PHP (8.2):** Linguagem utilizada no back-end para processar os dados do formulário e fazer a comunicação com o banco de dados.
* **MySQL:** Banco de dados relacional responsável por armazenar os registros dos usuários de forma persistente.
* **Apache:** Servidor web encarregado de rodar a aplicação e interpretar os scripts PHP.
* **Nginx:** Servidor web atuando na arquitetura da aplicação (geralmente configurado como proxy reverso ou para servir arquivos estáticos).
* **Docker e Docker Compose:** Ferramentas utilizadas para criar e orquestrar os contêineres da aplicação, garantindo que o banco de dados e os servidores web rodem de forma padronizada em qualquer máquina.

## Como Executar

Certifique-se de ter o Docker e o Docker Compose instalados no seu ambiente. 

1. Navegue até a pasta raiz do projeto.
2. Execute o comando abaixo para construir as imagens e subir os contêineres em segundo plano:

```bash
docker compose up -d --build
