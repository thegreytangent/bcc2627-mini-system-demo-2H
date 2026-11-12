<main class="content">
    <div class="container-fluid">
        <h2>Student Information</h2>

        <a href="?page=student-add" class="btn btn-success mb-4">Add Student</a>

      

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Student Number</th>
                    <th>Complete Name</th>
                    <th>Date of Birth</th>
                    <th>Action</th>
                </tr>

            </thead>
            <tbody>
                <?php foreach (StudentRepository::all() as $student): ?>
                    <tr>
                        <td><?php echo $student->getStudentNumber(); ?></td>
                        <td><?php echo $student->completeName(); ?></td>
                        <td><?php echo $student->getDOB(); ?></td>
                        <td>
                            <button class="btn btn-info">Edit</button>
                            <button onclick="delete_data('<?php echo $student->getId(); ?>')" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</main>

<script>
    function delete_data(id) {
        if (confirm("Are you sure you want to delete this record?")) {
            window.location = "modules/student_delete.php?id=" + id;
        }
    }           
</script>