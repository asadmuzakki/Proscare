<?php 
require "../loginProscare/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>HomePage</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Style.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <!-- Navbar -->
    <div class="header">
        <img src="Assets\Proscare Logo.png" alt="logo">
        <ul class="nav">
            <li><a href="#"> Home </a></li>
            <li><a href="#"> Layanan Kami </a></li>
            <li><a href="#"> Tentang Kami </a></li>
        </ul>
        <ul class = "start"> 
            <button type="submit"><a href="../loginProscare/index.php"> <p> Get Started </p> </a> </button>
        </ul>
        <div class="hamburger-menu">
            <i data-feather="menu"></i>
        </div>
    </div>

    <!-- Blog -->
    <div class="blog">
        <img src="Assets\1.png" alt="Picture">

    </div>

    <!-- Benefits -->
    <div class="benefits">
        <h1> Benefits Of In-home care </h1>
        <div class="benefits-container">
            <div class="benefits-content">
                <div class="benefits-icon">
                    <img src="Assets\logo1.png" alt="Logo">
                </div>
                <div class="benefits-text">
                    <h2> Quality help at home </h2>
                    <h3>Professional caregivers offer a wide range of services from personal care and household support
                        to maintaining the safety and security of a senior with dementia.
                    </h3>
                </div>
            </div>
            <div class="benefits-content">
                <div class="benefits-icon">
                    <img src="Assets\logo2.png" alt="Logo">
                </div>
                <div class="benefits-text">
                    <h2>Respite for family caregivers</h2>
                    <h3>Hiring help at home can provide the assistance you need, even when you can’t be there yourself.
                    </h3>
                </div>
            </div>
            <div class="benefits-content">
                <div class="benefits-icon">
                    <img src="Assets\logo3.png" alt="Logo">
                </div>
                <div class="benefits-text">
                    <h2>Peace of mine</h2>
                    <h3>Compassionate in-home care not only improves quality of life, but also assures peace of mind for
                        you and
                        your aging loved one.
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Career -->
    <div class="career">
        <div class="career-container">
            <div class="career-title">
                <h1>Find a rewarding career as a caregiver
                </h1>
                <p>Local home care agencies are looking for compassionate, qualified people to help seniors age in place
                    in the comfort of their own homes
                </p>
                <div class="allContent">
                    <div class="career-content">
                        <div class="career-icon">
                            <img src="Assets/l1.png" alt="">
                        </div>
                        <div class="career-text">
                            <h3>Make a difference</h3>
                            <p>Whether providing a senior with companionship and socialization or assistance with daily
                                activities, caregivers like you become a meaningful part of a senior’s life.
                            </p>
                        </div>
                    </div>
                    <div class="career-content">
                        <div class="career-icon">
                            <img class="help" src="Assets/l2.png" alt="">
                        </div>
                        <div class="career-text">
                            <h3>Flexibility</h3>
                            <p>Families in your own community are looking for help. Whether full or part time, you
                                choose
                                when and where you work.
                            </p>
                        </div>
                    </div>
                    <div class="career-content">
                        <div class="career-icon">
                            <img src="Assets/l3.png" alt="">
                        </div>
                        <div class="career-text">

                            <h3>Your choice of job</h3>
                            <p>We make applying easy. Complete a profile with us, and we’ll connect you with all of the
                                available caregiver jobs near you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Last Content -->
    <div class="last-content">
        <div class="content-mix">
            <div class="last-text">
                <h2>How do I find a Caregiver ?</h2>
                <p>Making the commitment to hire a professional caregiver is a major decision. There is no one-size-fits
                    all approach to home care, so it's important to find a caregiver that meets your individual needs.
                    When you are ready to hire a caregiver, Caregivers.com simplifies the process by connecting you with
                    the home care agencies that are providing services near you. Our advisors are available at no charge
                    to you, and ultimately you choose the best fit for your family.
                </p>
            </div>
            <div class="last-icon">
                <img src="Assets\l5.png" alt="Logo">
            </div>
        </div>
        <div class="content-mix">
            <div class="last-icon">
                <img src="Assets\l4.png" alt="Logo">
            </div>
            <div class="last-text">
                <h2>How we can help</h2>
                <p>We understand that family caregivers are scheduling appointments, providing transportation, picking
                    up prescriptions, running errands, preparing meals, managing incontinence care, assisting with
                    bathing and dressing, and researching elder care options and respite resources—all while trying to
                    see to their own lives.

                    Trust the experience of our home care advisors to guide you through the decision-making process. Our
                    goal is to equip you with the knowledge to find the best care for your loved one.
                </p>
            </div>
        </div>
        <p class = "last">Let us know what you need by walking through the steps online in your own time- or give us a call. Our advisors can help you choose the caregiver that’s right for you and they are ready to help whenever you are available.
        </p>
    </div>
    
    <!-- Footer -->
    <footer>
        <div class="footer">
            <h3>Proscare</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nostrum soluta vel laboriosam cum
                inventore tempore? Dolores, optio. Architecto adipisci nemo reprehenderit voluptates dolorem earum
                tenetur numquam dolore quia sint.</p>
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="bottom">
            <p>copyright &copy;2023 ProsCare</p>
        </div>
    </footer>
    <script>
        feather.replace()
    </script>
    <script src="main.js"></script>
</body>

</html>