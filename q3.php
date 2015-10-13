<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13/10/15
 * Time: 17:47
3. Refatore o código abaixo, fazendo as alterações que julgar necessário.

<?php
class MyUserClass
{
public function getUserList()
{
$dbconn = new DatabaseConnection('localhost','user','password');
$results = $dbconn->query('select name from user');
sort($results);
return $results;
}
}
 */

class MyUserClass
{
    public function getUserList()
    {
        $dbconn = new DatabaseConnection('localhost','user','password');
        $results = $dbconn->query('select name from user order by name');

        return $results;
    }
}