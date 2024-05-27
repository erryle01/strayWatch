<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System</title>
    <link rel="stylesheet" href="assets/plugins/fullcalendar/main.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php include("include/header.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" style="background-color: #2ecc71; border:none;color:#fff">
                    <h1>Booking System</h1>
                </div>
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/plugins/fullcalendar/main.js"></script>

    <script>
        $(function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                themeSystem: 'bootstrap',
                events: function(fetchInfo, successCallback, failureCallback) {
                    $.ajax({
                        url: 'fetch_bookings.php',
                        dataType: 'json',
                        data: {
                            month: fetchInfo.start.getMonth() + 1,
                            year: fetchInfo.start.getFullYear()
                        },
                        success: function(data) {
                            var events = [];
                            $(data).each(function() {
                                events.push({
                                    title: this.title,
                                    start: this.start,
                                    backgroundColor: this.backgroundColor,
                                    borderColor: this.borderColor,
                                    allDay: this.allDay
                                });
                            });
                            successCallback(events);
                        },
                        error: function() {
                            failureCallback();
                        }
                    });
                },
                editable: true,
                droppable: true,
                drop: function(info) {
                    if (document.getElementById('drop-remove').checked) {
                        info.draggedEl.parentNode.removeChild(info.draggedEl);
                    }
                }
            });

            calendar.render();
        });
    </script>
</body>
</html>
