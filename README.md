# Para começar abra o MYSQLI e crie esse database
CREATE DATABASE task_manager;
USE task_manager;
-----------------------------
# Depois cria uma tabela 
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(255) NOT NULL,
    status ENUM('pending', 'completed') DEFAULT 'pending'
);
-----------------------------
Depois disso e entrar na página index.php
Nessa página tem as tarefas voce pode adicionar uma nova tarefa 
Pode marcar a tarefa como concluido e também pode clicar no botão excluir