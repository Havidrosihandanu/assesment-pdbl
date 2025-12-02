<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
</head>

<body>

    <!-- navbar -->
    <?php include 'navbar.php'; ?>
    <!-- end navbar -->

    <!-- main content -->
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <?php
            include $content;
            ?>
        </div>
    </main>
    <!-- end main content -->

</body>

</html>