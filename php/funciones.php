<?php
    require 'init.php';

    class Funciones {
        // Metodos
        public function getPublicaciones () {
            global $pdo;

            $query = $pdo->prepare ("
                SELECT *
                FROM blog          
            ");
            $query ->execute();

            return $query->fetchAll();

        } 

        public function getPublicacion ($blog_id) {
            global $pdo;

            $query = $pdo->prepare ("
            SELECT 
                blog. *,
                admins.usuario
            FROM blog 
            
            INNER JOIN admins
            ON blog.admin_id = admins.admin_id
            WHERE blog_id = :blog_id
            ");
            $query ->execute([
                'blog_id' => $blog_id
            ]);

            return $query->fetch();

        } 

        public function logIn($user, $pass) {
            global $pdo;

            $query = $pdo->prepare ("
            SELECT *
            FROM admins
            WHERE usuario = :usuario AND pass = :pass
            ");
            $query ->execute([
                'usuario' => $user,
                'pass' => $pass
                ]);
            return $query->fetch();
        }

        public function subirPublicacion ($titulo, $contenido, $admin) {
            global $pdo;

            $admin_id = $pdo->prepare ("
            SELECT admin_id
            FROM admins
            WHERE admin_id = :usuario 
            ");
            $admin_id->execute([
                'usuario' => $admin
                ]);

            $admin_id = $admin_id->fetch();

            $query = $pdo->prepare ("
                INSERT INTO blog (titulo, contenido, admin_id, fecha)
                VALUES (:titulo, :contenido, :admin_id, :fecha)
            ");
            $query->execute([
                'titulo' => $titulo,
                'contenido' => $contenido,
                'admin_id' => $admin_id['admin_id'],
                'fecha' => time()

                ]);
            
            if ($query){
                return true;
            }else {
                return false;
            }

        }

    }


?>