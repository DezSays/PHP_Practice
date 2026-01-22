<html>
    <body>
        <pre>
            <?php  
                // Creating an array assigned to variable
                $categories_classic = array('Programming', 'Business', 'Art History', 'Performance Art', 'Concatenate' . '!!!');
                $categories_modern  = ['Programming', 'Business', 'Art History', 'Performance Art', 'Concatenate' . '!!!'];

                // Check and display if array is empty
                var_dump(empty($categories_modern[99]));

                // See if exists by key
                var_dump(isset($categories_modern[99]));

                // See if specified value exists in category
                var_dump(in_array('Programming', $categories_classic));

                if (in_array('Programming', $categories_modern)) {
                    echo "Programming is in our curriculum.\n";
                }

                // Count how many elements are in an array
                var_dump(count($categories_modern));

            ?>
        </pre>
    </body>
</html>