# daterangepicker
bootstrap下的一个时间控件，不支持秒的选择，支持单时间及时间区间选择 参考 http://www.daterangepicker.com/

## 设置项

* startDate 日期对象,日期范围选择器初始化开始时间
* endDate 日期对象,日期范围选择器初始化结束时间
* minDate 日期对象,能选择的最小的时间
* maxDate 日期对象,能选择的最大的时间
* dateLimit moment对象,日期范围选择器开始截止日期做大间隔
* showDropdowns 布尔值,是否展示年,月下拉框
* showWeekNumbers 布尔值,是否展示一年中第几周
* timePicker 布尔值,是否允许选择带时间的日期
* timePickerIncrement 数字,分钟递增数
* timePicker12Hour 布尔值,是否用12小时制显示小时
* singleDatePicker 布尔值,是否用单日历选择，如果是单日历选择，回调函数中的start，end会是同一个值
* opens 字符串，日期控件打开方式left，right
* format 字符串，日期格式化字符串，moment对象使用
* separator 字符串，开始截止日期分隔符 
* ranges 对象，预先设置一些供选择的快捷选择项，键名是显示的标签，键值是一个数组，包含两个日期对象moment
* locale 对象，自定义一些按钮选项的显示标签
* ...

## 方法

* setStartDate 设置开始时间
* setEndDate 设置结束时间

## 事件

* show.daterangepicker 选择器打开时触发
* hide.daterangepicker 选择器关闭时触发
* showCalendar.daterangepicker 选择器日历打开时触发
* hideCalendar.daterangepicker 选择器日历关闭时触发
* apply.daterangepicker 应用按钮被点击或预先定义的快捷选择项被选择时触发
* cancel.daterangepicker 取消按钮被点击时触发

## 样例截图
![image](https://github.com/yantianpi/tools/raw/master/tools/datepicker/1.png)
![image](https://github.com/yantianpi/tools/raw/master/tools/datepicker/2.png)
![image](https://github.com/yantianpi/tools/raw/master/tools/datepicker/3.png)
![image](https://github.com/yantianpi/tools/raw/master/tools/datepicker/4.png)
![image](https://github.com/yantianpi/tools/raw/master/tools/datepicker/5.png)
