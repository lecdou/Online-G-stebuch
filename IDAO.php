<?php

interface IDAO{
    public function findById();
    public function fectchAll();
    public function insert($table , $data);
    public function find($table , $condition);
    public function delete($id);
}
?>