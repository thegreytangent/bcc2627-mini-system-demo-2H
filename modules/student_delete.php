<?php include '../classes/Person.php'; ?>
<?php include '../classes/Student.php'; ?>

<?php include '../repositories/DBRepository.php'; ?>
<?php include '../repositories/IStudentRepository.php'; ?>
<?php include '../repositories/StudentRepository.php'; ?>



<?php 

$id = $_GET['id'];

StudentRepository::delete($id);

header("Location: ../index.php?page=students");
