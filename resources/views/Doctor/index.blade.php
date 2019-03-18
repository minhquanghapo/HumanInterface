<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <link href='{{asset('css/fullcalendar.min.css')}}' rel='stylesheet' />
    <link href='{{asset('css/fullcalendar.print.min.css')}}' rel='stylesheet' media='print' />
    <script src='{{asset('js/moment.min.js')}}'></script>
    <script src='{{asset('js/jquery.min.js')}}'></script>
    <script src='{{asset('js/fullcalendar.min.js')}}'></script>
    <script>

        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: '2019-03-12',
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                        title: 'Họp cả ngày',
                        start: '2019-03-18'
                    },
                    {
                        title: 'Đi công tác',
                        start: '2019-03-07',
                        end: '2019-03-10'
                    },
                    // {
                    //     id: 999,
                    //     title: 'Repeating Event',
                    //     start: '2019-03-09T16:00:00'
                    // },
                    {
                        title: 'Dự hội thảo',
                        start: '2019-03-11',
                        end: '2019-03-13'
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-12T10:30:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-19T11:00:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-19T13:00:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-19T15:00:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-19T15:30:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-19T16:00:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-20T8:30:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-20T10:00:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-22T9:00:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-22T13:30:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-23T14:00:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-23T14:30:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-25T8:00:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-25T10:30:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-25T10:30:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-27T13:30:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-27T15:30:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-30T8:30:00',
                    },
                    {
                        title: 'ca khám',
                        start: '2019-03-30T10:30:00',
                    },
                ]
            });

        });

    </script>
    <style>

        body {
            margin: 40px 10px;
            padding: 0;
            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }

    </style>
</head>
<body>
<div id='calendar'></div>

</body>
</html>
