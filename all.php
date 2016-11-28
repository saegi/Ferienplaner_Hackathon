<?php

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Willkommen</title>
    </head>

    <body>
        <div class="container">
            <div class="row row-centered">
                <div class="col-md-12">
                    <h1>An welchen Wochentagen soll die Aktivität stattfinden?</h1>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-12">
                    <label>
                        <input type="checkbox" value="1" name="Mo">
                        <b>Mo</b>
                    </label>
                    <label>
                        <input type="checkbox" value="2" name="Di">
                        <b>Di</b>
                    </label>
                    <label>
                        <input type="checkbox" value="3" name="Mi">
                        <b>Mi</b>
                    </label>
                    <label>
                        <input type="checkbox" value="4" name="Do">
                        <b>Do</b>
                    </label>
                    <label>
                        <input type="checkbox" value="5" name="Fr">
                        <b>Fr</b>
                    </label>
                    <label>
                        <input type="checkbox" value="6" name="Sa">
                        <b>Sa</b>
                    </label>
                    <label>
                        <input type="checkbox" value="7" name="So">
                        <b>So</b>
                    </label>
                </div>
            </div>
            <br>
            <div class="row row-centered">
                <div class="col-md-12">
                    <h1>Auf was für eine Aktivität haben sie Lust</h1>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-12">
                    <label>
                        <input type="checkbox" value="1" name="Natur">
                        <b>Natur</b>
                    </label>
                    <label>
                        <input type="checkbox" value="2" name="Sport">
                        <b>Sport</b>
                    </label>
                    <label>
                        <input type="checkbox" value="3" name="Wellness">
                        <b>Wellness</b>
                    </label>
                    <label>
                        <input type="checkbox" value="3" name="Kultur">
                        <b>Kultur</b>
                    </label>
                    <label>
                        <input type="checkbox" value="3" name="Unterhaltung">
                        <b>Unterhaltung</b>
                    </label>
                </div>
            </div>

            <div class="row row-centered">
                <div class="col-md-12">
                    <h1>Wer soll dabei sein?</h1>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-4">
                    <img src="http://image.flaticon.com/icons/svg/43/43241.svg" alt="Bild Kind" width="200px">
                </div>
                <div class="col-md-4">
                    <img src="http://image.flaticon.com/icons/png/512/10/10522.png" alt="Bild Erwachsener" width="200px">
                </div>
                <div class="col-md-4">
                    <img src="http://image.flaticon.com/icons/png/512/27/27445.png" alt="Bild Senior" width="200px">
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-4">
                    <input type="number">
                </div>
                <div class="col-md-4">
                    <input type="number">
                </div>
                <div class="col-md-4">
                    <input type="number">
                </div>
            </div>

            <div class="row row-centered">
                <div class="col-md-12">
                    <h1>Budget</h1>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-12">
                    <div class="text_input">
                        <p>Maximales Budget pro Person</p>
                        <input type="range" name="zahlen" id="regler" min="0" max="250" value="0" step="5" onchange="showValue(this.value), wechsel()" />

                        <span id="kosten">0</span>

                        <script type="text/javascript">
                            function showValue(newValue) {
                                document.getElementById("kosten").innerHTML = newValue;
                            }
                        </script>

                        <article id="kosten_rechts">
                            <p>CHF</p>
                        </article>
                    </div>
                </div>
            </div>





            <div class="row row-centered">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <a href="index.php" target="_self">
                        <button type="button" class="btn btn-default">Home</button>
                </div>
                <div class="col-md-4">
                    <a href="categories.php" target="_self">
                        <button type="button" class="btn btn-default">Weiter</button>
                </div>
            </div>
        </div>



        <!--jquery-->
        <script src="http://code.jquery.com/jquery-latest.js"></script>

        <!-- bootstrap.min.css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- bootstrap.min.js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!--eigenes css-->
        <link rel="stylesheet" href="css/css.css" stylesheet.css "">


    </body>

    </html>