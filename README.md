MSCode | Estrutura base de aplicação Symfony 8
------

Requisitos: PHP 8.4+, Composer, Symfony CLI e MySQL 8.

### Lista de commits com passos realizados:
1. [iniciando projeto](https://github.com/victordev13/mscode-projeto-symfony/commit/f6a50d53d83a66dd0549ef2fd672aa67f88a77a2)
2. [remover arquivos compose](https://github.com/victordev13/mscode-projeto-symfony/commit/06f5870a33c7a7a02f2f1a2e7e35bdd6e3091898)
3. [deixando .env mais limpo](https://github.com/victordev13/mscode-projeto-symfony/commit/26cb0841fb19721da15ffd2558cc59df6b41fdaa)
4. [instalando bootstrap](https://github.com/victordev13/mscode-projeto-symfony/commit/6437ecc8e878c7b98308bf9fb6d3dd56574f58f6)
5. [criar entidade de Usuario](https://github.com/victordev13/mscode-projeto-symfony/commit/886aad684570a9da3c90a5d17bb3dbb5cf9f9199)
6. [gerando migration com a criação da tabela de usuário](https://github.com/victordev13/mscode-projeto-symfony/commit/3bb9ba52723e297160223c74e7efa5b884837c39)
7. [gerando tela de login](https://github.com/victordev13/mscode-projeto-symfony/commit/5d08b1f584352eaa83adf9c421b9f32bcb082ae6)
8. [melhorando tela de login](https://github.com/victordev13/mscode-projeto-symfony/commit/69b8c1475e995c3ca23473876751b022056c1034)
9. [criando tela inicial do painel](https://github.com/victordev13/mscode-projeto-symfony/commit/090a1792007497c0d57492de02dab72fb7bb3679)
10. [criando entidade Categoria](https://github.com/victordev13/mscode-projeto-symfony/commit/49a38f29483753c8f76f5f2fed486cabbf6a6679)
11. [gerando migration tabela de categoria](https://github.com/victordev13/mscode-projeto-symfony/commit/5b8bcca11d8b7175c0194ea5f6109cbfcd9ba4b1)
12. [tela cadastrar categoria](https://github.com/victordev13/mscode-projeto-symfony/commit/1fbc6be42791ac811f78cb925f7a48536d9f2bf5)
13. [listar categorias](https://github.com/victordev13/mscode-projeto-symfony/commit/7192539a97e5c97fe9c48217f69663bc8c381ea0)
14. [comando para criar usuário](https://github.com/victordev13/mscode-projeto-symfony/commit/d36e74b485001ece0fba7750100242acb06b5ea1)

### Como rodar
1. `cp .env.example .env` (e ajuste usuário e senha do banco no `DATABASE_URL`)
2. `composer install`
3. `php bin/console importmap:install`
4. `php bin/console doctrine:database:create`
5. `php bin/console doctrine:migrations:migrate`
6. `symfony server:start`

Para acessar o painel em `/app`, crie um usuário com:
`php bin/console app:criar-usuario email@exemplo.com senha`
