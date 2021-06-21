<?php
class Student {
    private string $name;
    private string $email;
    private string $class;
    private string $assignedTeacher;

    public function __construct($name, $email, $class, $assignedTeacher){
        $this->name = $name;
        $this->email = $email;
        $this->class = $class;
        $this->assignedTeacher = $assignedTeacher;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getAssignedTeacher(): string
    {
        return $this->assignedTeacher;
    }
}