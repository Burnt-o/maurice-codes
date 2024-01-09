<html>
    <head>
        <title>Maurice Codes</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="keywords" content="maurice, burnt, burntkurisu, programmer, portfolio, project, cpp, adelaide, <?php echo $keywords; ?>">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/stickyHeader.css" type="text/css">
    </head>
    <body>
        <?php
            require_once 'vendor/autoload.php'; // load composer dependencies
            $parser = new \cebe\markdown\Markdown(); // global markdown parser https://github.com/cebe/markdown

            // display content
            require 'stickyHeader.html';
            require 'summary.php';

        ?>
    </body>
    <footer>
    Contact me on blahblah: <a href="blah@blah.com">@blahblah</a>
    </footer>

</html> 





