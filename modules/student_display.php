<?php  
$student = new Student("12-11111","John", "cruz", "March 12, 2201");
 ?>
<main class="content">
            <h2>Student Information</h2>

            Student Number:  <?php echo $student->id_number; ?></br/>
            Complete Name:  <?php echo $student->completeName(); ?>
          

        
        </main>