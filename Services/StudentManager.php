<?php

include_once "../Models/Student.php";

class StudentManager
{
    private $students;
    private $path = __DIR__ . "/student.json";

    public function __construct()
    {
        $this->students = $this->load();
    }
    public function getAllStudent()
    {
        return $this->students;
    }

    public function storeStudents($student)
    {
        array_push($this->students, $student);
        $this->save();
    }

    public function getStudentById($id)
    {
        return $this->students[$id];
    }

    public function editStudent($id, $data)
    {
        $this->students[$id] = $data;
        $this->save();
    }

    public function deleteStudentById($id)
    {
        array_splice($this->students, $id, 1);
        $this->save();
    }

    public function editStudentById($id)
    {
        $this->students[$id];
    }

    public function save()
    {
        $dataJson = json_encode($this->students);
        file_put_contents($this->path, $dataJson);
    }

    public function load()
    {
        $dataJson = file_get_contents($this->path);
        $data = json_decode($dataJson, true);
        return $this->convertToObject($data);
    }

    public function convertToObject($data)
    {
        $students = [];
        foreach ($data as $e) {
            $student = new Student($e['name'], $e['math'], $e["physical"], $e['chemistry']);
            $students[] = $student;
        } return $students;
    }

}