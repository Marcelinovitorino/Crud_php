# 👤 CRUD de Usuários | PHP + MySQL + CSS

Um sistema simples e elegante de gerenciamento de usuários feito em PHP com MySQL, estilizado com CSS puro e responsivo. Foi criado para suprir um exercício da cadeira de programacao web, pode ser usado para aprendizado ou uso em pequenos projetos.

---

## 🖼️ Interface

> Leve, moderna e funcional.

- Layout em **degradê suave**
- Cores equilibradas para boa **experiência visual**
- Botões com **animações sutis**
- Interface **adaptável a qualquer tela**

---

## 🛠 Funcionalidades

- 🔍 **Listar usuários**
- ➕ **Cadastrar novo usuário**
- ✏️ **Editar informações**
- ❌ **Excluir usuário**
- 🎨 **Visual moderno com CSS puro**

---

## 📁 Estrutura de Arquivos

---

## 🚀 Como Usar

### 1. Requisitos
- PHP 7 ou superior
- Servidor local (XAMPP, Laragon, etc.)
- MySQL/MariaDB

### 2. Banco de Dados
```sql
CREATE DATABASE crud_db;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100)
);


