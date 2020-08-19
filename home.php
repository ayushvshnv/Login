<?php
include "login_one.php";
//include "registration_one.php";
//session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <Section>
        <br>
        <div class="container">
            <div class="col">
                <h4>Name: <?php echo $_SESSION['login_user'] ?></h4>
                
                <Form action="logout.php" method="post">
                    <button class="btn btn-light" type="submit">Logout</button>
                </Form>
            </div>
        </div>
        
    </Section>

    <section class="content content--related">

<h3 style="text-align: center;">Products Page</h3>

<br>
<div class="container-fluid">
    <div class="row">
        <?php
        for ($i = 0; $i < 3; $i++) { ?>
            <div class="col-sm" style="margin-bottom: 50px;">
                <div class="card mx-auto" style="width: 18rem;">
                    <img class="card-img-top" src="https://imgix.bustle.com/uploads/shutterstock/2019/9/25/ea45e4b6-e786-4e8f-b5ca-a3dc2b742c98-shutterstock-1366412384.jpg?w=800&auto=format%2Ccompress&cs=srgb&q=70&fit=crop&crop=faces" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Denim Jeans</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
</section>
</body>

</html>