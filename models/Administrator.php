<?php
/*
    CRUD creado por Oscar Amado
    Contacto: oscarfamado@gmail.com
*/
require_once('models/db.php');
require_once('models/Administrator.php');

class Administrator extends db {
    private function view_users(){
        try {
            $SQL = "SELECT * FROM usuarios";
            $result = $this->connect()->prepare($SQL);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_OBJ);	
        } catch (Exception $e) {
            die('Error Administrator(view_users) '.$e->getMessage());
        }
    }

    function get_view_users(){
        return $this->view_users();
    }

    private function register_users($data){
        try {
            $SQL = 'INSERT INTO usuarios (idusuario , nom_cuenta, fecha_crea, correo_us, contraseña, foto_perfil, fecha_N, no_tarjeta) VALUES (?,?,?,?,?,?,?,?)';
            $result = $this->connect()->prepare($SQL);
            $result->execute(array(
                $data['idusuario'],
                $data['nom_cuenta'],
                $data['fecha_crea'],
                $data['correo_us'],
                $data['contraseña'],
                $data['foto_perfil'],
                $data['fecha_N'],
                $data['no_tarjeta']
            ));
        } catch (Exception $e) {
            die('Error Administrator(register_users) '.$e->getMessage());
        }
    }

    function set_register_user($data){
        $this->register_users($data);
    }

    private function update_user($data){
        try {
            $SQL = 'UPDATE usuarios SET nom_cuenta = ?, fecha_crea = ?, correo_us = ?, contraseña = ?, foto_perfil = ?, fecha_N = ?, no_tarjeta = ? WHERE idusuario = ?';
            $result = $this->connect()->prepare($SQL);
            $result->execute(array(
                $data['nom_cuenta'],
                $data['fecha_crea'],
                $data['correo_us'],
                $data['contraseña'],
                $data['foto_perfil'],
                $data['fecha_N'],
                $data['no_tarjeta'],
                $data['idusuario']
            ));
        } catch (Exception $e) {
            die('Error Administrator(update_user) '.$e->getMessage());
        }
    }

    function set_update_user($data){
        $this->update_user($data);
    }

    private function delete_user($idusuario){
        try {
            $SQL = 'DELETE FROM usuarios WHERE idusuario = ?';
            $result = $this->connect()->prepare($SQL);
            $result->execute(array($idusuario ));			
        } catch (Exception $e) {
            die('Error Administrator(delete_user) '.$e->getMessage());
        }
    }

    function set_delete_user($idusuario){
        $this->delete_user($idusuario);
    }	
}
?>
