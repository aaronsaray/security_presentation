<script src="/js/vendor/jquery.js"></script>
<script src="/js/foundation.min.js"></script>
<script src="/js/main.js"></script>
<script>
    $(document).foundation();
</script>
<?php
// the above js is there just because it's gonna halt right away with the error below - and then the js won't be loaded

$pageTitle = 'Page has an error';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

//GENERATES AN ERROR
$d = new PDO('mysql:host=localhost', 'root', 'SUPER SECRET PASSWORD');

?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
