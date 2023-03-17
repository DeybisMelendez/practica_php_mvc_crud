# Practica de CRUD con PHP y MVC desde cero

Estoy aprendiendo PHP y cree un pequeño proyecto que permite manejar una lista de usuarios.

![ejemplo](/example.gif)

## Pasos para instalar

### 1. Crea una base de datos en phpmyadmin

```
create database crud;

use crud;

CREATE TABLE `usuarios` (
    `cod` int(50) NOT NULL,
    `nom` varchar(50) NOT NULL,
    `correo` varchar(50) NOT NULL,
    `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `usuarios`
    ADD PRIMARY KEY (`cod`);
    ALTER TABLE `usuarios`
    MODIFY `cod` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32448;
```

### 2. Coloca el proyecto en la raíz de htdocs

Coloque el proyecto raíz en la carpeta htdocs de manera que el archivo `/index.php` quede en la raíz de la carpeta htdocs.

### 3. Inicie Xampp

Inicie el Apache Web Services y MySql Database.

### 4. Localhost

entre a su localhost para ver su funcionamiento.