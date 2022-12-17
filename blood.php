<?php include 'header.php';?>

    <div class="row">
        <div class="col-md-8">
            <div class="alumni_list_table">
                <h2 class="text-center">Blood List</h2>
                <table>
                    <tr>
                        <th>S.L</th>
                        <th>Name</th>
                        <th>Blood Group</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Last Donate</th> 
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Abir Shykat</td>
                        <td>A-</td>
                        <td>01616-498901</td>
                        <td>shykat@gmail.com</td>
                        <td>CSE</td>
                        <td>2-Jan-2021</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Ashiful Islam</td>
                        <td>O+</td>
                        <td>01616-498901</td>
                        <td>ashiful@gmail.com</td>
                        <td>CSE</td>
                        <td>30-Aug-2022</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Shakil Ahmed</td>
                        <td>O-</td>
                        <td>01616-498901</td>
                        <td>shakil@gmail.com</td>
                        <td>CSE</td>
                        <td>10-May-2022</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-md-4">
            <?php include 'messages.php';?> 
        </div>
    </div>
 
   
 
    <style>
        .alumni_list_table {
            margin-top: 1.5rem;
        }
        
        table {
            width: 100%;
            text-align: center;
        }

        table tr {
            line-height: 2;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
<?php include 'footer.php';?>