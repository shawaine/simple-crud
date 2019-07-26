<?php
include_once 'db.php';

class User extends DB
{
    protected $id;
    protected $username;
    protected $password;
    protected $created_at;
    protected $is_active;
}
