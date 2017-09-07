<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include('Student.php');
            
            $students = array();
            
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home', 'johndoe.com');
            $first->add_email('work', 'jdoe@mcds.com');
            $first->add_grade(64);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home', 'albert@brainiacs.com');
            $second->add_email('work1', 'a_einstein@bcit.ca');
            $second->add_email('work2', 'albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(90);
            $second->add_grade(100);
            $students['a456'] = $second;
            
            foreach($students as $student) {
                echo $student->toString();
            }
        ?>
    </body>
</html>