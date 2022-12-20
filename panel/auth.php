<!DOCTYPE html>
<html>
<head>
	<title>Панельге кіру</title>

	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style>
        .divider:after, .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .h-custom {
            height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>
<body>
    <section class="vh-100" style="width: 1000px; margin: 0 auto;">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="get" action="auth.php">

                    <div class="form-outline mb-4">
                        <input name="login" id="form3Example3" class="form-control form-control-md"
                        placeholder="Логин теріңіз" />
                        <label class="form-label" for="form3Example3">Логин</label>
                    </div>

                    <div class="form-outline mb-3">
                        <input type="password" name="password" id="form3Example4" class="form-control form-control-md"
                        placeholder="Қупия сөз теріңіз" />
                        <label class="form-label" for="form3Example4">Қупия сөз</label>
                    </div>

                    <?php
                        if(!empty($_GET['login']) && !empty($_GET['password'])) {
                            if($_GET['login'] == 'admin' && $_GET['password'] == 'admin') {
                                echo "<script>window.location = 'pages/admin.php'</script>";
                            } else {
                                echo '<p style="color: red";>Қате тердіңіз!</p>';
                            }
                        }
                    ?>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <input type="submit" class="btn btn-primary btn-md"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Кіру">
                    </div>

                </form>

               
            </div>
            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>