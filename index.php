<?php include('admin/includes/dbconnection.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Teacher Subject Allocation System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style>
            .img_deg{
                float: left;
            }
            .pos_cen{
                position: absolute;
                width: 70%;
                right: 15%;
            }
            .anna{
                float:right;
                width: 40%;
            }
            .anna1{
                float:right;
                width: 40%;
            }
            .cc3{
                float:right;
                width: 40%;

            }
            

        </style>
    </head>
    <body style="background-color:black";>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Teacher Subject Allocation System (TSAS)</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a style="color:white"; class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a style="color:white"; class="nav-link" href="admin/login.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <img src="dbit.jpg" width="1520" height="450">
        
           
            
                    
                    <!-- <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p> -->
                
        <p> </p>

        <br>
        <!-- Page content-->
        
        <h2 align= "center" style="color:white" ><b>Welcome to Our Innovative Teacher-Student Allocation System!</b></h2> <br> 
        <div class="pos_cen">

            <img class="img_deg" src="anim.png" width="500" height="500">
            <p style="color:white" align=justify >At <big>DON BOSCO INSTITUTE OF TECHNOLOGY</big>, we are excited to introduce our latest advancement in educational technology - the Teacher-Student Allocation System. This system is designed to streamline the process of assigning students to teachers for classes, tutorials, and mentorship programs, ensuring that every student receives the attention and guidance they need to succeed.
                The Teacher Subject Allocation System is a comprehensive solution designed to revolutionize the 
                subject assignment process in educational institutions. Leveraging advanced algorithms and 
                    criteria, this system aims to enhance the efficiency and satisfaction of the teaching experience</p><br>
                    <p style="color:white" align=justify >The Teacher Subject Allocation Project is an innovative endeavor aimed at optimizing the process of 
                        assigning subjects to teachers within educational institutions. This project leverages advanced algorithms and data 
                        analysis techniques to match teachers with subjects based on their expertise, qualifications, and teaching preferences, 
                        as well as considering the educational needs and curriculum requirements of the institution. The primary objective is to 
                        enhance the quality of education by ensuring that teachers are allocated to subjects in which they can deliver the most effective teaching, 
                        thus fostering a more conducive learning environment for students.

                    </p>
                    <br><br>
                    <h2 style="color:white"><b>Features</b></h2>
                    <p style="color:white" align=justify >Introducing courses, teachers, and subjects in a Teacher Subject Allocation System 
                    for a DBMS (Database Management System) project involves creating a structured database schema that effectively manages and relates these entities.
                    </p><br>
                    <img class="anna" src="cc.1jpg.jpg" width="400" height="170">
                    <p style="color:white">1. Courses Table
                    This table contains details about the courses offered by the educational institution. Each course can consist of multiple subjects.
                    </p>
                    <ul style="color:white">
                    <li>CourseID (Primary Key): A unique identifier for each course.</li>
                    <li>CourseName: The name of the course.</li>
                    <li>Department: The department the course belongs to.</li>

                    </ul>
                    <br>
                    <br><br>

                    <img class="anna1" src="cc2.jpg" width="400" height="170">
                    <p class="info" style="color:white">2. Teachers Table
                    This table stores information about the teachers, including their qualifications and areas of expertise.</p>
                    <ul style="color:white" >
                        <li>TeacherID (Primary Key): A unique identifier for each teacher.</li>
                        <li>TeacherName: The name of the teacher.</li>
                        <li>Qualification: The highest qualification of the teacher.</li>
                        <li>ExpertiseArea: Area of expertise or subjects the teacher is most qualified to teach.</li>
                    </ul>
                    <br>
                    <br>
                     <img class="cc3" src="cc3.jpg" width="400" height="170">
                     <p style="color:white"> 3. Subjects Table
                    This table lists all the subjects that can be taught as part of the courses.
                    </p>
                    <ul style="color:white">
                        <li>SubjectID (Primary Key): A unique identifier for each subject</li>
                        <li>SubjectName: The name of the subject.</li>
                        <li>CourseID (Foreign Key): The identifier for the course this subject is part of. This establishes a relationship between each subject and its corresponding course.</li>
                    </ul>
                    <br>
                    <br><br>
                    <br>
                    <h2 style="color:white" align=center>Join us in Embracing a More Connected and Personalized Educational Journey at <big><b>DON BOSCO INSTITUTE OF TECHNOLOGY.</b></big></h2>
        </div>

        <!-- Footer-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
