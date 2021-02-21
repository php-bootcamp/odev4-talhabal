<?php
abstract class SQL 
{
      
    public  $connectionStatus=false;
    public function isConnected()
    {
    }
    public abstract function create(SQLQuery $query);
    public abstract function update(SQLQuery $query);
    public abstract function delete(SQLQuery $query);
    public function setParams (array $params)
    {
    }
    
}


