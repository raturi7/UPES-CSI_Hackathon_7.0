<?php
// Connection database
// include 'connection.php';
// // Get the id of the problem statement
// $id = $_GET['id'];
// // Query to get the problem statement
// $sql = "SELECT * FROM `problem_statement` WHERE `id` = $id";
// // Execute the query
// $result = mysqli_query($conn, $sql);
// // Fetch the result
// $row = mysqli_fetch_assoc($result);
// // Get the problem statement
// $problem_statement = $row['problem_statement'];
// // Get the problem statement name
// $problem_statement_name = $row['problem_statement_name'];
// // Get the problem statement description
// $problem_statement_description = $row['problem_statement_description'];





?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.7, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="assets/css/themify-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!-- FONT AWESOME -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Favicon Image-->
    <link rel="icon" type="image/x-icon" href="assets/img/logo with circle.png">

    <!-- Animation on scroll -->

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Hackathon 7.0</title>

</head>

<body class="has-loading-screen ts-theme-dark">

    <div class="ts-page-wrapper">

        <!--NAVIGATION ******************************************************************************************-->

        <header class="header">
            <nav class="navbar navbar-expand-lg fixed-top stretched" style="z-index: 2;">
                <div class="container-fluid stretched">
                    <a class="navbar-brand" target="_blank">
                        <img src="assets/img/UPES Logo White.png" class="upes-logo">
                        <img class="csi-logo" src="assets/img/csi logo.png" alt="CSI Logo">
                    </a>
                    <button class="navbar-toggler bg-transparent button2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mb-5 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>

                            <!-- Give a button to sumbit own problem statement -->



                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!--end #header-->

        <!--CONTENT *********************************************************************************************-->
        <div class="container" id="home" data-aos="fade-right">
            <main id="main-content" style="margin-top: 5%;">
                <div class="ts-content-wrapper">
                    <!-- Heading Problem Statement -->
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="lgx-heading-area">
                                        <div class="lgx-heading lgx-heading-white">
                                            <h2 class="heading">Problem Statement</h2>
                                        </div>
                                        <div>
                                            <?php

                                            if (isset($_GET['error'])) {
                                                echo '<p class="error">' . $_GET['error'] . '</p>';
                                            }
                                            if (isset($_GET['success'])) {
                                                echo '<p class="success">' . $_GET['success'] . '</p>';
                                            }
                                            ?>

                                        </div>
                                        <!-- Create a form to submit the problem statement -->
                                        <div>
                                            <!-- <form method="post" action = "process.php" >
                                            <label for="HackathonID">Hackathon ID</label>
                                            <input type="text" DISABLED name="HackathonID" id="HackathonID" placeholder="Enter Hackathon ID"><br>
                                            <label for="problemID">Problem ID</label>
                                            <input type="text" DISABLED name="problemID" id="problemID" placeholder="Enter Problem ID"><br>
                                            <input type="submit" value="save"></button>
                                            

                                        </form> -->
                                        </div>

                                    </div>

                                    <details>

                                        <summary>

                                            Problem Statement-1

                                        </summary>

                                        <p><strong>ProblemID:</strong> HCKPS01<br>

                                            <strong>Problem Statement:</strong> To develop an end-to-end face recognition-enabled mobile/web application
                                            that should recommend the user the best pension benefit scheme with PensionBox Insights and the next steps to avail of the same.
                                            <br>

                                            <strong>Problem Description:</strong><br>

                                            To develop an end-to-end face recognition enabled mobile/web application that can estimate the age (Numeric), predict the gender (Male/Female), determine the live
                                            location (City and State/UT), and perform liveness detection of a user. The input to the application should be taken via the front/back camera of the mobile and the output of the face detection model should be verified by the user manually through a popup. Based on the output, the application should recommend to the user the best pension benefit scheme with PensionBox Insights and the next steps to avail of the same. The details of the benefits are provided in the Data section below. The application should be recurrent and perform the same for the known ones of the user as well and on each verification, the user should get some reward points with the number of runs performed & total rewards.
                                            Pension Movement is an awareness initiative that enables community members to use this tool to know the right benefit for their family members or people around them using the best of AI & technology.
                                            More Information about the movement: https://pensionbox.in/pension-movement

                                            <br>



                                            <strong>Expected Outcomes:</strong><br>

                                            1.The application should be AI integrated.<br>

                                            2. Easy and efficient to use UI/UX
                                            <br>

                                            3.The application should be recurrent and perform the same for the known ones of the user as well and on each verification, the user should get some reward points with the number of runs performed & total rewards.
                                            <br>

                                            4.The model should accurately work for live test cases of individuals and the face detection model should only work on live video, not on static images or video being shown by external sources.

                                            <br>

                                            <strong>Organization Name:</strong> PensionBox - India’s First Digital Pension Platform<br>
                                            <strong>Data:</strong> <a style="color:#21ebff"; href="http://shorturl.at/ahsv8">http://shorturl.at/ahsv8</a>
                                            <strong><br>Additional information:
                                                </strong> <a style="color:#21ebff"; href="https://drive.google.com/file/d/103SJPqoZMuWQpZ0FQRExNYfMrbKJRA2x/view?usp=drivesdk">https://drive.google.com/file/d/103SJPqoZMuWQpZ0FQRExNYfMrbKJRA2x/view?usp=drivesdk</a>




                                        </p>
                                        <!-- disable input from user -->
                                        <script>
                                            document.querySelectorAll('input[type="text"], textarea').forEach(function(input) {
                                                input.setAttribute("disabled", "");
                                            });
                                        </script>
                                        <form action="process.php" method="POST">
                                            <!-- Enter Hackathon Id -->
                                            <label for="HackathonID">Hackathon ID</label>
                                            <input type="text" name="hackathon_id" value="<?php echo $_COOKIE['userid']; ?>" id="hackathon_id" placeholder="Enter Hackathon ID"><br>
                                            <!-- Enter Problem Id -->
                                            <script>
                                                var id = "HCKPS01";
                                                document.write("<label for='id'>Problem ID</label>");
                                                document.write("<input  type='text'   name='id' id='id' value='" + id + "'><br>");
                                            </script>

                                            <!-- sumbit form and actomatilly add problem id as HCKPS01-->
                                            <input type="submit" value="Lock"></button>


                                        </form>




                                    </details>



                                    <details>

                                        <summary>

                                            Problem Statement-2

                                        </summary>

                                        <p><strong>ProblemID:</strong> HCKPS02<br>

                                            <strong>Problem Statement:</strong> Dark Web/ DarkNet<br>

                                            <strong>Problem Description:</strong><br>

                                            A tool that could search for keywords across darknet search engines, along with an alerting mechanism. It must be a simple interface/ Console which must connect to VPN and then help to find the details rather than police searching for websites, links, and platforms on the dark web. It must also be able to fetch data from different browsers like TOR, TAILS, I2P, Freenet, etc. Participants must develop a simple console that automatically latches to a VPN and then connects through the Dark Net Browser/Deep Net browser. And then it should be able to filter data based on keyword, geo-location, state, district, and date.
                                            It should also expose IP details of dark net sites & users. A tool that could identify a seller of any product and provide ways to track down the person. It should be able to gather/crawl details about all websites, chat rooms, shopping sites & other information related to the dark web. It should be a handy intelligence and data collection tool on the dark web. Web archive time-based proxy with easy User interface for access, Geolocation identification, TOR keyword search, and dark web Crawlers.




                                            <strong>Expected Outcomes:</strong><br>
                                            A handy tool for dark web intelligence that could help the police in tracking down websites, gather intelligence, and also trace the person, and groups involved in any illegal activity. The tool must be able to perform an analysis of the gathered information.
                                            <br>



                                            <strong>Organization Name:</strong> Uttarakhand Police
                                        </p>
                                        <p>Create your own database or use any available sample database, if required.</p>

                                        <form action="process.php" method="POST">
                                            <!-- Enter Hackathon Id -->
                                            <label for="HackathonID">Hackathon ID</label>
                                            <input type="text" name="hackathon_id" value="<?php echo $_COOKIE['userid']; ?>" id="hackathon_id" placeholder="Enter Hackathon ID"><br>
                                            <!-- Enter Problem Id -->
                                            <script>
                                                var id = "HCKPS02";
                                                document.write("<label for='id'>Problem ID</label>");
                                                document.write("<input type='text'   name='id' id='id' value='" + id + "'><br>");
                                            </script>

                                            <!-- sumbit form and actomatilly add problem id as UH_BI_001-->
                                            <input type="submit" value="Lock"></button>


                                        </form>



                                    </details>







                                    <details>

                                        <summary>

                                            Problem Statement-3

                                        </summary>

                                        <p><strong>ProblemID:</strong> HCKPS03<br>

                                            <strong>Problem Statement:</strong> News Alert/ News Flash<br>

                                            <strong>Problem Description:</strong><br>

                                            Simple software that includes all major departments dealing with situations like accidents, fire, etc so that once the incident has occurred the concerned departments get details and hence work more efficiently saving time. eg- somebody reports a fire incident or accident incident then the report must immediately go to the concerned district or police station. These social media tweet texts have been mined so as to identify the complaints regarding various road transportation issues of traffic, accidents, potholes, garbage, and pollution.
                                            The tool should work on a flash mechanism method. The accident should be flashed on the screens of concerned authorities. Also, feedback or response action should be timely fed by the concerned. Centralised database is to be made, all social media accounts/pages are integrated and tracking of complaints can be done. Also, the need of geotagging the place and generating hotspots for specific times of complaint. Eg- one area report for maximum chain snatching complaints. Analytical analysis of social media posts for sentiment prediction Database of regular habitual offenders on social media Identified profiles-based web crawlers for content and photos.
                                            <br>



                                            <strong>Expected Outcomes:</strong><br>

                                            A mini demonstration from the side of the participants on how the news will be flashed, the response time to be shown, and then a summary report to be generated having basic details.

                                            <br>

                                            <strong>Organization Name:</strong> Uttarakhand Police
                                        </p>
                                        <p> Create your own database or use any available sample database, if required.</p>
                                        <form action="process.php" method="POST">
                                            <!-- Enter Hackathon Id -->
                                            <label for="HackathonID">Hackathon ID</label>
                                            <input type="text" name="hackathon_id" value="<?php echo $_COOKIE['userid']; ?>" id="hackathon_id" placeholder="Enter Hackathon ID"><br>
                                            <!-- Enter Problem Id -->
                                            <script>
                                                var id = "HCKPS03";
                                                document.write("<label for='id'>Problem ID</label>");
                                                document.write("<input type='text'   name='id' id='id' value='" + id + "'><br>");
                                            </script>

                                            <!-- sumbit form and actomatilly add problem id as UH_BI_001-->
                                            <input type="submit" value="Lock"></button>


                                        </form>


                                        <br>



                                        



                                    </details>







                                    <details>

                                        <summary>

                                            Problem Statement-4

                                        </summary>

                                        <p><strong>ProblemID:</strong> HCKPS04<br>

                                            <strong>Problem Statement:</strong> Smarter Surveillance System<br>

                                            <strong>Problem Description:</strong><br>

                                            At present, a lot of man-hours are spent on physical patrolling of border areas and compounds. Fencing wires are not reliable and easy to breach, in large areas it is difficult to be available at all locations, and if someone is breaching in absence of a guard, the guard will know only when they reach the breach site. Also, it takes a lot of time to cover the compound walls if the area is large.
                                            For a smarter India, we need a Smarter Surveillance system, which can be developed through Modular design and is easy to assemble onsite. The users of this system are two-fold: i) Any Security agent who is securing a larger area can install an unmanned area and can track through a single control Room. Develop a Technology that can address this issue partially or completely.
                                            <br>



                                            <strong>Expected Outcomes:</strong><br> 1.An API/tool that could monitor the fence and borderlines, in the most accurate and efficient way.<br>
                                            2.It should alarm everyone in case of breach or movement.
                                            <br>

                                            <strong>Organization Name:</strong> UPES-CSI<br>
                                            Create your own database or use any available sample database, if required.
                                        </p>
                                        <form action="process.php" method="POST">
                                            <!-- Enter Hackathon Id -->
                                            <label for="HackathonID">Hackathon ID</label>
                                            <input type="text" name="hackathon_id" value="<?php echo $_COOKIE['userid']; ?>" id="hackathon_id" placeholder="Enter Hackathon ID"><br>
                                            <!-- Enter Problem Id -->
                                            <script>
                                                var id = "HCKPS04";
                                                document.write("<label for='id'>Problem ID</label>");
                                                document.write("<input type='text'   name='id' id='id' value='" + id + "'><br>");
                                            </script>

                                            <!-- sumbit form and actomatilly add problem id as UH_BI_001-->
                                            <input type="submit" value="Lock"></button>


                                        </form>


                                    </details>







                                    <details>

                                        <summary>

                                            Problem Statement-5

                                        </summary>

                                        <p><strong>ProblemID:</strong> HCKPS05<br>

                                            <strong>Problem Statement:</strong> A single tool to identify all security defects in an application.<br>

                                            <strong>Problem Description:</strong><br>

                                            No single tool or technique can identify all security defects in an application. Building a mature Security program is to use a number of techniques to find security defects. Static Application Security Testing (SAST) analyses an application's source code to find security defects. This allows SAST tools to have excellent coverage (you can scan every line of code) and run early in the software development lifecycle (you don't need a deployed application). While SAST has been around for decades, SAST tools are often hard to use. Setup is complex, scans take too long, and results have too many false positives.
                                            <br>



                                            <strong>Expected Outcomes:</strong><br>

                                            1. An organisation pushes code to production dozens of times every day. The scan shouldn't take very long and should be able to give the results in minutes.<br>
                                            2. The tool should have an option for the administrator to configure the alerts, example:- if the tool found a high-severity vulnerability in the code it should alert the Admin and user who is trying to push that code through mail/any kind of notification.


                                            <br>

                                            <strong>Organization Name:</strong> Conga Software<br>
                                            <strong>Additional Information:</strong> <a style="color:#21ebff;" href="https://drive.google.com/file/d/1rZL3g16qIY7XEzg_skFF2FJUZzmzBjdC/view?usp=drivesdk">https://drive.google.com/file/d/1rZL3g16qIY7XEzg_skFF2FJUZzmzBjdC/view?usp=drivesdk<a>
                                                    <br>Create your own database or use any available sample database, if required.
                                        </p>
                                        <form action="process.php" method="POST">
                                            <!-- Enter Hackathon Id -->
                                            <label for="HackathonID">Hackathon ID</label>
                                            <input type="text" name="hackathon_id" value="<?php echo $_COOKIE['userid']; ?>" id="hackathon_id" placeholder="Enter Hackathon ID"><br>
                                            <!-- Enter Problem Id -->
                                            <script>
                                                var id = "HCKPS05";
                                                document.write("<label for='id'>Problem ID</label>");
                                                document.write("<input type='text'   name='id' id='id' value='" + id + "'><br>");
                                            </script>

                                            <!-- sumbit form and actomatilly add problem id as UH_BI_001-->
                                            <input type="submit" value="Lock"></button>


                                        </form>


                                    </details>

                                    <details>

                                        <summary>

                                            Problem Statement-6

                                        </summary>

                                        <p><strong>ProblemID:</strong> HCKPS06<br>

                                            <strong>Problem Statement:</strong> Secure Multi-featured community platform for UPES-CSI Student Chapter<br>

                                            <strong>Problem Description:</strong><br>

                                            The Computer Society of India's UPES branch was established in 2010. It is a youth organisation that provides a platform to "CREATE, SHARE, and INNOVATE" in the field of computer science and its various technologies. This student organisation supports the interoperability of technical knowledge and cutting-edge developments among all members through many seminars, training, and workshops. This body aims to provide students with the latest technical information, various opportunities in the creative field, and events to connect with distinguished speakers specialised in different technologies.
                                            The passion and dedication with which the incredible team works has earned the chapter the title of the Best Student Chapter for seven years in a row. UPES-CSI is a one-stop destination for technocrats seeking affordable and practical guidance to help navigate the rapid technological advancements, globalisation, shifting demographics, and new business approaches that will dramatically change the workforce over the next decade.
                                            <br>



                                            <strong>Expected Outcomes:</strong><br>

                                            1. UPES-CSI app (Web and mobile) is to be deployed on a secured server.<br>
                                            <br>2. Security and privacy feature required:
                                            <br>3. Actors - Admin, Core committee members, Invited Guests, Registered, and Unregistered users.
                                            <br>4. Attribute-based Access control including management of access rights of current members, providing access rights to a new user, and access right revocation once a user leaves the chapter.
                                            <br>5. Efficient and secure data handling and management. Such as Data life-cycle management, and data traceability.
                                            <br>6. Admin can add/manage/remove teams and events, their members, and users. Admin users must be able to set access rights for the other members.
                                            <br>7. All users must be able to register and opt out of the chapter when desired.
                                            <br>8. Secured chat boxes for each team/event. The chat box must accept text and voice input. Similarly, the chat output must also include text and voice.
                                            <br>9. A portal for technical, social, and health-related news articles and posts. Each article/post will have a secured discussion section open only for registered members. The admin users can control the added articles/posts.
                                            <br>10. App management and Content Hosting should be convenient for the chapter members.
                                            <br>11. The hosted content on the app must be user-friendly and interactive to increase user participation.


                                            <br>

                                            <strong>Organization Name:</strong> UPES-CSI
                                            <br>Create your own database or use any available sample database, if required.
                                        </p>
                                        <form action="process.php" method="POST">
                                            <!-- Enter Hackathon Id -->
                                            <label for="HackathonID">Hackathon ID</label>
                                            <input type="text" name="hackathon_id" value="<?php echo $_COOKIE['userid']; ?>" id="hackathon_id" placeholder="Enter Hackathon ID"><br>
                                            <!-- Enter Problem Id -->
                                            <script>
                                                var id = "HCKPS06";
                                                document.write("<label for='id'>Problem ID</label>");
                                                document.write("<input type='text'     name='id' id='id' value='" + id + "'><br>");
                                            </script>

                                            <!-- sumbit form and actomatilly add problem id as UH_BI_001-->
                                            <input type="submit" value="Lock"></button>


                                        </form>


                                    </details>

                                    <details>

                                        <summary>

                                            Problem Statement-7

                                        </summary>

                                        <p><strong>ProblemID:</strong> HCKPS07<br>

                                            <strong>Problem Statement:</strong> Using AI and data analysis for plastic waste management<br>

                                            <strong>Problem Description:</strong><br>

                                            India produced more than 34 metric tons of plastic in the years 2019-2020. The average annual increase in plastic generation has more than doubled for India in the last five years and stands currently at 21.8%. Using algorithms, we can study the patterns of waste production and find insights to devise ways of using our resources in the best possible manner. An example of a city that has perfected efficient resource management and quick action is the city of Indore which has been India’s cleanest city since 2016. The parameters of the study would be population concentration, plastic usage, and the amount of money spent on the whole process of garbage disposal. This includes garbage collection, transportation, segregation, and all other activities.<br>



                                            <strong>Expected Outcomes:</strong><br>

                                            1. Algorithms to be formulated for studying the waste production patterns and any other requirements deemed fit.<br>

                                            2. Suggestion of possible actions to be taken after analysis of the insights found.
                                            <br>

                                            <strong>Organization Name:</strong> UPES-CSI
                                        </p>
                                        <form action="process.php" method="POST">
                                            <!-- Enter Hackathon Id -->
                                            <label for="HackathonID">Hackathon ID</label>
                                            <input type="text" name="hackathon_id" value="<?php echo $_COOKIE['userid']; ?>" id="hackathon_id" placeholder="Enter Hackathon ID"><br>
                                            <!-- Enter Problem Id -->
                                            <script>
                                                var id = "HCKPS07";
                                                document.write("<label for='id'>Problem ID</label>");
                                                document.write("<input type='text'     name='id' id='id' value='" + id + "'><br>");
                                            </script>

                                            <!-- sumbit form and actomatilly add problem id as UH_BI_001-->
                                            <input type="submit" value="Lock"></button>


                                        </form>



                                    </details>









                                    <details>

                                        <summary>

                                            Problem Statement-8

                                        </summary>

                                        <p><strong>ProblemID:</strong> HCKPS08<br>

                                            <strong>Problem Statement:</strong> Phase and Success monitoring for Finances of an organization <br>

                                            <strong>Problem Description:</strong><br>

                                            No restriction on the organization being used for this problem statement.<br>



                                            <strong>Expected Outcomes:</strong><br>

                                            1. An intelligent solution to manage and study the financial graph of the organization and plan further strategies accordingly.<br>

                                            <strong>Organization Name:</strong> ISRO
                                        </p>
                                        <form action="process.php" method="POST">
                                            <!-- Enter Hackathon Id -->
                                            <label for="HackathonID">Hackathon ID</label>
                                            <input type="text" name="hackathon_id" value="<?php echo $_COOKIE['userid']; ?>" id="hackathon_id" placeholder="Enter Hackathon ID"><br>
                                            <!-- Enter Problem Id -->
                                            <script>
                                                var id = "HCKPS08";
                                                document.write("<label for='id'>Problem ID</label>");
                                                document.write("<input type='text'     name='id' id='id' value='" + id + "'><br>");
                                            </script>

                                            <!-- sumbit form and actomatilly add problem id as UH_BI_001-->
                                            <input type="submit" value="Lock"></button>


                                        </form>

                                    </details>

                                        



                                        


                                    

                                    <details>

                                        <summary>

                                            Problem Statement-9

                                        </summary>

                                        <p><strong>ProblemID:</strong> HCKPS09<br>

                                            <strong>Problem Statement:</strong> To construct a viable solution for resolving network problems in universities.<br>

                                            <strong>Problem Description:</strong><br>

                                            In the present day University scenario, students are using network devices on campus like never before. Many students are facing network connectivity issues at the University. The major reason for this is that a large user base is trying to connect and it’s very difficult to keep a track of everyone using Wi-Fi. Another reason for this problem is Bring Your Own Device which leads to increased demand and challenges as each device has different internet consumption. Wi-fi enabled IOT devices like RFID and CCTVs are also a great source of network consumption. Last but not least is the bad network design that is holding us back like old cat cables, no Ethernet and no A.P.N this can be resolved by getting new cables and the latest devices.<br>



                                            <strong>Expected Outcomes:</strong><br>

                                            1. The system must be capable enough to delete ghost devices and applications through Artificial Intelligence and machine learning to reduce load.<br>

                                            <strong>Organization Name:</strong> UPES-CSI
                                        </p>
                                        <form action="process.php" method="POST">
                                            <!-- Enter Hackathon Id -->
                                            <label for="HackathonID">Hackathon ID</label>
                                            <input type="text" name="hackathon_id" value="<?php echo $_COOKIE['userid']; ?>" id="hackathon_id" placeholder="Enter Hackathon ID"><br>
                                            <!-- Enter Problem Id -->
                                            <script>
                                                var id = "HCKPS09";
                                                document.write("<label for='id'>Problem ID</label>");
                                                document.write("<input type='text'     name='id' id='id' value='" + id + "'><br>");
                                            </script>

                                            <!-- sumbit form and actomatilly add problem id as UH_BI_001-->
                                            <input type="submit" value="Lock"></button>


                                        </form>


                                        <br>


                                    </details>

                                    <details>

                                        <summary>

                                            Problem Statement-10

                                        </summary>

                                        <p><strong>ProblemID:</strong> HCKPS10<br>

                                            <strong>Problem Statement:</strong> Choose your own statement.<br>

                                            <strong>Problem Description:</strong><br>

                                            Choose your own statement.<br>




                                            <strong>Expected Outcomes:</strong><br>

                                            1. The application should be AI integrated and must provide an intelligent solution.


                                            <br>


                                            Create your own database or use any available sample database, if required.
                                        </p>
                                       

                                        <form action="process.php" method="POST">
                                            <!-- Enter Hackathon Id -->
                                            <label for="HackathonID">Hackathon ID</label>
                                            <input type="text" name="hackathon_id" value="<?php echo $_COOKIE['userid']; ?>" id="hackathon_id" placeholder="Enter Hackathon ID"><br>
                                            <!-- Enter Problem Id -->
                                            <script>
                                                var id = "HCKPS11";
                                                document.write("<label for='id'>Problem ID</label>");
                                                document.write("<input type='text'     name='id' id='id' value='" + id + "'><br>");
                                            </script>

                                            <!-- sumbit form and actomatilly add problem id as UH_BI_001-->
                                            <input type="submit" value="Lock"></button>


                                        </form>



                                        <br>




                                    </details>
                                    <details>

                                        <summary>

                                            Problem Statement-11

                                        </summary>

                                        <p><strong>ProblemID:</strong> HCKPS11<br>

                                            <strong>Problem Statement:</strong> Layering of Bank Accounts<br>

                                            <strong>Problem Description:</strong><br>

                                            During criminal investigations, Law agencies come across different bank accounts. There is a need for a mechanism that can help to integrate different bank accounts into layers. <br>
                                            Spider maps or virtual maps can be created which will create nodal points and help to give an interactive visualisation of the money trail between different bank accounts. Inter-case bank account layers to be linked. <br>
                                            The spider maps of different cases are to be lined along with a filter for details like account holder, IP, phone number, email, etc<br>





                                            <strong>Expected Outcomes:</strong><br>

                                            1. Police can achieve different layers of money trail/movement explaining how the money went from one bank account to another. Also helping us with details of source and destination accounts

                                            <br>

                                            <strong>Organization Name:</strong> Uttarakhand Police<br>
                                            Create your own database or use any available sample database, if required.
                                        </p>
                                        

                                        <form action="process.php" method="POST">
                                            <!-- Enter Hackathon Id -->
                                            <label for="HackathonID">Hackathon ID</label>
                                            <input type="text" name="hackathon_id" value="<?php echo $_COOKIE['userid']; ?>" id="hackathon_id" placeholder="Enter Hackathon ID"><br>
                                            <!-- Enter Problem Id -->
                                            <script>
                                                var id = "HCKPS11";
                                                document.write("<label for='id'>Problem ID</label>");
                                                document.write("<input type='text'     name='id' id='id' value='" + id + "'><br>");
                                            </script>

                                            <!-- sumbit form and actomatilly add problem id as UH_BI_001-->
                                            <input type="submit" value="Lock"></button>


                                        </form>



                                        <br>




                                    </details>







                                    <details>

                                        <summary>

                                            Problem Statement-12

                                        </summary>

                                        <p><strong>ProblemID:</strong> HCKPS12<br>

                                            <strong>Problem Statement:</strong> Video Analytics<br>

                                            <strong>Problem Description:</strong><br>

                                            CCTV/Video footage analysis tool where the DVR of the camera is analysed. This tool should be able to make the number plate of the vehicle visible by enhancing the quality of the DVR stored footage. Classification/matching can be done on the basis of colour, model, type, etc. Footage/image quality must be enhanced along with the ability of better face/physical attributed matching tools in a crowded place.<br>
                                            Some of the attributes could be Cap, T-Shirt colour, height, weight, etc. Lane driving enforcement, black spot warnings, face expression detection in huge crowds for frisking. Alert for stolen cars on barriers.

                                            <br>



                                            <strong>Expected Outcomes:</strong><br>

                                            1. Tool provided must be able to enhance the image of the number plate captured. Also, the suspected person must be matched based on his/her physical attributes in a crowded place.<br>


                                            <strong>Organization Name:</strong> Uttarakhand Police
                                            Create your own database or use any available sample database, if required.
                                        </p> <br>

                                        
                                        <br>
                                        <form action="process.php" method="POST">
