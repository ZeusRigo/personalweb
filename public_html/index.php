<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML - Personal Website</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
</head>
<body>

    <header>
        <h1>My Personal Website</h1>
    </header>

    <nav>
        <a onclick="scrollToSection('homepage')">Homepage</a>
        <a onclick="scrollToSection('about')">About Me</a>
        <a onclick="scrollToSection('resume')">Resume</a>
        <a onclick="scrollToSection('contacts')">Contacts</a>
    </nav>
    
    <section id="homepage">
        <h2>Welcome to My Personal Website</h2>
        <p>Hi there, my name is Zeus John Rigo, and I attend National University to study information technology. I have a strong interest in learning about the constantly changing field of technology and its applications as an IT student. I enjoy a challenge, and I'm always learning and adjusting to the ever-changing IT industry. I'm eager to share my knowledge and abilities, and I'm pursuing a career in the fascinating field of information technology.</p>
        <img class="circle-image" src="sirigo.jpg" alt="My Profile">
    </section>

    <section id="about">
        <h2>ABOUT ME</h2>
        <h2 style="border-top: 4px solid #000; padding-top: 10px;">BACKGROUND</h2>
        <p>I'm a 20 years old student Information Technology (IT) student at a university. Known for their enthusiasm and curiosity for technology, I'm traveling to discover the wide world of IT while continuously trying to learn new things and broaden my knowledge.
        </p>
        <h2 style="border-top: 4px solid #000; padding-top: 10px;">EDUCATION</h2>
        <p>From 2016 to 2021, I attended Lagro High School, from which I graduated. Currently, I attend National University, where I am enrolled in an Information Technology course.  </p>
        
        <h2 style="border-top: 4px solid #000; padding-top: 10px;">SKILLS</h2>
        <p> I often find comfort in the art of sketching and drawing during my free time or when I'm bored. Animation is a creative endeavor that I have experience with and found captivating in the past. These days, I primarily concentrate on digital art, where I get lost in the seemingly endless possibilities provided by technology. Although I have dabbled in traditional art, my current passion is the ever-changing and dynamic field of digital creativity.
</p>
        
        <h2 style="border-top: 4px solid #000; padding-top: 10px;">HOBBIES</h2>
        <p>My main pastime is playing video games; this is a hobby that I have incorporated into my life ever since I started my IT studies. But my interests go beyond just the digital world; I also enjoy using sketching and drawing to express my creativity, which helps me balance my tech-focused coursework with my artistic pursuits.
        </p>
    </section>

    <section id="resume">
        <h2>RESUME</h2>
        <img src="ResumeZeus.jpg" alt="Resume">
        <p><a href="ZjResume.pdf" download>Download PDF Resume</a></p>
    </section>

    <section id="contacts">
        <h2>Contact Information</h2>
        <p>Feel free to get in touch with me. You can reach me via email at <span>rigozeusjohn@gmail.com</span> or by phone at <span>09081642987</span> Connect with me on social media for more updates.</p>
    </section>

    <script>
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }
    </script>
<?php
    // Check if the user is logged in
    if(isset($_SESSION["user"]) && $_SESSION["user"] === "yes") {
        // Display the user's first name
        echo '<form action="logout.php" method="post">';
        echo '<button type="submit" class="btn btn-warning" style="padding: 12px 24px; font-size: 16px; background-color: #7289da; color: #fff; border: none; border-radius: 8px; cursor: pointer; transition: background-color 0.3s ease;">Logout</button>';
        echo '</form>';
    } else {
        echo "<a href='login.php' class='btn btn-warning'><button style='padding: 12px 24px; font-size: 16px; background-color: #7289da; color: #fff; border: none; border-radius: 8px; cursor: pointer; transition: background-color 0.3s ease;'>Login</button></a>";
    }
?>


</body>
</html>
