<?php
include_once "Models/Student.php";
include_once "Services/StudentManager.php";
$studentManager = new StudentManager();
//$studenA = new Student("Quân", 8, 10, 7);
//$studenB = new Student("Toàn", 8, 10, 8 );
//$studenC = new Student("Luân", 5, 7, 8);
//$studenB->setMathScore(7);
//$studenB->setPhysicalScore(9);
//$studenB->setChemistryScore(5);
//$studentManager->storeStudents($studenA);
//$studentManager->storeStudents($studenB);
//$studentManager->storeStudents($studenC);
//
//echo "<pre>";
$students = $studentManager->getAllStudent();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach hoc sinh</title>
</head>
<body>
<button><a href="create-student.php">Add new student</a></button>
<table border="1px">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Math Score</th>
        <th>Physical Score</th>
        <th>Chemistry Score</th>
        <th>Average</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $key=>$student):?>
        <tr>
            <td><?php echo $key+1?></td>
            <td><?php echo $student->getName()?></td>
            <td><?php echo $student->getMath()?></td>
            <td><?php echo $student->getPhysical()?></td>
            <td><?php echo $student->getChemistry()?></td>
            <td><?php echo $student->getAverage()?></td>
            <td>
                <button><a onclick="return confirm('Do you want to delete?')" href="delete-student.php?id=<?php echo $key?>">Delete</a></button>
            </td>
            <td>
                <button><a href="edit-student.php?id=<?php echo $key?>">Edit</a></button>
            </td>

        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
