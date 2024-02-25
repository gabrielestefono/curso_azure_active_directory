# 02 - Azure Active Directory - Passos Essenciais

## Passos Essenciais para Configurar o Azure Active Directory

### Registrar o Aplicativo no Azure AD:

1. Acesse o [portal do Azure](https://portal.azure.com/), pesquise por **Microsoft Entra ID**, na barra lateral esquerda, clique em **Registros de Aplicativos** e depois em **Novo Registro**.

2. Preencha os campos obrigatórios, como **Nome do Aplicativo** e **URL de Redirecionamento**, e selecione o tipo de conta que seu aplicativo suporta. Feito isso, clique em **Registrar**.

3. Anote ou mantenha aberto o **ID do Aplicativo** (client), id do objeto (diretório) e o **ID do Locatário** (tenant). Você precisará desses valores para configurar a autenticação no seu website.

### Escolher o Fluxo de Autenticação:

1. Para web apps, o fluxo de código de autorização do OAuth 2.0 é comum. Ele permite um alto nível de segurança, autenticando usuários e solicitando tokens de acesso.

### Configurar o SDK ou Biblioteca:

No caso do PHP, você pode usar a biblioteca [Oauth2 Azure](https://packagist.org/packages/thenetworg/oauth2-azure) para integrar a autenticação do Azure AD no seu website. Configure-o com o ID do aplicativo, chave secreta (se aplicável), e os endereços de redirecionamento.

### Solicitar Tokens de Acesso:

1. Seu aplicativo redireciona o usuário para o login do Azure AD. Após o login, o Azure AD redireciona de volta ao seu aplicativo com um código de autorização, que é usado para solicitar um token de acesso.

2. Use o token de acesso para autenticar solicitações a recursos protegidos, como APIs