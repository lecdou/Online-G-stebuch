<?php

interface IDAOBookEntry{
    public function insertBookEntry($userid, $titel, $content, $date);
    public function updateBookEntry($bookid, $titel, $content);
    public function deleteBookEntry($bookid);
    public function getAll();
}
?>