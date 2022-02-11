<?php
class SyncDB
{
    private $docker_db_user;
    private $docker_db_password;
    private $docker_db_host;
    private $docker_db_table_name;

    var $local_db_user;
    var $local_db_password;
    var $local_db_host;
    var $local_db_table_name;

    var $docker_db_columns = array();
    var $local_db_columns = array();
    var $docker_db_types = array();
    var $local_db_types = array();

    var $docker_db_connection;
    var $local_db_connection;

    function connectDocker($host, $user, $pass, $name)
    {
        $this->docker_db_host = $host;
        $this->docker_db_password = $pass;
        $this->docker_db_user = $user;
        $this->docker_db_table_name = $name;
    }

    function connectLocal($host, $user, $pass, $name)
    {
        $this->local_db_host = $host;
        $this->local_db_password = $pass;
        $this->local_db_user = $user;
        $this->local_db_table_name = $name;
    }
}
