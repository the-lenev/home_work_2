<html>
<head>
    <link rel="stylesheet" href="\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="\css\style.min.css">
    <script type="text/javascript" src="\js\jquery-1.12.4.js"></script>
    <script type="text/javascript" src="\bootstrap\dist\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="\js\scripts.js"></script>
</head>
<body>
    <div class="container">
        <div class="title">
            1. Выберите человека из противоположной команды <br/>
            &emsp;и количество конфет, которое вы у него хотите забрать.<br/>
            &emsp;Забрать можно только у одного человека от 1 до 3 конфет.<br/>
        </div>
        <form id="form" class="col-sm-7 text-center" action="/" method="post">
            <div class="form-group">
                <div class="col-sm-5 text-right group active">
                    <div class="form-group">
                        <div>Общее количество конфет <strong id="boys_candy"></strong></div>
                        <div class="clear"></div>
                    </div>
                        <div class="form-group">
                            <label class="col-sm-4 input-sm">
                            </label>
                            <select class="col-sm-8 input-sm" name="" disabled>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <div class="clear"></div>
                        </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Таке</button>
                    </div>
                </div>
                <div class="col-sm-5 col-sm-offset-1 text-right group disabled">
                    <div class="form-group">
                        <div>Общее количество конфет <strong id="girls_candy"></strong></div>
                        <div class="clear"></div>
                    </div>
                        <div class="form-group">
                            <label class="col-sm-4 input-sm">
                            </label>
                            <select class="col-sm-8 input-sm" name="">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <div class="clear"></div>
                        </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info" disabled="disabled">Таке</button>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="form-group text-center">
                <button type="button" class="btn btn-info restart">New game</button>
            </div>
        </form>
    </div>
</body>
</html>
