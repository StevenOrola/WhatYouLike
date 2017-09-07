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
            
            $third = new Student();
            $third->surname = "Orola";
            $third->first_name = "Steven";
            $third->add_email('home', 'steven@orola.com');
            $third->add_email('work1', 'Iwork@here.com');
            $third->add_email('work2', 'Mysecond@job.com');
            $third->add_email('work3', 'Threejobs@hardworker.com');
            $third->add_grade(10);
            $third->add_grade(100);
            $third->add_grade(50);
            $students['s789'] = $third;
            
            
            ksort($students);
            
            foreach($students as $student) {
                echo $student->toString();
            }
        ?>
    </body>
</html>