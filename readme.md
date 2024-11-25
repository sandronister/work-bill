# Projeto de Gestão de Ordens
Este projeto é uma aplicação web para a gestão de ordens de serviço. Ele permite criar, listar, editar e excluir ordens de serviço, além de realizar migrações no banco de dados.

## Estrutura do Projeto

```php 
controller/
    migrations.php
    order.php
di/
    migration.php
    order.php
dto/
    order.php
entity/
    order.php
migrations/
    order.sql
repository/
    order.php
service/
    migrations.php
    order.php
utils/
    db.php
    mapper.php
    select.php
example.ini
formulario.css
list.php
migration.php
edit.php
create.php
delete.php

```

## Funcionalidades
* Criar Ordem: Permite criar uma nova ordem de serviço.
* Listar Ordens: Exibe uma lista de todas as ordens de serviço.
* Editar Ordem: Permite editar uma ordem de serviço existente.
* Excluir Ordem: Permite excluir uma ordem de serviço.
* Migrações: Executa migrações no banco de dados para criar a tabela de ordens.

## Configuração
1. Banco de Dados: Configure o arquivo config.ini (ignorado pelo Git) com as credenciais do banco de dados (renomeie o arquivo example.ini para config.ini ).

```php 
[database]
username = root
password = 1234
database = bill
host = localhost
```
2. Dependências: Certifique-se de que as extensões do PHP para MySQLi estejam instaladas e habilitadas.

## Executando o Projeto

1. Migrações: Execute o script de migração para criar a tabela de ordens no banco de dados.

```php 
php migration.php
```

2. Servidor Web: Inicie um servidor web local (por exemplo, usando o PHP built-in server).

```php 
php -S localhost:8000
```

3. Acessar a Aplicação: Abra o navegador e acesse http://localhost:8000.

## Estrutura de Arquivos

<ul>
  <li><strong>controller/:</strong> Contém os controladores da aplicação.
    <ul>
      <li><span style="color:cyan">controller/order.php:</span> Controlador para as operações de ordens.</li>
      <li><span style="color:cyan">controller/migrations.php:</span> Controlador para as migrações.</li>
    </ul>
  </li>
  <li><strong>di/:</strong> Contém as classes de injeção de dependência.
    <ul>
      <li><span style="color:cyan">di/order.php:</span> Configuração de DI para ordens.</li>
      <li><span style="color:cyan">di/migration.php:</span> Configuração de DI para migrações.</li>
    </ul>
  </li>
  <li><strong>dto/:</strong> Contém os Data Transfer Objects.
    <ul>
      <li><span style="color:cyan">dto/order.php:</span> DTO para ordens.</li>
    </ul>
  </li>
  <li><strong>entity/:</strong> Contém as entidades do domínio.
    <ul>
      <li><span style="color:cyan">entity/order.php:</span> Entidade de ordem.</li>
    </ul>
  </li>
  <li><strong>repository/:</strong> Contém os repositórios para acesso ao banco de dados.
    <ul>
      <li><span style="color:cyan">repository/order.php:</span> Repositório para ordens.</li>
    </ul>
  </li>
  <li><strong>service/:</strong> Contém os serviços da aplicação.
    <ul>
      <li><span style="color:cyan">service/order.php:</span> Serviço para ordens.</li>
      <li><span style="color:cyan">service/migrations.php:</span> Serviço para migrações.</li>
    </ul>
  </li>
  <li><strong>utils/:</strong> Contém utilitários e helpers.
    <ul>
      <li><span style="color:cyan">utils/db.php:</span> Conexão com o banco de dados.</li>
      <li><span style="color:cyan">utils/mapper.php:</span> Mapeamento entre DTOs e entidades.</li>
      <li><span style="color:cyan">utils/select.php:</span> Função para gerar opções de seleção.</li>
    </ul>
  </li>
  <li><strong>migrations/:</strong> Contém os scripts de migração.
    <ul>
      <li><span style="color:cyan">migrations/order.sql:</span> Script SQL para criar a tabela de ordens.</li>
    </ul>
  </li>
  <li>create.php: Página para criar uma nova ordem.</li>
  <li>delete.php: Página para excluir uma ordem.</li>
  <li>edit.php: Página para editar uma ordem.</li>
  <li>list.php: Página para listar todas as ordens.</li>
  <li>formulario.css: Estilos CSS para a aplicação.</li>
</ul>

## Licença
Este projeto é de uso livre e não possui uma licença específica.

Este README fornece uma visão geral do projeto e instruções básicas para configuração e execução. Certifique-se de ajustar as configurações conforme necessário para o seu ambiente.