<?php
echo '<pre>'.print_r($_POST, true).'</pre>'; // il tag pre serve a indettare a capo quello che è presente nell'array che altrimenti apparirebbe su una sola riga
// $_SERVER serve per vedere il metodo per individuare ciò che vuoi confrontare

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // copiarsi i valori dell'array come valori singoli da poter confrontare
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  

    $error = [];

    if (strlen($number) < 10){
        $error['number'] = ' Please provide a valid telephon number.';
    };

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){ // se il valore filter verifica che nel campo email non c'è un email corretta allora
            $error['email'] = 'Please provide a valid email.';
    };

    if (strlen($password) < 8){
        $error['password'] = 'Please provide a valid password (min length 8).';
    };

    if ($error == [] || isset($_POST['checkbox'])) {
        header('location: /u4-w13/d2-success.php');
    };

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="d-flex justify-content-center mt-5">
    <form class="w-50" action="" method="post" novalidate>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="exampleInputName1" aria-describedby="emailHelp">
        <div class="valid-feedback">
      Looks good!
    </div>
      </div>
      <div class="mb-3">
        <label for="surname" class="form-label">Surname</label>
        <input type="text" class="form-control" name="surname" id="exampleInputSurnaeml1" >
        <div class="valid-feedback">
      Looks good!
    </div>
      </div>
      <div class="mb-3">
        <label for="number" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" name="number" id="exampleInputSurnaeml1" >
        <div id="validationServer03Feedback" class="invalid-feedback">
     
    </div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" >
        <div id="validationServer03Feedback" class="invalid-feedback"><?= $errors['email'] ?? '' ?></div>      
    </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        <div id="validationServer03Feedback" class="invalid-feedback"><?= $errors['password'] ?? '' ?>
      
    </div>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" name="checkbox" value="checked" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Condition to accepted</label>
        <div id="exampleCheck1" class="invalid-feedback"> bla bla <?php !isset($_POST['checkbox']) ?? 'check please' 
        ?> </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>