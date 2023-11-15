<!DOCTYPE html>
<html lang="en">
<head>
    <title>OPJMS Voting Page</title>
    <link rel="stylesheet" type="text/css" href="css/vote.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
<section class="content">
    <header>
        <img src="images/logo.jpg" alt="School Logo" height="100">
        <p>OP Jindal Modern School</p>
    </header>

    <section class="house text-center">
        You are a student of <br>
        <span>kabir house</span> <br>
        Please cast your vote
    </section>

    <main>

        <!-- Side Navigation -->
        <nav>
            <button id="houseButton" onclick="openTab(event, 'house_prefect_tab')"> House Prefect: </button>
            <button id="sportsButton" onclick="openTab(event, 'sports_prefect_tab')"> Sports Prefect: </button>
        </nav>

        <!-- Main area of selecting candidates -->
        <form method="POST" action="submit">

            <!-- The House Prefect Tab -->
            <section id="house_prefect_tab">

                <!-- The Boy Prefect Half -->
                <div>
                    <h3>Boys Prefect</h3>

                    <div class="vote-area">
                        @yield('houseBoyPrefects')
                    </div>
                </div>

                <!-- The Girls Prefect Half -->
                <div>
                    <h3>Girls Prefect</h3>

                    <div class="vote-area">
                        @yield('houseGirlPrefects')
                    </div>
                </div>

            </section>

            <!-- The Sports Prefect Tab -->
            <section id="sports_prefect_tab">

                <!-- The Boy Prefect Half -->
                <div>
                    <h3>Boys Prefect</h3>

                    <div class="vote-area">
                        @yield('sportsBoyPrefect')
                    </div>
                </div>

                <!-- The Girls Prefect Half -->
                <div>
                    <h3>Girls Prefect</h3>

                    <div class="vote-area">
                        @yield('sportsGirlPrefect')
                    </div>
                </div>

            </section>

            <button id="submit" class="button">Cast Your Vote</button>

            @yield('letHouse')

        </form>

    </main>

    <aside>
        <table>

            <thead>
            <tr> <td></td> <th>Boy</th> <th>Girl</th>  </tr>
            </thead>

            <tbody>
            <tr>  <th>House Prefect:</th> <td id="house_boy">-</td> <td id="house_girl">-</td>   </tr>
            <tr>  <th>Sports Prefect:</th>  <td id="sports_boy">-</td> <td id="sports_girl">-</td>  </tr>
            </tbody>

        </table>
    </aside>
</section>

<footer>
    made by Keshav
</footer>

<script type="text/javascript" src="js/tabs and color.js"></script>

</body>
</html>
