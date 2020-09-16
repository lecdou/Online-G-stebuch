<?php
class RequestUtil
{
    public function readParameter($name)
    {
        if (!isset($_GET[$name]) && !isset($_POST[$name])) {
            return NULL;
        } else {
            if (isset($_GET[$name])) {

                return $_GET[$name];
            } else {
                return $_POST[$name];
            }
        }
    }
}
