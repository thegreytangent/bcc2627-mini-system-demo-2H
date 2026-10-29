<main class="content">
    <div class="container-fluid">
        <h2>Student Information</h2>

        <button class="btn btn-success mb-4">Add Student</button>

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
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</main>