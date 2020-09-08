<?php

interface IDAOUser{
    public function findBook($id);
    public function insertBook( $data);
    public function deleteBook($id);
    public function updateBook($id , $data);
}
?>