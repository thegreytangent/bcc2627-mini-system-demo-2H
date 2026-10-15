<?php include __DIR__.'/classes/Page.php'; ?>

<html>
<?php include __DIR__.'/components/head.php'; ?>
<body>
     <?php include __DIR__.'/components/header.php'; ?>
    <div class="layout">
        <?php include __DIR__.'/components/sidebar.php'; ?>

        <?php Page::display($_GET['page']); ?>
        
    </div>
</body>
</html>