<?php
$student = new Student("12-11111", "John", "cruz", "March 12, 2201");
?>
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
              <tr>
                    <td>12-2323</td>
                      <td>John Cruz</td>
                        <td>March 12, 2201</td>
                          <td>
                             <button class="btn btn-info">Edit</button>
                              <button class="btn btn-danger">Delete</button>
                          </td>
                </tr>
            </tbody>
        </table>

    </div>
</main>