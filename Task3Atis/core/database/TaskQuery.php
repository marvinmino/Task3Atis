<?php 

namespace App\Core\Database;

use PDO;
class TaskQuery extends QueryBuilder{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function insertTask($name,$description,$priority,$deadline,$user_email)
    {
        
            $this->insert('tasks', [
                'name'       => $name,
                'description'=> $description,
                'priority'   => $priority,
                'deadline'   => $deadline,
                'date'       => date("Y-m-d"),
                'user_email' => $user_email  
                ]);
        return redirect('home');
        
    }
    public function sort($args)
    {    $i=0;
        foreach ($args as $id) {
            $i++;
            $this->update('tasks', 'token', $i, 'id', $id);
        }
    }
    public function updateTask($id,$name,$description,$priority,$deadline)
    {       
            $this->update('tasks','name',$name,'id',$id);
            $this->update('tasks','description',$description,'id',$id);
            $this->update('tasks','priority',$priority,'id',$id);
            $this->update('tasks','deadline',$deadline,'id',$id);
        return redirect('home');
    
    }
}