<?php 
    include_once 'header.php';
?>
        <nav>
            <header id="Sidebar">
                <div class="details">
                    <a href="#">dashboard</a>
                    <a href="#">skills</a>
                    <a href="#">about wilco</a>
                    <a href="#">contact me</a>
                    <a href="#">my cv</a>
                </div>
            </header>
        </nav>
        <section id="main">
                <?php
                    if (isset($_SESSION["useruid"])){
                        echo "<p>Welcome back " . $_SESSION["useruid"] . "</p>";
                    }
                ?>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi corrupti ad architecto saepe officia facere asperiores ex possimus sunt quaerat?Lorem ipsum dolor sit a, explicabo debitis voluptatem ullam error facere? Ipsum repudiandae delectus consequuntur eveniet, voluptatem excepturi optio ex eaque accusamus nulla hic est eius saepe deleniti odit non aliquam quod dolore </p>
            <section id="cv">
                <div class="skillsec">

                </div>
                <div class="bodysec">

                </div>
            </section>
            <section>

            </section>
        </section>

<?php
    include_once 'footer.php';
?>

</body>
<script src="script.js"></script>

</html>