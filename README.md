# StudentManager (Inicie) [Back-end]

![studentmanager-back](https://github.com/user-attachments/assets/aa4512b5-e48b-4d3f-9ed0-5a3cf36f6beb)

## Etapas até rodar o projeto:

Este repositório contém um projeto que interage com o Firebase. Para rodá-lo localmente em sua máquina, você precisará configurar corretamente o Firebase, utilizando suas credenciais pessoais. Siga as etapas abaixo para garantir que você consiga rodar o projeto sem problemas.

1. **Instalar dependências**:
   
   - Rode o comando `composer install` para instalar todas as dependências do projeto.

3. **Criação de Conta no Firebase**
   
   - Vá até o [Firebase Console](https://console.firebase.google.com/).
   - Crie um novo projeto ou use um projeto existente.
   - Na aba lateral clique em na seção **Criação** e após isso na opção **Realtime Database** e copie o URL do banco de dados (algo como `https://seu-projeto.firebaseio.com`).

2. **Obter Credenciais do Firebase**

   - No Firebase Console, acesse a engrenagem na aba esquerda. **Configurações do Projeto** > **Contas de Serviço**.
   - Gere um novo arquivo de chave privada em formato JSON. (exemplo: `firebase-credentials.json`)
   - Salve esse arquivo em um diretório seguro no seu projeto (exemplo recomendado: `storage/firebase/firebase-credentials.json`).

3. **Configurar Variáveis de Ambiente**

   - Crie um arquivo `.env` na raiz do seu projeto (se ainda não tiver).
   - Adicione as seguintes variáveis no arquivo `.env`:

   ```env
   FIREBASE_CREDENTIALS_JSON_PATH=/caminho/para/seu/firebase-credentials.json
   FIREBASE_DB_URI=https://seu-projeto.firebaseio.com

6. **Rodar o projeto**:
   - Após configurar o arquivo `.env`, você pode rodar o backend normalmente com `php artisan serve`.

