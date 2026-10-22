<?php include __DIR__.'/classes/Page.php'; ?>
<?php include __DIR__.'/classes/Person.php'; ?>
<?php include __DIR__.'/classes/Student.php'; ?>

<?php include __DIR__.'/repositories/DBRepository.php'; ?>
<?php include __DIR__.'/repositories/IStudentRepository.php'; ?>
<?php include __DIR__.'/repositories/StudentRepository.php'; ?>

<html>
<?php include __DIR__.'/components/head.php'; ?>
<body>
     <?php include __DIR__.'/components/header.php'; ?>
    <div class="layout">
        <?php include __DIR__.'/components/sidebar.php'; ?> 
        
        <?php  Page::display($_GET['page'] ?? "dashboard"); ?>
        
    </div>
</body>
</html>