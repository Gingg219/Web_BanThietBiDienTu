<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/notify.css">
</head>
<body>
    <div id="toast"></div>
    <script src="../Javascript/notify.js"></script>
    <script>
        function showSuccessToast(message) {
            toast({
                title: "Thành công!",
                message: message,
                type: "success",
                duration: 3000
            });
        }

        function showErrorToast(message) {
            toast({
                title: "Thất bại!",
                message: message,
                type: "error",
                duration: 3000
            });
        }

        function showWarningToast(message) {
            toast({
                title: "Cảnh báo!",
                message: message,
                type: "warning",
                duration: 3000
            });
        }
        function showInfoToast(message) {
            toast({
                title: "Info!",
                message: message,
                type: "info",
                duration: 3000
            });
        }
    </script>

    <!-- Success -->
    <?php if(isset($_SESSION['success'])){ ?>
        <script> showSuccessToast('<?php echo $_SESSION['success']; ?>') </script> 
    <?php unset($_SESSION['success']); }?>

    <!-- Error -->
    <?php if(isset($_SESSION['error'])){ ?>
        <script> showErrorToast('<?php echo $_SESSION['error']; ?>') </script> 
    <?php unset($_SESSION['error']); }?>

    <!-- Warning -->
    <?php 
    if(isset($_SESSION['warning'])){ ?>
        <script> showWarningToast('<?php echo $_SESSION['warning']; ?>') </script> 
        <?php unset($_SESSION['warning']); }
    ?>

    <!-- Info -->
    <?php if(isset($_SESSION['info'])){ ?>
        <script> showInfoToast('<?php echo $_SESSION['info']; ?>') </script> 
    <?php unset($_SESSION['info']); }?>
</body>
</html>