\                                            <label for="HackathonID">Hackathon ID</label>
                                            <input type="text" name="hackathon_id" value="<?php echo $_COOKIE['userid']; ?>" id="hackathon_id" placeholder="Enter Hackathon ID"><br>
                                            <script>
                                                var id = "HCKPS12";
                                                document.write("<label for='id'>Problem ID</label>");
                                                document.write("<input type='text'     name='id' id='id' value='" + id + "'><br>");
                                            </script>

                                            <input type="submit" value="Lock"></button>


                                        </form>
                                        <!-- Remove all forms -->
                                       



                                    </details>









                                </div>
                            </div>
                        </div>
                    </div>




                    <!--end row-->
                </div>
                <!--end ts-content-wrapper-->
            </main>
            <!--end #main-content-->
        </div>
        <script>
            const details = document.querySelectorAll("details");

            // Add the onclick listeners.
            details.forEach((targetDetail) => {
                targetDetail.addEventListener("click", () => {
                    // Close all the details that are not targetDetail.
                    details.forEach((detail) => {
                        if (detail !== targetDetail) {
                            detail.removeAttribute("open");
                        }
                    });
                });
            });
        </script>
        <script>var forms = document.getElementsByTagName("form");
for (var i = forms.length - 1; i >= 0; i--) {
    forms[i].parentNode.removeChild(forms[i]);
}
</script>
        

        <!--end container-->

        <!--BACKGROUND **********************************************************************************************-->
        <div class="ts-background ts-shapes-canvas position-fixed ts-separate-bg-element" data-bg-color="#00265f">
            <div class="ts-background-image ts-animate ts-scale" data-bg-image="assets/img/bg/14.png"></div>
            <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/13.png"></div>
            <div class="ts-background-image ts-animate ts-scale" data-bg-image="assets/img/bg/12.png" data-bg-opacity=".3">
            </div>
            <div class="ts-background-image ts-animate ts-scale" data-bg-image="assets/img/bg/11.png"></div>
            <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/10.png"></div>
            <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/9.png" data-bg-opacity=".8">
            </div>
            <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/8.png" data-bg-opacity=".8">
            </div>
            <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/7.png"></div>
            <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/6.png" data-bg-opacity=".8">
            </div>
            <div class="ts-background-image ts-animate" data-bg-image="assets/img/bg/5.png" data-bg-opacity=".8"></div>
            <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/4.png"></div>
            <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/3.png" data-bg-opacity=".8">
            </div>
            <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/2.png"></div>
            <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/1.png" data-bg-opacity=".8">
            </div>
        </div>
        <!--end ts-background-->

        <!--end ts-page-wrapper-->

        <!--*************************************************************************************************************-->
        <!--************ SIDE PANEL *************************************************************************************-->
        <!--*************************************************************************************************************-->


        <!--end container-fluid-->
        <!--end ts-side-panel-->

        <!--*************************************************************************************************************-->
        <!--************ JS SCRIPTS *************************************************************************************-->
        <!--*************************************************************************************************************-->

        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/jquery-validate.bootstrap-tooltip.min.js"></script>

        <script src="assets/js/custom.js"></script>

        <!--Google map-->

        <script>
            var latitude = 34.038405;
            var longitude = -117.946944;
            var markerImage = "assets/img/map-marker.png";
            var mapElement = "map";
            var mapStyle = [{
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "saturation": 36
                }, {
                    "color": "#000000"
                }, {
                    "lightness": 40
                }]
            }, {
                "featureType": "all",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#000000"
                }, {
                    "lightness": 16
                }]
            }, {
                "featureType": "all",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 17
                }, {
                    "weight": 1.2
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 21
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 29
                }, {
                    "weight": 0.2
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 18
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 16
                }]
            }, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 19
                }]
            }, {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                }, {
                    "lightness": 17
                }]
            }]
            google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapStyle, mapElement));
        </script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js" integrity="sha512-VEBjfxWUOyzl0bAwh4gdLEaQyDYPvLrZql3pw1ifgb6fhEvZl9iDDehwHZ+dsMzA0Jfww8Xt7COSZuJ/slxc4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            var typed = new Typed(".auto-type", {
                // strings: ["UPES CSI Presents", "Hackathon 7.0"],
                strings: ["Hackathon 7.0 will release in", "Hackathon 7.0 will release in"],
                // typeSpeed: 100,
                typeSpeed: 50,
                backSpeed: 40,
                loop: true
            })
        </script>
        <script>
            var typed = new Typed(".auto-type2", {
                strings: ["For Full Stack Developers", "For Machine Learning Developers", "For Cloud Computing Enthusiasts", "For Cyber Security Developers"],
                typeSpeed: 50,
                backSpeed: 50,
                loop: true
            })
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="assets/js/navbar.js"></script>

        <!-- FAQ SECTION -->

        <script>
            // select all accordion items
            const accItems = document.querySelectorAll(".accordion__item");

            // add a click event for all items
            accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

            function toggleAcc() {
                // remove active class from all items exept the current item (this)
                accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null);

                // toggle active class on current item
                if (this.classList != "accordion__item--active") {
                    this.classList.toggle("accordion__item--active");
                }
            }
            $(document).ready(function() {

                var desc = $('.desc');
                var descWrapper = $('.desc-wrapper');

                // When clicking more/less button
                $('.more-info').click(function() {



                    if ($(this).hasClass('expand')) {
                        // contract
                        $('.desc-wrapper').animate({
                            'height': '0'
                        }, 'slow');
                        $('.wrapper').css({
                            'display': 'none'
                        });


                    } else {
                        // expand 
                        $('.desc-wrapper').css({
                            'height': '0',
                            'max-height': 'max-content'
                        }).animate({
                            'min-height': '15rem'
                        }, 'slow');
                        $('.wrapper').css({
                            'display': 'block'
                        });
                        $('.desc-wrapper').css({
                            'display': 'inline'
                        });
                    }

                    $(this).toggleClass('expand');
                    return false;
                });

            });
        </script>

        <!-- our aos data -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 150,
                duration: 800,
            });
        </script>
        <!--Modal script-->
        <script>
            window.onload = function() {
                document.querySelector("#modalbox").style.display = 'none';
            }
            var disableBodyScroll = function() {
                document.querySelector("#modalbox").style.display = 'flex';
                window.body_scroll_pos = $(window).scrollTop(); // write page scroll position in a global variable
                $('body').css('overflow-y', 'hidden');
            }
            document.querySelector("#close-modal-button").addEventListener('click', function() {
                document.querySelector("body").style.overflow = 'visible';
            });
        </script>
</body>

</html>