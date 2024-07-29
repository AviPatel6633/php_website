<?php require('conn.php') ;?> 
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO career (name, phone, email, zipcode, menu_product, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $phone, $email, $zipcode, $menu_product, $message);

    // Set parameters and execute
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $zipcode = $_POST['zipcode'];
    $menu_product = $_POST['menu_product'];
    $message = $_POST['message'];

    $stmt->execute();

    // echo "New records inserted successfully";

    $stmt->close();
    $conn->close();
    header("Location: " . 'http://' . $_SERVER['HTTP_HOST'] . '/beyondfabchem');

}
// Redirect('http://www.google.com/', false);

//  else {
//     echo "Error: Form not submitted";
// }
?>
