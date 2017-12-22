<!DOCUTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>datepicker</title>
    <link href="/css/beyond.min.css" rel="stylesheet" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <style>
        .panel-body {
            height: 100%;
        }
        #rangeTime {
            min-width: 31rem;
        }
        .daterangepicker select.hourselect, .daterangepicker select.minuteselect {
            width: 65px;
        }
    </style>
</head>
<body>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            date
        </h3>
    </div>
    <div class="panel-body">
        <form>
            <div class="form-group">
                <label>
                     Simple Date
                    <input type="text" class="form-control" placeholder="Y-m-d" value="" id="simpleDate" />
                </label>
            </div>
            <div class="form-group">
                <label>
                    Range Date
                    <input type="text" class="form-control" placeholder="Y-m-d ~ Y-m-d" value="" id="rangeDate"/>
                </label>
            </div>
            <div class="form-group">
                <label>
                    Simple Time
                    <input type="text" class="form-control" placeholder="Y-m-d H:i:s" value=""  id="simpleTime"/>
                </label>
            </div>
            <div class="form-group">
                <label>
                    Range Time
                    <input type="text" class="form-control" placeholder="Y-m-d H:i:s ~ Y-m-d H:i:s" value=""  id="rangeTime"/>
                </label>
            </div>
        </form>
    </div>
</div>
<footer>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/moment.js"></script>
    <script src="/js/daterangepicker.js"></script>
    <script>
        $('#simpleDate').daterangepicker({
            format: 'YYYY-MM-DD',
            endDate: new Date(),
            maxDate:new Date(),
            showDropdowns : true,
            timePicker : false,
            singleDatePicker : true,
            locale:{
                applyLabel: '确认',
                cancelLabel: '取消',
                fromLabel: '从',
                toLabel: '到',
                weekLabel: 'W',
                customRangeLabel: 'Custom Range',
                daysOfWeek:["日","一","二","三","四","五","六"],
                monthNames: ["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
            },
            opens : 'right',
        }, function (start, end, label) {
            $('#simpleDate').val(start.format('YYYY-MM-DD'));
        });
        $('#rangeDate').daterangepicker({
            format: 'YYYY-MM-DD',
            endDate: new Date(),
            maxDate:new Date(),
            showDropdowns : true,
            timePicker : false,
            locale:{
                applyLabel: '确认',
                cancelLabel: '取消',
                fromLabel: '从',
                toLabel: '到',
                weekLabel: 'W',
                customRangeLabel: 'Custom Range',
                daysOfWeek:["日","一","二","三","四","五","六"],
                monthNames: ["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
            },
            ranges : {
                '最近1小时': [moment().subtract('hours',1), moment()],
                '今日': [moment().startOf('day'), moment()],
                '昨日': [moment().subtract('days', 1).startOf('day'), moment().subtract('days', 1).endOf('day')],
                '最近7日': [moment().subtract('days', 6), moment()],
                '最近30日': [moment().subtract('days', 29), moment()],
                '这个月': [moment().startOf('month'), moment().endOf('month')],
                '上个月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                '今年': [moment().startOf('year'), moment()],
                '去年': [moment().subtract('year', 1).startOf('year'), moment().subtract('year', 1).endOf('year')],
            },
            opens : 'right',
        }, function (start, end, label) {
            $('#rangeDate').val(start.format('YYYY-MM-DD') + ' ~ ' + end.format('YYYY-MM-DD'));
        });
        $('#simpleTime').daterangepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            endDate: new Date(),
            maxDate:new Date(),
            showDropdowns : true,
            timePicker : true,
            timePickerIncrement : 1,
            timePicker12Hour : false,
            singleDatePicker : true,
            locale:{
                applyLabel: '确认',
                cancelLabel: '取消',
                fromLabel: '从',
                toLabel: '到',
                weekLabel: 'W',
                customRangeLabel: 'Custom Range',
                daysOfWeek:["日","一","二","三","四","五","六"],
                monthNames: ["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
            },
            opens : 'right',
        }, function (start, end, label) {
            $('#simpleTime').val(start.format('YYYY-MM-DD HH:mm:ss'));
        });
        $('#rangeTime').daterangepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            endDate: new Date(),
            maxDate:new Date(),
            showDropdowns : true,
            timePicker : true,
            timePickerIncrement : 1,
            timePicker12Hour : false,
            locale:{
                applyLabel: '确认',
                cancelLabel: '取消',
                fromLabel: '从',
                toLabel: '到',
                weekLabel: 'W',
                customRangeLabel: 'Custom Range',
                daysOfWeek:["日","一","二","三","四","五","六"],
                monthNames: ["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
            },
            ranges : {
                '最近1小时': [moment().subtract('hours',1), moment()],
                '今日': [moment().startOf('day'), moment()],
                '昨日': [moment().subtract('days', 1).startOf('day'), moment().subtract('days', 1).endOf('day')],
                '最近7日': [moment().subtract('days', 6), moment()],
                '最近30日': [moment().subtract('days', 29), moment()],
                '这个月': [moment().startOf('month'), moment().endOf('month')],
                '上个月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                '今年': [moment().startOf('year'), moment()],
                '去年': [moment().subtract('year', 1).startOf('year'), moment().subtract('year', 1).endOf('year')],
            },
            opens : 'right',
        }, function (start, end, label) {
            $('#rangeTime').val(start.format('YYYY-MM-DD HH:mm:ss') + ' ~ ' + end.format('YYYY-MM-DD HH:mm:ss'));
        });
    </script>
</footer>
</body>
</html>