# 02 - Azure Active Directory - Conceitos Básicos

## Conceitos Básicos de Azure Active Directory

O Azure Active Directory possui alguns conceitos básicos que são importantes para entender como ele funciona. Vamos ver cada um deles:

### Tenant

O Tenant é a instância do Azure AD que representa uma organização. Ele é único e é associado a um domínio, que pode ser um domínio de email ou um domínio personalizado. O Tenant é a entidade que armazena informações sobre os usuários, grupos, aplicativos e recursos da organização.

### Aplicativos Registrados

Os aplicativos registrados são aplicativos que foram registrados no Azure AD. Eles podem ser aplicativos da organização ou aplicativos de terceiros. Os aplicativos registrados podem ser usados para autenticar usuários, conceder permissões e acessar recursos.

### ID do Aplicativo (client ID)

O ID do Aplicativo é um identificador único para um aplicativo registrado no Azure AD. Ele é usado para identificar o aplicativo ao solicitar tokens de acesso e ao acessar recursos protegidos.

### Chave Secreta (client secret)

A Chave Secreta é uma senha que um aplicativo usa para se autenticar com o Azure AD. Ela é usada em conjunto com o ID do Aplicativo para obter tokens de acesso.

### Fluxos de Autenticação

O Azure AD suporta vários fluxos de autenticação para diferentes cenários de aplicativos. Alguns dos fluxos de autenticação suportados incluem o fluxo de código de autorização do OAuth 2.0, o fluxo implícito do OAuth 2.0 e o fluxo de senha do OAuth 2.0. Cada fluxo de autenticação tem suas próprias características e é adequado para diferentes tipos de aplicativos e cenários de autenticação. Para essa aplicação, usaremos o fluxo de código de autorização do OAuth 2.0.

### Conclusão

O Azure Active Directory possui vários conceitos básicos, como Tenant, Aplicativos Registrados, ID do Aplicativo, Chave Secreta e Fluxos de Autenticação. Esses conceitos são fundamentais para entender como o Azure AD funciona e como ele pode ser usado para autenticar usuários e proteger recursos.