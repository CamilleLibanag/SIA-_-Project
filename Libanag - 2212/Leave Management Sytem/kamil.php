<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
</head>

<body>
    <style>

body{
    background-color: #a9a9a9;
}

      .breadcrumb {
  text-align: right;
  margin-left: 50px;
}

.breadcrumb-item.active {
  margin-left: 350px;
}

      td a {
	color: black; 
	text-decoration: none; 
  }
  
  td a:hover {
	color: red; 
  }
  

  td a  {
	margin-right: -10px; 
  }
  
  

  td i {
	margin-left:20px; 
  }

  .card .btn {
  font-size: 15px; /* Adjust the font size as per your preference */
  padding: 5px;
  width: 90px; 
  margin-top: 10px; /* Adjust the padding as per your preference */
  /* Optionally, you can add other styling properties like margin, etc. */
}

.card {
 background-color: #ff8478; 
  
}

.card-body {
    background-color: #ff8478;
   color: #ff8478;
}

.back-button {
    display: inline-block;
    padding: 5px 10px; /* Adjust padding to make it smaller */
    font-size: 14px; /* Decrease font size */
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    border: 2px solid blue; /* Correcting the border */
    color: #ffffff; /* White text */
    background-color: blue; /* Green background */
    border-radius: 8px; /* Rounded corners */
    cursor: pointer;
    margin-top: 5px;
    margin-bottom: 20px;
    margin-left: 1250px; /* Adjust margin to position it properly */
}
.button {
    display: inline-block;
    padding: 5px 10px; /* Adjust padding to make it smaller */
    font-size: 14px; /* Decrease font size */
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    border: 2px solid blue; /* Correcting the border */
    color: #ffffff; /* White text */
    background-color: blue; /* Green background */
    border-radius: 10px; /* Rounded corners */
    cursor: pointer;
    margin-bottom: 10px;
    margin-left: 5px; /* Adjust margin to position it properly */
}


td button:nth-of-type(1),
        td button:nth-of-type(2),
        td button:nth-of-type(3) {     
            color: black;
            justify-content: center;
            margin-right: -40px;
           margin-left: 40px;
            
        }
.table th {
  background-color: #052659;
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
  border-color: black;

}

/* Style table data cells */
.table td {
  border: 1px solid #ddd;
  padding: 8px;
  background-color: white;
  border-color: black;
 
}
.breadcrumb-item.active {
  font-size: 15px;
  margin-left: -8px;
}



/* Targeting the table by ID */
#myTable {
    /* Your CSS styles here */
    background-color: #a9a9a9;
    border-color:#a9a9a9;
}



#myTable th {
    font-size: 13px;
    background-color: #242124 ;
    color: white;
}
#myTable td{
    font-size: 13px;
}
/* Targeting the table by class */
.table {
    /* Your CSS styles here */
    background-color: #ff8478;
    border-color: #ff8478;
}

/* Additional styles based on the classes */
.table-bordered {
    border: 1px solid #ddd; /* Example border style */
    background-color: #ff8478;
    border-color: #ff8478;
}

