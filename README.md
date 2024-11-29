# StudentManager (Inicie) [Back-end]

![studentmanager-back](https://github.com/user-attachments/assets/aa4512b5-e48b-4d3f-9ed0-5a3cf36f6beb)

### ⚠️ ATENÇÃO: Esse projeto consiste em duas partes (Front-end e Back-end), e para que ele funcione completamente, as duas precisam estar rodando. Então acesse o repositório para rodar o Front-end aqui (https://github.com/lucas-marques-0/StudentManager-frontend). 

## Etapas até rodar o projeto (Back-end) :

Este repositório contém um projeto que interage com o Firebase. Para rodá-lo localmente em sua máquina, você precisará configurar corretamente o Firebase, utilizando suas credenciais pessoais. Siga as etapas abaixo para garantir que você consiga rodar o projeto sem problemas.

1. **Instalar dependências**:
   
   - Incie rode o comando `composer install` para instalar todas as dependências do projeto.

2. **Obter url do banco de dados Firebase**
   
   - Vá até o [Firebase Console](https://console.firebase.google.com/).
   - Crie um novo projeto ou use um projeto existente.
   - Na aba lateral clique em na seção **Criação** e após isso na opção **Realtime Database** e copie o URL do banco de dados (algo como `https://seu-projeto.firebaseio.com`).
   - Deixe quardada porque vamos usar no *passo 3* (FIREBASE_DATABASE_URI).

3. **Obter as credenciais do Firebase**

   - No Firebase Console, acesse a engrenagem na aba esquerda. **Configurações do Projeto** > **Contas de Serviço**.
   - Gere um novo arquivo de chave privada em formato JSON. (exemplo: `firebase-credentials.json`)
   - Salve esse arquivo em um diretório seguro no seu projeto (exemplo recomendado: `storage/firebase/firebase-credentials.json`).

4. **Obter caminho até o arquivo das credenciais do Firebase**
   
   - Após coloca as credenciais do firebase em sua pasta, digite no terminal `realpath caminho/ate/sua-credencial-firebase.json`. (exemplo: `realpath storage/firebase/firebase-credentials.json`)
   - Copie o caminho gerado (algo como: `/mnt/c/Users/seu-nome/Downloads/teste/back/storage/firebase/firebase-credentials.json`) e deixe quardado porque vamos usar no *passo 3* (FIREBASE_CREDENTIALS_PATH).
   
5. **Configurar Variáveis de Ambiente**

   - Crie um arquivo `.env` na raiz do seu projeto (se ainda não tiver).
   - Pegue o `FIREBASE_CREDENTIALS_PATH` (obtido no *passo 3*) e o `FIREBASE_DATABASE_URI` (obtido no *passo 2*)
   - Adicione as seguintes variáveis no arquivo `.env`:

   ```env
   FIREBASE_CREDENTIALS_PATH=/caminho/para/seu/firebase-credentials.json
   FIREBASE_DATABASE_URI=https://seu-projeto.firebaseio.com

6. **Rodar o projeto**:
   - Após configurar o arquivo `.env`, você pode rodar o backend normalmente com `php artisan serve`.
  
7. Caso ocorra algum erro ou apenas queira dar um refresh nas configurações e cache do artisan, digite `php artisan config:clear` e `php artisan cache:clear`, e logo após isso tente rodar novamente com `php artisan serve` (opcional).

