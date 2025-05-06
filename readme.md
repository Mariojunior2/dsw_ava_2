```markdown
# Projeto: API REST com Slim Framework  

Nome: Mario Gonçalves de Freitas Junior  
Data: 06/05/2025 - 15h50  
Unidade Curricular: Desenvolver Serviços Web  

---

## 1. O que é uma API REST?  
Uma API REST é um padrão de arquitetura para comunicação entre sistemas que utiliza métodos HTTP (GET, POST, PUT, DELETE) para operações de CRUD (Create, Read, Update, Delete). Características principais:  
- Stateless: Cada requisição contém todas as informações necessárias.  
- **Recursos identificados por URLs**: Exemplo: `/api/dados`.  
- **Respostas estruturadas**: Geralmente em JSON ou XML.  

**Exemplo de requisição**:  
```http
GET /uma-api HTTP/1.1
Host: localhost:8080
Accept: application/json
```

---

## 2. Códigos de Status HTTP  
Principais códigos utilizados neste projeto:  

| Código | Categoria           | Descrição                          |
|--------|---------------------|------------------------------------|
| 200    | Sucesso             | Requisição processada com êxito.   |
| 404    | Erro do Cliente     | Recurso não encontrado.            |
| 500    | Erro do Servidor    | Falha interna no processamento.    |

---

## 3. Diferenças entre JSON, Texto Plano e XML  

| Formato       | Características                                  | Exemplo                           |
|---------------|--------------------------------------------------|-----------------------------------|
| **JSON**      | Leve, estruturado em `chave:valor`. Ideal para APIs. | `{"nome": "Mario", "idade": 30}` |
| **Texto**     | Dados não estruturados. Simples e direto.        | `Erro: recurso não existe`       |
| **XML**       | Estrutura hierárquica com tags. Mais verboso.    | `<usuario><nome>Mario</nome></usuario>` |

---

## 4. Como Testar o Projeto  

### Pré-requisitos:  
- PHP 8.0+  
- Composer  

### Passos:  
1. **Clonar o repositório**:  
   ```bash
   git clone https://github.com/seu-usuario/dsw_ava_2.git
   ```

2. **Instalar dependências**:  
   ```bash
   composer install
   ```

3. **Iniciar o servidor**:  
   ```bash
   php -S localhost:8080 -t public
   ```

4. **Testar endpoints**:  
   - **Explicação da API**:  
     ```bash
     curl http://localhost:8080/uma-api
     ```  
     **Resposta esperada**:  
     ```json
     {"explicacao":"Uma API (Interface de Programação de Aplicações)..."}
     ```  

   - **Códigos de status HTTP**:  
     ```bash
     curl http://localhost:8080/codigos
     ```  
     **Resposta esperada**:  
     ```json
     {"200":"OK","404":"Não Encontrado","500":"Erro Interno do Servidor"}
     ```  

   - **Simular erro 404**:  
     ```bash
     curl -I http://localhost:8080/erro
     ```  
     **Resposta esperada**:  
     ```http
     HTTP/1.1 404 Not Found
     ```  

---

## 📂 Estrutura do Projeto  
```
dsw_ava_2/
├── public/
│   └── index.php         # Endpoints da API
├── vendor/               # Dependências
├── composer.json         # Configuração do Composer
└── README.md             # Esta documentação
```

---

🔧 Ferramentas Recomendadas para Teste  
- [Postman](https://www.postman.com/)  
- [Insomnia](https://insomnia.rest/)  
- `curl` (via terminal)  

---

Licença: [MIT](https://opensource.org/licenses/MIT).  
``` 

 Observações:  
- Substitua `https://github.com/seu-usuario/dsw_ava_2.git` pelo link real do seu repositório.  
- Formatação compatível com GitHub Markdown.  
- Dados pessoais e técnicos já inseridos conforme especificado.