<?php

session_start();

require '../components/connection.php';

//TO DELETE MEMBER DETAILS
if(isset($_POST['delete-mbr']))
{
    $member_role_id = mysqli_real_escape_string($dbh, $_POST['delete-mbr']);

    $query = "DELETE FROM add_members WHERE role_id='$member_role_id' ";
    $query_run = mysqli_query($dbh, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Member Deleted Successfully";
        header("Location: ../pages/home.page.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Member Not Deleted";
        header("Location: ../pages/home.page.php");
        exit(0);
    }
}


//TO UPDATE MEMBER DETAILS
if(isset($_POST['update-mbr']))
{   
    $member_role_id = mysqli_real_escape_string($dbh, $_POST['role_id']);

    $fname = mysqli_real_escape_string($dbh, $_POST['fname']);
    $lname = mysqli_real_escape_string($dbh, $_POST['lname']);
    $phone = mysqli_real_escape_string($dbh, $_POST['phone']);
    $email = mysqli_real_escape_string($dbh, $_POST['email']);
    $address1 = mysqli_real_escape_string($dbh, $_POST['address1']);
    $address2 = mysqli_real_escape_string($dbh, $_POST['address2']);
    $city = mysqli_real_escape_string($dbh, $_POST['city']);
    $province = mysqli_real_escape_string($dbh, $_POST['province']);
    $zip = mysqli_real_escape_string($dbh, $_POST['zip']);

    $query = "UPDATE add_members SET user_fname='$fname', user_lname='$lname', user_phone='$phone', user_email='$email', user_add1='$address1', user_add2='$address2', user_city='$city', user_prov='$province', user_zip='$zip' WHERE role_id='$member_role_id' ";
    $query_run = mysqli_query($dbh, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Member Updated Successfully";
        header("Location: ../pages/home.page.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Member Not Updated";
        header("Location: ../pages/home.page.php");
        exit(0);
    }
}


//TO SAVE MEMBER DETAILS
if(isset($_POST['save-mbr'])) 
{
    $fname = mysqli_real_escape_string($dbh, $_POST['fname']);
    $lname = mysqli_real_escape_string($dbh, $_POST['lname']);
    $phone = mysqli_real_escape_string($dbh, $_POST['phone']);
    $email = mysqli_real_escape_string($dbh, $_POST['email']);
    $address1 = mysqli_real_escape_string($dbh, $_POST['address1']);
    $address2 = mysqli_real_escape_string($dbh, $_POST['address2']);
    $city = mysqli_real_escape_string($dbh, $_POST['city']);
    $province = mysqli_real_escape_string($dbh, $_POST['province']);
    $zip = mysqli_real_escape_string($dbh, $_POST['zip']);

    $query = "INSERT INTO add_members (user_fname,user_lname,user_phone,user_email,user_add1,user_add2,user_city,user_prov,user_zip) VALUES ('$fname', '$lname', '$phone', '$email', '$address1', '$address2', '$city', '$province', '$zip')";

    $query_run = mysqli_query($dbh, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Member Created Successfully";
        header("Location: ../pages/home.page.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Member Not Created";
        header("Location: ../pages/home.page.php");
        exit(0);
    }
}
