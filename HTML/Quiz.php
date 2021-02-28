<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer1 = $_POST['question-1'];
    $answer2 = $_POST['question-2'];
    $answer3 = $_POST['question-3'];
    $answer4 = $_POST['question-4'];
    $answer5 = $_POST['question-5'];
    $totalCorrect = 0;
    
    if ($answer1 == "B") {
        $totalCorrect++;
    }
    if ($answer2 == "A") {
        $totalCorrect++;
    }
    if ($answer3 == "C") {
        $totalCorrect++;
    }
    if ($answer4 == "A") {
        $totalCorrect++;
    }
    if ($answer5 == "C") {
        $totalCorrect++;
    }
}
?>
        
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
        <meta name="description" content="Free web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="../CSS/Naslovna.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/form.css" rel="stylesheet" type="text/css"/>
        
        <title>
           CUBES ŠKOLA - Grupa QA6
        </title>
        
        <link href="../FOTO/logo.png"  rel="shortcut icon" type="image/x-icon">
</head>


<body>
    <!-- Header -->
    <header>
        <a href="https://cubes.edu.rs/" target="_blank"> <img src="../FOTO/cubes-logo.png" width="200" height="100" title="cubes.edu.rs"> </a>
    </header>
    
    <!-- Navigation Bar --> 
    <nav>
        <div class="container">
            <a href="../HTML/index.html">
            Naslovna
            </a>
            <a href="../HTML/Studenti.html">
            Studenti
            </a>
            <a href="../HTML/Lekcije.html">
            Lekcije
            </a>
            <a href="Quiz.php">
            Kviz
            </a>
        </div>
    </nav>
           
        <div class="container">
            <aside style="background-color: whitesmoke">
                <h2>Veštine:</h2>
                <p class="skill">Web basics</p>
                <p class="skill">HTML</p>
                <p class="skill">CSS</p>
                <p class="skill">JS</p>
                
             <br> <br>
                <h2 style="text-align: center;">Logo grupe</h2>
                <img src="../FOTO/QA-logo.png" style="width: 100%" height="150" title="cubes.edu.rs"> 
        </aside>
            <section>
                             
                <h1>Kviz znanja</h1>
                <br>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<div class='result'>$totalCorrect / 5 TAČNIH ODGOVORA!</div>";
            
        } else 
        
        { ?>
                
                <form method="POST" action="Quiz.php">
              <fieldset style="border-style: dashed;border-color: #33ccff;">
                                  
                <h3>1.CSS je:</h3>
                    <input type="radio" name="question-1" id="q11" value="A" checked><label for="q11">A) Computer Styled Sections</label><br>
                    <input type="radio" name="question-1" id="q12" value="B"><label for="q12">B) Cascading Styled Sheets</label><br>
                    <input type="radio" name="question-1" id="q13" value="C"><label for="q13">C) Crazy Solid Shapes</label><br>
                    <input type="radio" name="question-1" id="q14" value="D"><label for="q14">D) None of the above</label>
              
                    <br>
                               
                <h3>2.Šta nije tačno za GET metodu?</h3>
                  <input type="radio" name="question-2" id="q21" value="A" checked><label for="q21">A) Podaci nisu prikazani u URL-u</label><br>
                  <input type="radio" name="question-2" id="q22" value="B"><label for="q22">B) Može da se bookmark-uje</label><br>
                  <input type="radio" name="question-2" id="q23" value="C"><label for="q23">C) Koristi se za dohvatanje podataka (ne i menjanje)</label><br>
                  <input type="radio" name="question-2" id="q24" value="D"><label for="q24">D) Ostaje u istoriji pretraživača</label>
               
                  <br> 
                                
                <h3>3.Šta znači skraćenica SEO?</h3>
                  <input type="radio" name="question-3" id="q31" value="A" checked><label for="q31">A) Secret Enterprise Organizations</label><br>
                  <input type="radio" name="question-3" id="q32" value="B"><label for="q32">B) Special Endowment Opportunity</label><br>
                  <input type="radio" name="question-3" id="q33" value="C"><label for="q33">C) Search Engine Optimization</label><br>
                  <input type="radio" name="question-3" id="q34" value="D"><label for="q34">D) Seals End Olives</label>
                
                  <br>
                              
                <h3>4.Greška 404 je:</h3>
                  <input type="radio" name="question-4" id="q41" value="A" checked><label for="q41">A) HTTP Status Code koji označava da stranica nije pronađena</label><br>
                  <input type="radio" name="question-4" id="q42" value="B"><label for="q42">B) Način dizajniranja pojedinih stranica</label><br>
                  <input type="radio" name="question-4" id="q43" value="C"><label for="q43">C) Signal da programer nije na poslu</label><br>
                  <input type="radio" name="question-4" id="q44" value="D"><label for="q44">D) Sve navedeno</label>
                
                  <br> 
                               
                <h3>5.Osnovne 3 tehnologije u FrontEnd-u su:</h3>
                  <input type="radio" name="question-5" id="q51" value="A" checked><label for="q51">A) HTML, jQuery, PHP</label><br>
                  <input type="radio" name="question-5" id="q52" value="B"><label for="q52">B) CSS, JS, Ruby</label><br>
                  <input type="radio" name="question-5" id="q53" value="C"><label for="q53">C) HTML, CSS, JS</label><br>
                  <input type="radio" name="question-5" id="q54" value="D"><label for="q54">D) HTML, CSS, PHP</label>
                
                  <br> <br>
                
                <input class="button" type="submit" value="Završi Kviz">
                
              </fieldset>
              </form> 
        <?php
        }     
        ?>
            </section>
        </div>

        <!-- Footer -->
    <footer>
        <h2>QA kurs 2020 - Grupa QA6 </h2>
        <p>Cubes škola je mesto Vaših prvih koraka u IT karijeri. </p>
        
        <a href="https://www.facebook.com/CubesSchool/" target="_blank"> <img src="../FOTO/fb-foto.png" alt="Facebook" width="30" height="30"> </a>
        <a href="https://www.instagram.com/cubesschool/" target="_blank"> <img src="../FOTO/instagram-foto.jpg" alt="Instagram" width="30" height="30"> </a>
        <a href="https://www.linkedin.com/company/cubes-doo/" target="_blank"> <img src="../FOTO/linkedin-foto.jpg" alt="Linkedin" width="30" height="30"> </a>
  
        
        <hr>
    <div>
        Copyright © Sva prava su zadržana.
    </div>
        
    </footer>

  </body>
</html>