.table-striped tbody tr:nth-of-type(odd) {
    border-color: #ff8478;
    background-color: #ff8478; /* Example striped row background */
}
.alertify-notifier .ajs-success {
    background: #353839 !important; /* Change background color */
    color: whitesmoke !important; /* Change text color */
}
    </style>
    <a href="admin.php" class="back-button">Back</a>


    <div class="modal fade" id="kamilAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Leave Form</h5>

                </div>
                <form id="submitForm">
                    <div class="modal-body">

                        <div id="errorMessage" class="alert alert-warning d-none"></div>

                        <div class="mb-3">
                            <label for="">Employee Name:</label>
                            <input type="text" name="employee_name" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Department:</label>
                            <select class="form-select" name="department" class="form-control">
               <option selected disabled>Select Department</option>
               <option value="Emergency">Emergency</option>
               <option value="Cardiology">Cardiology</option>
               <option value="Neurology">Neurology</option>
               <option value="Radiology">Radiology</option>
               <option value="Psychiatry">Psychiatry</option>
               <option value="Oncology">Oncology</option>
               <option value="Others">Others</option>

            
            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Leave Type:</label>
                            <select class="form-select" name="leave_type" class="form-control">
               <option selected disabled>Type of Leave</option>
               <option value="Vacation Leave">Vacation Leave</option>
               <option value="Sick Leave">Sick Leave</option>
               <option value="Personal Leave">Personal Leave</option>
               <option value="Unpaid Leave">Unpaid Leave</option>
               <option value="Bereavement Leave">Bereavement Leave</option>
               <option value="Maternity/Paternity Leave">Maternity/Paternity Leave</option>
               <option value="Others">Others</option>

            
            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Start Date:</label>
                            <input type="date" name="start_date" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">End Date:</label>
                            <input type="date" name="end_date" class="form-control" />
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="kamilEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Form</h5>

                </div>
                <form id="updatekamil">
                    <div class="modal-body">

                        <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                        <input type="hidden" name="kamil_id" id="kamil_id">

                        <div class="mb-3">
                            <label for="">Employee Name:</label>
                            <input type="text" name="employee_name" id="employee_name" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Department:</label>
                            <select class="form-select" name="department" id="department" >
               <option selected disabled>Select Department</option>
               <option value="Emergency">Emergency</option>
               <option value="Cardiology">Cardiology</option>
               <option value="Neurology">Neurology</option>
               <option value="Radiology">Radiology</option>
               <option value="Psychiatry">Psychiatry</option>
               <option value="Oncology">Oncology</option>
               <option value="Others">Others</option>

            
            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Leave Type:</label>
                            <select class="form-select" name="leave_type" id="leave_type" >
               <option selected disabled>Type of Leave</option>
               <option value="Vacation Leave">Vacation Leave</option>
               <option value="Sick Leave">Sick Leave</option>
               <option value="Personal Leave">Personal Leave</option>
               <option value="Unpaid Leave">Unpaid Leave</option>
               <option value="Bereavement Leave">Bereavement Leave</option>
               <option value="Maternity/Paternity Leave">Maternity/Paternity Leave</option>
               <option value="Others">Others</option>

            
            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Start Date:</label>
                            <input type="date" name="start_date" id="start_date" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">End Date:</label>
                            <input type="date" name="end_date" id="end_date" class="form-control" />
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="kamilViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View form</h5>

                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="">Employee Name:</label>
                        <p id="view_employee_name" class="form-control"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">Department:</label>
                        <p id="view_department" class="form-control"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">Leave Type:</label>
                        <p id="view_leave_type" class="form-control"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">Start Date:</label>
                        <p id="view_start_date" class="form-control"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">End Date:</label>
                        <p id="view_end_date" class="form-control"></p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">


                <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#kamilAddModal">
                    +
                </button>



                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Employee Name</th>
                            <th>Department</th>
                            <th>Leave Type</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require 'Connections.php';

                        $query = "SELECT * FROM kamil";
                        $query_run = mysqli_query($Connections, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $kamil) {
                        ?>
                                <tr>
                                    <td><?= $kamil['id'] ?></td>
                                    <td><?= $kamil['employee_name'] ?></td>
                                    <td><?= $kamil['department'] ?></td>
                                    <td><?= $kamil['leave_type'] ?></td>
                                    <td><?= $kamil['start_date'] ?></td>
                                    <td><?= $kamil['end_date'] ?></td>
                                    <td>
                                        
                                        <button type="button" value="<?= $kamil['id']; ?>" class="viewkamilBtn bx bx-show"></button>
                                        <button type="button" value="<?= $kamil['id']; ?>" class="editkamilBtn bx bx-edit"></button>
                                        <button type="button" value="<?= $kamil['id']; ?>" class="deletekamilBtn bx bx-x"></button>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </div>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(".xp-menubar").on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $(".xp-menubar,.body-overlay").on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        $(document).on('submit', '#submitForm', function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("submit_Form", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    } else if (res.status == 200) {

                        $('#errorMessage').addClass('d-none');
                        $('#kamilAddModal').modal('hide');
                        $('#submitForm')[0].reset();

                        alertify.set('notifier', 'position', 'top-left');
                        alertify.success(res.message);

                        $('#myTable').load(location.href + " #myTable");

                    } else if (res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.editkamilBtn', function() {

            var kamil_id = $(this).val();

            $.ajax({
                type: "GET",
                url: "code.php?kamil_id=" + kamil_id,
                success: function(response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 404) {

                        alert(res.message);
                    } else if (res.status == 200) {
                        $('#kamil_id').val(res.data.id);
                        $('#employee_name').val(res.data.employee_name);
                        $('#department').val(res.data.department);
                        $('#leave_type').val(res.data.leave_type);
                        $('#start_date').val(res.data.start_date);
                        $('#end_date').val(res.data.end_date);
                      

                        $('#kamilEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updatekamil', function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_kamil", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    } else if (res.status == 200) {

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier', 'position', 'top-left');
                        alertify.success(res.message);

                        $('#kamilEditModal').modal('hide');
                        $('#updatekamil')[0].reset();

                        $('#myTable').load(location.href + " #myTable");

                    } else if (res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.viewkamilBtn', function () {

var kamil_id = $(this).val();
$.ajax({
    type: "GET",
    url: "code.php?kamil_id=" + kamil_id,
    success: function (response) {

        var res = jQuery.parseJSON(response);
        if(res.status == 404) {

            alert(res.message);
        }else if(res.status == 200){

            $('#view_employee_name').text(res.data.employee_name);
            $('#view_department').text(res.data.department);
            $('#view_leave_type').text(res.data.leave_type);
            $('#view_start_date').text(res.data.start_date);
            $('#view_end_date').text(res.data.end_date);
          

            $('#kamilViewModal').modal('show');
        }
    }
});
});

        $(document).on('click', '.deletekamilBtn', function(e) {
            e.preventDefault();

            if (confirm('Are you sure you want to delete this data?')) {
                var kamil_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_kamil': true,
                        'kamil_id': kamil_id
                    },
                    success: function(response) {

                        var res = jQuery.parseJSON(response);
                        if (res.status == 500) {

                            alert(res.message);
                        } else {
                            alertify.set('notifier', 'position', 'top-left');
                            alertify.success(res.message);

                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });
    </script>
<script>
    alertify.set('notifier', 'position', 'top-left');
    alertify.success('<?php echo $res['message']; ?>');
</script>



</body>

</html>