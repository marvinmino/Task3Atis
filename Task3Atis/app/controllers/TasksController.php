<?php

namespace App\Controllers;

use App\Core\App;
use TaskRequest;

class TasksController 
{
    private $taskRequest;
    
    public function __construct($request)
    {
        $this->taskRequest = new TaskRequest($request);
    }

    public function home()
    {
        session_start();
        if(isset($_SESSION['email']) )
        {   
            $tasks = App::get('taskQuery')->selectSortAllOneCon('tasks','user_email',$_SESSION['email'], 'token');
            return view('home', compact('tasks'));
        }
        else 
        return redirect('login');
    }
    public function save()
    {
        session_start();
        $this->taskRequest->taskAuth();
        if(empty($_SESSION['error']))
            App::get('taskQuery')->insertTask(
                    $this->taskRequest->reqData('taskName'),
                    $this->taskRequest->reqData('taskDescription'),
                    $this->taskRequest->reqData('taskPriority'),
                    $this->taskRequest->reqData('taskDeadline'),
                    $_SESSION['email'] );
        else
        return redirect('home');
    }
    public function sort()
    {
        $sorts=$this->taskRequest->reqData('sorts');
        $ids=explode(',', $sorts);
        App::get('taskQuery')->sort($ids);
    }


    public function check()
    {
        // die(var_dump($this->taskRequest->reqData('check')));
        App::get('taskQuery')->update('tasks', 'done', $this->taskRequest->reqData('check'), 'id', $this->taskRequest->reqData('idcheck'));
    }
    public function edit(){
        session_start();
        if(isset($_SESSION['email']))
        {   
            $task = App::get('taskQuery')->selectAllOneCon('tasks','id',$this->taskRequest->reqData('id'));
            return view('edit',compact('task'));
        }
        else 
        return redirect('login');
    
        return view('edit',compact($this->taskRequest->reqData('id')));
    }
    public function editData(){
        session_start();
        
        $this->taskRequest->taskAuth();
        if (empty($_SESSION['error'])) {
            
            App::get('taskQuery')->updateTask(
                $this->taskRequest->reqData('id'),
                $this->taskRequest->reqData('taskName'),
                $this->taskRequest->reqData('taskDescription'),
                $this->taskRequest->reqData('taskPriority'),
                $this->taskRequest->reqData('taskDeadline')
            );
        }
        else
        return redirect('edit?id='.$this->taskRequest->reqData('id'));
    }
    public function delete(){

        App::get('taskQuery')->delete('tasks','id',$this->taskRequest->reqData('deleteTask'));
        return redirect('home');
    }
}