**Desafio UltraLims**

Feito em Laravel com Sail, banco Mysql, aproveitando a api Inertia, o servidor Vite com o Vuejs, todos os processos de criação foram feitos no wsl2

Para executar essa aplicação web, é necessário ter o Docker, NPM, PHP e o Composer na maquina.

Execute os comandos:

composer install

npm install

Certifique-se de ter o docker aberto na maquina, o comando que vai chamar as dependecias do docker e subir a aplicação back-end:

./vendor/bin/sail up

Para executar as migrações e gerar as tabelas do banco de dados: 

./vendor/bin/sail php artisan migrate

Para executar o front-end os comandos são:

npm run dev

ou

npm run build
