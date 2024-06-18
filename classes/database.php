<?php
class database
{
    function opencon()
    {
        return new PDO('mysql:host=localhost;dbname=portforlio','root','');
    }
    function view (){
        $con = $this->opencon();
        return $con->query('SELECT
        user_quote,
        user_image_school,
        user_course,
        user_schoolname,
        user_yearTo,
        user_yearFrom,
        user_status
    FROM
        education')->fetchAll();
    }
    function viewdata(){
        try{
            $con = $this->opencon();
            $query=$con->prepare("");
            return $query->Fetch();
            }
        catch (PDOException $e) {
            return [];
    }
  }
  function check($username, $password) {
    // Open database connection
    $con = $this->opencon();

    // Prepare the SQL query
    $stmt = $con->prepare("SELECT * FROM users WHERE user = ?");
    $stmt->execute([$username]);

    // Fetch the user data as an associative array
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // If a user is found, verify the password
    if ($user && password_verify($password, $user['pass'])) {
        return $user;
    }

    // If no user is found or password is incorrect, return false
    return false;
}
}