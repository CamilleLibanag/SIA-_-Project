<?php

require 'Connections.php';

if(isset($_POST['submit_Form']))
{
    $employee_name = mysqli_real_escape_string($Connections, $_POST['employee_name']);
    $department = mysqli_real_escape_string($Connections, $_POST['department']);
    $leave_type = mysqli_real_escape_string($Connections, $_POST['leave_type']);
    $start_date = mysqli_real_escape_string($Connections, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($Connections, $_POST['end_date']);
    
    if($employee_name == NULL || $department == NULL || $leave_type == NULL || $start_date == NULL || $end_date == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO kamil (employee_name,department,leave_type,start_date,end_date) VALUES ('$employee_name','$department','$leave_type','$start_date','$end_date')";
    $query_run = mysqli_query($Connections, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_kamil']))
{
    $kamil_id = mysqli_real_escape_string($Connections, $_POST['kamil_id']);

    $employee_name = mysqli_real_escape_string($Connections, $_POST['employee_name']);
    $department = mysqli_real_escape_string($Connections, $_POST['department']);
    $leave_type = mysqli_real_escape_string($Connections, $_POST['leave_type']);
    $start_date = mysqli_real_escape_string($Connections, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($Connections, $_POST['end_date']);

    if($employee_name == NULL || $department == NULL || $leave_type == NULL || $start_date == NULL || $end_date == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE kamil SET employee_name='$employee_name', department= '$department',leave_type=' $leave_type', start_date='$start_date', end_date='$end_date' 
                WHERE id='$kamil_id'";
    $query_run = mysqli_query($Connections, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['kamil_id']))
{
    $kamil_id = mysqli_real_escape_string($Connections, $_GET['kamil_id']);

    $query = "SELECT * FROM kamil WHERE id='$kamil_id'";
    $query_run = mysqli_query($Connections, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $kamil = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Successfully by id',
            'data' => $kamil
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_kamil']))
{
    $kamil_id = mysqli_real_escape_string($Connections, $_POST['kamil_id']);

    $query = "DELETE FROM kamil WHERE id='$kamil_id'";
    $query_run = mysqli_query($Connections, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>