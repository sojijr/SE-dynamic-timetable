<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Software Engineering 2nd Semester Timetable">
    <meta name="author" content="Soji Jr">
    <meta name="keywords" content="Timetable">

    <title>S.E 2nd SEMESTER TIMETABLE</title>

    <link href="public/css/favicon.jpg" rel="icon">
    <link href="public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="public/css/style.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading headd">
                    <h2 class="title">SOFTWARE ENGINEERING 2ND SEMESTER TIMETABLE</h2>
                </div>
                <div class="card-body">
                    <form action="timetable" method="POST">
                        <div class="form-row">
                            <div class="name">General Group</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="genGrp" required>
                                            <option value="" disabled selected>Choose Group</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Maths Group</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="mathsGrp" required>
                                            <option value="" disabled selected="selected">Choose Group</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Physics Group</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="physicsGrp" required>
                                            <option value="" disabled selected="selected">Choose Group</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btnlogin btn--pill btn--blue" type="submit" name="submit">CHECK TIMETABLE</button>
                        </div>
                    </form>
                    <div class="form-row p-t-20"></div>
                    <p align="center" class="label label--block">Copyright &copy; SOJI JR</p>
                </div>
            </div>
        </div>
    </div>

    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/select2/select2.min.js"></script>
    <script src="public/js/global.js"></script>
</body>
</html>