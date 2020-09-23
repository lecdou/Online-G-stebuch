<?php

interface IDAO{
    public function findById($id);
    public function getAll();
    public function delete($id); 
}
?>