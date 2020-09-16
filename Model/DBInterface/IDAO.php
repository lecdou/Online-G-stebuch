<?php

interface IDAO{
    public function findById($id);
    public function fectchAll();
    public function delete($id); 
}
?>