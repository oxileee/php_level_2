<?php

class sql(){

}
function Sql_connect()
{
    return mysqli_connect("localhost", "root", "", "test.local");
}

function Sql_exec($sql)
{
    mysqli_query(Sql_connect(), $sql);
}

function Sql_query($sql)
{
    $query = mysqli_query(Sql_connect(), $sql);

    $ret =[];
    while (false != $row = mysqli_fetch_assoc($query)) {
        $ret[] = $row;
    }

    return $ret;
}

?>