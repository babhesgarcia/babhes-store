<?php

class Dashboard extends Database
{

    public function get_insights($tableName)
    {
        return $this->rowCounts($tableName);
    }
}
