<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Calendar</title>

    <script src="js/jquery-3.1.0.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/moment-with-locales.js" charset="utf-8"></script>
    <script src="js/fullcalendar.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/fullcalendar.min.css" media="screen" title="no title">
    <script type="text/javascript">
        $(document).ready(function() {
            $("#calendario").fullCalendar({
                locale: "pt-br",
                events: [{
                  title:"Aniversário do Paizin",
                  start:"2016-09-14",
                  color:"blue"
                }]
            });
        });
    </script>
    <style media="screen">
        .fc-left {
            text-transform: capitalize;
            color: #F00;
        }
    </style>
</head>

<body>
    <h1>Calendário</h1>
    <div class="" id="calendario">

    </div>
</body>

</html>
