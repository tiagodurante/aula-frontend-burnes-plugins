<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Calendar</title>

    <script src="js/jquery-2.1.1.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/moment-with-locales.js" charset="utf-8"></script>
    <script src="js/bootstrap-datetimepicker.js" charset="utf-8"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.css" media="screen" title="no title">

    <script type="text/javascript">
        $(function() {
            $("#data").datetimepicker({
                locale: "pt-br",
                disabledDates: [
                    "09/14/2016"
                ]
            });

            $("#dataInicial, #dataFinal").datetimepicker({
                locale: "pt-br"
            });
            //funcao que proibe o #dataInicial de selecionar datas anteriores
            $("#dataInicial").on("dp.change", function(e) {
                $("#dataFinal").data("DateTimePicker").minDate(e.date)
            });
            $("#dataFinal").on("dp.change", function(e) {
                $("#dataInicial").data("DateTimePicker").maxDate(e.date)
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <h1>Datepicker</h1>
        <div class="form-group">
            <div class="input-group date" id="data">
                <input type="text" class="form-control" name="name">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <br>
        <h1>Check in and check out</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group date" id="dataInicial">
                        <input type="text" class="form-control" name="name">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group date" id="dataFinal">
                        <input type="text" class="form-control" name="name">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
