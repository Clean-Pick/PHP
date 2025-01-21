<?php

class Student
{
    private $name;
    private $grade;


    function __construct(string $name, int $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
    }

    function getName()
    {
        return $this->name;
    }

    function getGrade()
    {
        return $this->grade;
    }
}

class Group
{
    private $students = [];

    public function addStudent(Student $student)
    {
        $this->students[] = $student;
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function getAverageGrade()
    {
        $totalGrade = 0;

        foreach ($this->students as $student) {
            $totalGrade += $student->getGrade();
        }

        return count($this->students) > 0 ? $totalGrade / count($this->students) : 0;
    }
}

$red = new Group();
$blue = new Group();

$red->addStudent(new Student('Alice', 23));
$red->addStudent(new Student('Bob', 57));
$red->addStudent(new Student('Charlie', 89));
$red->addStudent(new Student('Diana', 12));
$red->addStudent(new Student('Ethan', 45));
$red->addStudent(new Student('Fiona', 67));
$red->addStudent(new Student('George', 34));
$red->addStudent(new Student('Hannah', 75));
$red->addStudent(new Student('Noah', 99));
$red->addStudent(new Student('Jaqen', 100));

$blue->addStudent(new Student('Kara', 38));
$blue->addStudent(new Student('Liam', 82));
$blue->addStudent(new Student('Mia', 14));
$blue->addStudent(new Student('Ivy', 5));
$blue->addStudent(new Student('Olivia', 27));
$blue->addStudent(new Student('Paul', 63));
$blue->addStudent(new Student('Quinn', 48));
$blue->addStudent(new Student('Ryan', 72));
$blue->addStudent(new Student('Sophia', 11));
$blue->addStudent(new Student('Tina', 54));

echo 'Red group: <br>';
foreach ($red->getStudents() as $student) {
    echo $student->getName() . ' - ' . $student->getGrade() . '<br>';
}

echo '<br>Blue group: <br>';
foreach ($blue->getStudents() as $student) {
    echo $student->getName() . ' - ' . $student->getGrade() . '<br>';
}

echo '<br><br>';

echo '<b>Red group average grade: ' . $red->getAverageGrade() . '</b><br>';
echo '<b>Blue group average grade: ' . $blue->getAverageGrade() . '</b><br>';