<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css" >
    <title>Document</title>
    <style>
        body{
            background-image: url("Images/pexels-hasan-albari-1229861.jpg");
            background-size: cover;
            background-position: center;
            overflow-y: hidden;
        }
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>
<body>
<?php include 'navBar.php';?>
<div class="container d-flex justify-content-center align-items-center vh-100">
        <input id="zDayOfYear" type="hidden" value="173">
        <div class="no-print dfpLeaderboard">
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-0394138966856108" data-ad-slot="3451986312" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <form action="table.php" novalidate="novalidate">

            <div class="row d-none">
                <div class="col-5 form-group">
                    <label class="form-label" for="favorite-list">
                        <a href="#">Favorites</a>
                    </label>
                    <div class="input-group align-items-center">
                        <select id="favorite-list" class="form-control" data-favorite-subscriber="false">
                            <option></option>
                        </select>
                        <span class="ml-3 fa-icon-90pct">(<a href="#">Manage Favorites</a>)</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3">
                    <label class="form-label">
                        <a href="#">Number Set</a>
                    </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="Create.NumberSet" type="radio" value="5"> 1 to 5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="Create.NumberSet" type="radio" value="10" checked=""> 1 to 10
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="Create.NumberSet" type="radio" value="12"> 1 to 12
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="Create.NumberSet" type="radio" value="15"> 1 to 15
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <div>
                        <label class="form-label"><a href="#">Difficulty</a></label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="Create.Difficulty" type="radio" value="Easy"> Easy
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="Create.Difficulty" type="radio" value="Medium" checked=""> Medium
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="Create.Difficulty" type="radio" value="Hard"> Hard
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="Create.Difficulty" type="radio" value="Wow"> Wow
                        </label>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label class="form-label">
                            <a href="#">Options</a>
                        </label>
                        <div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" id="option-Score" value="true" type="checkbox" name="Create.Score" data-cbx-unchecked-value="false" checked=""> Name/date/score
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" id="option-Randomize" value="true" type="checkbox" name="Create.Randomize" data-cbx-unchecked-value="false"> Randomize table
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">
                            <a href="#">Fact Families</a>
                        </label>
                        <div>
                            <span class="margin-right-medium font-family-select" data-on="true">Select All</span><span class="font-family-select" data-on="false">Unselect All</span>
                        </div>
                        <div id="fact-familiies">
                            <div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family">
                                        <input class="form-check-input require-array muted-color valid" type="checkbox" name="Create.Family" value="1" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked="" aria-describedby="Create.Family-error"> <span>1 </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family">
                                        <input class="form-check-input require-array muted-color" type="checkbox" name="Create.Family" value="2" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked=""> <span>2 </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family">
                                        <input class="form-check-input require-array muted-color" type="checkbox" name="Create.Family" value="3" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked=""> <span>3 </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family">
                                        <input class="form-check-input require-array muted-color" type="checkbox" name="Create.Family" value="4" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked=""> <span>4 </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family">
                                        <input class="form-check-input require-array muted-color" type="checkbox" name="Create.Family" value="5" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked=""> <span>5 </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family">
                                        <input class="form-check-input require-array muted-color" type="checkbox" name="Create.Family" value="6" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked=""> <span>6 </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family">
                                        <input class="form-check-input require-array muted-color" type="checkbox" name="Create.Family" value="7" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked=""> <span>7 </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family">
                                        <input class="form-check-input require-array muted-color" type="checkbox" name="Create.Family" value="8" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked=""> <span>8 </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family">
                                        <input class="form-check-input require-array muted-color" type="checkbox" name="Create.Family" value="9" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked=""> <span>9 </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family">
                                        <input class="form-check-input require-array muted-color" type="checkbox" name="Create.Family" value="10" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked=""> <span>10 </span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family muted-color">
                                        <input class="form-check-input require-array muted-color" disabled="disabled" type="checkbox" name="Create.Family" value="11" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked=""> <span>11 </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family muted-color">
                                        <input class="form-check-input require-array muted-color" disabled="disabled" type="checkbox" name="Create.Family" value="12" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked=""> <span>12 </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family muted-color">
                                        <input class="form-check-input require-array muted-color" disabled="disabled" type="checkbox" name="Create.Family" value="13" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked=""> <span>13 </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family muted-color">
                                        <input class="form-check-input require-array muted-color" disabled="disabled" type="checkbox" name="Create.Family" value="14" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked=""> <span>14 </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label family muted-color">
                                        <input class="form-check-input require-array muted-color" disabled="disabled" type="checkbox" name="Create.Family" value="15" data-cbx-unchecked-ignore="true" data-cbx-disabled-ignore="true" checked=""> <span>15 </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger field-validation-valid" data-valmsg-for="Create.Family" data-valmsg-replace="true"></span>
                    </div>
                </div>
            </div>
            <div class="form-group mt-4">
                <button id="submit" type="submit" class="btn btn-primary mfc d-block d-md-inline mb-2 mb-md-0 mr-0 mr-md-2">Generate</button>
                <button id="btn-worksheet-favorite-save" type="button" class="btn mfc d-block d-md-inline mb-2 mb-md-0 mr-0 mr-md-5">Save <i class="fas fa-heart" style="color:#ff5555;"></i></button>
                <button id="btn-worksheet-reshuffle" type="button" class="btn mfc d-block d-md-inline mb-2 mb-md-0 mr-0 mr-md-2">Reshuffle</button>
                <button id="btn-worksheet-reset" type="button" class="btn mfc d-block d-md-inline mb-2 mb-md-0 mr-0 mr-md-2">Reset Form</button>
                <div id="form-worksheet-messages" class="text-success text-btn-right"></div></div>
            <input type="hidden" id="favorite-worksheet-type" value="2">
            <input type="hidden" data-formfill-force="true" data-val="true" data-val-required="The Seed field is required." id="Create_Seed" name="Create.Seed" value="7788793">
            <input type="hidden" data-val="true" data-val-required="The CreateType field is required." id="Create_CreateType" name="Create.CreateType" value="MultiplicationTableCustom">
            <input type="hidden" data-val="true" data-val-required="The WorksheetDisplayType field is required." id="Create_WorksheetDisplayType" name="Create.WorksheetDisplayType" value="Problems">
        </form>
</div>

</body>
</html>