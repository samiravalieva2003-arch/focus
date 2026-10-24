
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фокус</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="../images/Focus_logoDark.svg" type="image/x-icon">
    <script src="js/main.js" defer></script>
</head>

<body>
    <?php include('components/header.php'); ?>

    <?php
    $page = $_GET['page'] ?? '';

    if ($page === '') {
        include('pages/main.html');
    } elseif ($page === 'reg') {
        include('pages/reg.php');
    } elseif ($page === 'login') {
        include('pages/login.php');
    } elseif ($page === 'films') {
        include('pages/films.html');
    } elseif ($page === 'schedule') {
        include('pages/schedule.html');
    } elseif ($page === 'film') {
        include('pages/film.html');
    } elseif ($page === 'choose_seat') {
        include('pages/choose_seat.html');
    }
    if (isset($_SESSION['uid'])) {
        if ($page === 'profile') {
            include('pages/profile.php');
        }
    // } elseif ($USER['role'] === '1') {
        if ($page === 'admin') {
            include('pages/admin.html');
        } elseif ($page === 'create_film') {
            include('pages/create_film.php');
        } elseif ($page === 'edit_film') {
            include('pages/edit_film.html');
        } elseif ($page === 'create_session') {
            include('pages/create_session.html');
        } elseif ($page === 'edit_session') {
            include('pages/edit_session.html');
        }
    } 
    elseif ($page === 'oform_checkout') {
        include('pages/oform_checkout.html');
    } elseif ($page === 'oform_payment') {
        include('pages/oform_payment.html');
    } elseif ($page === 'oform_success') {
        include('pages/oform_success.html');
    }
    ?>

    <?php include('components/footer.php'); ?>
</body>

</html>