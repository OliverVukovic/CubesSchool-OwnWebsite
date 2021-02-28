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
        <title>CubesQA | Naslovna</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <style>
            .result {
                color: blue;
                font-size: 30px;
            }
            
        </style>
    </head>
    <body>
        <!-- Header -->
        <header>
            <img src="images/logo.png" alt="Cubes School Logo"/>
        </header>

        <!-- Navigation Bar -->
        <nav>
            <div class="container">
                <a href="index.php">Naslovna</a>
                <a href="students.html">Studenti</a>
                <a href="lessons.html">Lekcije</a>
                <a href="quiz.php">Kviz</a>
            </div>
        </nav>

        <div class="container">
            <aside>
                <h2>Veštine:</h2>
                <p id="jedan" class= "skill">Web basics</p>
                <p id="dva" class="skill">HTML</p>
                <p id="tri"class="skill">CSS</p>
                <p id="cetiri"class="skill">JS</p>

            </aside>
            <section>
                <h1>Kviz znanja</h1>
                    
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        echo "<div class='result'>$totalCorrect / 5 tačnih</div>";
                        
                        
                    } else 
                        
                    { ?>
                
                    <!--Ovde se piše HTML-->
                    
                        <form style="border:1px dashed blue; padding:130px; margin:30px;">
                            <label> <b>CSS JE ?</b></label><br><br>
                            <input type="radio" name="question-1" value="A" checked> A) Computer Styled Sections <br>
                            <input type="radio" name="question-1" value="B" checked> B) Cascading Styled Sheets <br>
                            <input type="radio" name="question-1" value="C" checked> C) Crazy Solid Shapes <br>
                            <input type="radio" name="question-1" value="D" checked> D) None of the above <br>
                                  <br><br>  
                            <label> <b>Za GET metodu?</b></label><br><br>
                            <input type="radio" name="question-2" value="A" checked> A) Podaci nisu prikazani u URL-u <br>
                            <input type="radio" name="question-2" value="B" checked> B) Može da se bookmark-uje<br>
                            <input type="radio" name="question-2" value="C" checked> C) Koristi se za dohvatanje podataka (ne i menjanje) <br>
                            <input type="radio" name="question-2" value="D" checked> D) Ostaje u istoriji pretraživača<br>
                                   <br><br>
                            <label><b>Šta znači skraćenica SEO?</b></label><br><br>
                            <input type="radio" name="question-3" value="A" checked> A) Secret Enterprise Organizations<br>
                            <input type="radio" name="question-3" value="B" checked> B) Special Endowment Opportunity<br>
                            <input type="radio" name="question-3" value="C" checked> C) Search Engine Optimization<br>
                            <input type="radio" name="question-3" value="D" checked> D) Seals End Olives<br>
                                <br><br>
                            <label><b>Greška 404 je?</b></label><br><br>
                            <input type="radio" name="question-4" value="A" checked> A) HTTP Status Code koji označava da stranica nije pronađena<br>
                            <input type="radio" name="question-4" value="B" checked> B) Način dizajniranja pojedinih stranica<br>
                            <input type="radio" name="question-4" value="C" checked> C) Signal da programer nije na poslu<br>
                            <input type="radio" name="question-4" value="D" checked> D) Sve navedeno<br>
                                <br><br>
                            <label><b>Osnovne 3 tehnologije u FrontEnd-u su?</b></label><br><br>
                            <input type="radio" name="question-5" value="A" checked> A) HTML, jQuery, PHP<br>
                            <input type="radio" name="question-5" value="B" checked> B) CSS, JS, Ruby<br>
                            <input type="radio" name="question-5" value="C" checked> C) HTML, CSS, JS<br>
                            <input type="radio" name="question-5" value="D" checked> D) HTML, CSS, PHP<br>
                            <br>
                            <input style="background-color:#17b9e6; margin:0 25%;" type="submit" formmethod="post" value="zavrsi kviz">

                        </form>
                        
                    <?php
                }
                ?>
                    <div clas="result"></div>

            </section>
        </div>

        <!-- Footer -->
        <footer>
            <h2>QA kurs 2019</h2>
            <p>Cubes škola je mesto gde ćete napraviti Vaše prve korake u IT karijeri.</p>
        </footer>

    </body>
</html>


