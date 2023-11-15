<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script type="text/javascript">
        function validateInput(argument) {
            const e = event || window.event;
            const key = e.keyCode || e.which;
            if( key === 69 || (key >=107  && key <= 110) || (key >= 187 && key <= 190) )
                e.preventDefault();
        }
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

<header>
    <img src="images/logo.jpg" alt="School logo" height="100">
    <div>op jindal modern school</div>
</header>


<main>

    <form action="vote" method="POST">

        <p id="errPara">
        </p>

        <section id="main">

            <!-- Admission No. Field -->
            <div class="container">

                <div class="label">
                    <label for="admno_field"> Insert Admission No. : </label>
                </div>

                <div class="input-text-field">
                    <input id="admno_field" type="number" name="admno" placeholder=" " autocomplete="off" min="0" max="65536" onKeyDown="validateInput()" required />
                    <label for="admno_field" class="tooltip">admno</label>
                    <span class="underline"></span>
                </div>

            </div>

            <!-- First Name Field -->
            <div class="container">

                <div class="label">
                    <label for="name_field">First Name:</label>
                </div>

                <div class="input-text-field">
                    <input id="name_field" type="text" name="first_name" placeholder=" " autocomplete="off" title="Only english alphabets are accepted. The name should not be longer than 64 characters" pattern="[a-zA-Z]{1,64}" required />
                    <label for="name_field" class="tooltip">First Name</label>
                    <div class="underline"></div>
                </div>

            </div>

            <!-- Class & Section Field -->
            <div class="container">

                <div class="label">
                    <label for="select-class">Class </label>& <label for="select-section">Section</label>
                </div>

                <div class="input-field">
                    <select id="select-class" name="class" required>
                        <option value="" selected>-</option>
                        <option value="1">I</option>
                        <option value="2">II</option>
                        <option value="3">III</option>
                        <option value="4">IV</option>
                        <option value="5">V</option>
                        <option value="6">VI</option>
                        <option value="7">VII</option>
                        <option value="8">VIII</option>
                        <option value="9">IX</option>
                        <option value="10">X</option>
                        <option value="11">XI</option>
                        <option value="12">XII</option>
                    </select>

                    <select id="select-section" name="section" required>
                        <option value="" selected>-</option>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                        <option value="e">E</option>
                        <option value="f">F</option>
                        <option value="g">G</option>
                        <option value="h">H</option>
                        <option value="j">J</option>
                        <option value="k">K</option>
                        <option value="l">L</option>
                        <option value="m">M</option>
                    </select>
                </div>

            </div>

        </section>

        <input type="submit" class="button" value="Go To Voting Page">

    </form>

</main>


<footer>
    Made by Keshav
</footer>

<script type="text/javascript" src="js/errShow.js"></script>

</body>
</html>
