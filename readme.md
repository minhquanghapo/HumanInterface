# Human Interface

Project built for Human Interface Course

## Server Requirements

- PHP >= 7.1.3
- Node >= 6.x
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- MySql 5.7+


## How to Install?

### 1. Clone the source code or create new project.

```shell
git clone https://github.com/minhquanghapo/HumanInterface.git
```



### 2. Set the basic config

```shell
cp .env.example .env
```

Edit the `.env` file and set the `database` and other config for the system after you copy the `.env`.example file.

### 2. Install the extended package dependency.

Install the `Laravel` extended repositories: 

```shell
composer install -vvv
```

Install the `Vuejs` extended repositories: 

```shel
npm install
```

Compile the js code: 

```shel
npm run dev

// OR

npm run watch

// OR

npm run production
```

### Fix your .env for send mail

`example`
```shell 
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=*****@gmail.com
MAIL_PASSWORD=*****
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=*****@gmail.com
MAIL_FROM_NAME=ASTEAMK60

```
