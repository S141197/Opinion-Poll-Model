<html>
    <head>
       	<title>Sample Opinion Poll Results</title>
    </head>
    <body>
        <h2>Opinion Poll Results</h2>
        <p><b>Who is your favorite author?</b></p>
        <p><b><?php echo $choices_count[0]; ?></b> people have thus far taken part in this poll:</p>
        <p>
        <table>
            <?php echo($table_rows); ?>
        </table>
    </body>
</html>