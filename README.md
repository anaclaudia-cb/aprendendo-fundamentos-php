# aprendendo-fundamentos-php
Aprendendo alguns fundamentos do PHP

<h1>Instalando e configurando o PHP no linux</h1>
<h4>Apache e PHP</h4>
Abra o terminal e digite:

```
sudo apt-get update
sudo apt-get install apache2 php libapache2-mod-php
sudo apt-get install php-soap php-xml php-curl php-opcache php-gd php-sqlite3 php-mbstring
```
<h4>Instalando o VSCODE</h4>

1. Abra um terminal;

2. Iremos utilizar o SNAP para instalar o VSCODE, caso o SNAP não esteja instalado em seu computador use esse comando:

```
sudo apt-get install snapd snapd-xdg-open
```

3. Instale o programa via SNAP, utilizando esse comando:

```
sudo snap install --classic vscode
```
<h1>Docker</h1>

Utilizando o resositório laradock disponível em: https://github.com/laradock/laradock

1. Abra um terminal;
2. Coloque a seguinte linha de código:

```
git clone https://github.com/laradock/laradock
cd laradock
```
3. Modificando o .env

```
cp .env.example .env
```

4. Abra a pasta laradock no vscode baixado.
5. Verfique o documento .env, se quiser pode modifica-lo e mudar a porta de acesso.
6. Volte para o terminar e rode o comando para ver se encontra algum erro:

```
docker ps
docker-compose
```
7. Rode o dokcer com os seguintes comandos:

```
docker-compose up -d nginx mysql phpmyadmin
```
