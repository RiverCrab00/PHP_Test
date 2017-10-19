<?php
echo $this->set('title','党费');
echo $this->addCssFile(['/wap/microsite/home14/css/style_new.css','/wap/microsite/home14/css/swiper.min.css','/wap/microsite/home14/css/style.css', '/thirdparty/nifty/plugins/font-awesome/css/font-awesome.min.css']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        .header{
            text-align: center;
            color: white;
            background-color: red;
            padding: 10px 20px;
            overflow: hidden;
        }
        .header span{
            font-size: 18px;
        }
        .header img{
            float:left;
            height: 20px;
        }
        .content{
            font-size:16px ;
            margin: 10px auto;
            text-align: center;
        }
        .content .sel{
            padding: 10px 25px;
        }
        .content .sel .time{
            color:#a6a6a6;
        }
        .content .sel select{
            height: 36px;
            border-radius: 5px;
            text-align: center;
            border: 1px solid #D2D2D2;
            background:url("/wap/bucea/images/arrow.png") no-repeat right center;
            background-size: 15px;
            appearance:none;
            -moz-appearance: none;
            -webkit-appearance: none;
        }
        .content button{
            background-color:red;
            width: 300px;
            margin: 30px auto;
            border-radius: 6px;
        }
        .content button:focus{
            background: red;
        }
        #year{
            width: 112px;
            padding-left:30px;
            background-position-x: 85px;
        }
        #month{
            width: 77px;
            padding-left:25px;
            background-position-x: 52px;
        }
        ul,li{
            list-style: none;
            margin: 0px;
            padding: 0px;
        }
        .content div ul{
            padding: 10px;
        }
        .content div ul li{
            overflow: hidden;
            padding: 10px 5px;
            margin-bottom: 20px ;
            border-bottom:1px solid #f0f0f0 ;
        }
        .content div ul li .left{
            color: #a6a6a6;
            float: left;
        }
        .content div ul li .right{
            float: right;
        }
        .content hr{
            height: 10px;
            background: #f0f0f0;
            margin: 0px;
        }
        .info{
            position: relative;
        }
        .info img{
            position: absolute;
            width: 120px;
            left: 135px;
            top: 40px;
        }
    </style>
    <link href="http://www.zhang.com/Home/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://www.zhang.com/Home/js/bootstrap.min.js"></script>
    <link href="http://www.zhang.com/Home/css/buttons.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class='header'>
    <a href="www.baidu.com"><img src="/wap/bucea/images/left.png" alt=""></a><span>党费查询</span>
</div>
<div class="content">
    <div class="sel">
        时间&emsp;&emsp;
        <select name="year" id="year">
            <option value="">2017</option>
            <option value="">2016</option>
            <option value="">2015</option>
        </select>
        <span class="time">年</span>&emsp;
        <select name="month" id="month">
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
            <option value="">5</option>
            <option value="">6</option>
            <option value="">7</option>
            <option value="">8</option>
            <option value="">9</option>
            <option value="" selected>10</option>
            <option value="">11</option>
            <option value="">12</option>
        </select>
        <span class="time">月</span>
    </div>
    <button type="button" class="button button-caution button-rounded">
        查&emsp;询
    </button>
    <hr>
    <div class="info">
        <img src="/wap/bucea/images/df.png" alt="">
        <ul>
            <li><span class="left">姓名</span><span class="right">John</span></li>
            <li><span class="left">党费</span><span class="right">1200</span></li>
            <li><span class="left">时间</span><span class="right">2017-10</span></li>
        </ul>
    </div>
</div>
</body>
</html>
<?php $this->beginBlock('jsText', 'append'); ?>
<script>
    $(function(){
        var myDate=new Date();
        var year=myDate.getFullYear();
        var option='';
        var i=2016;//从什么时候开始,修改即可
        for(i;i<=year;i++){
            if(i==year){
                option+='<option selected value="'+i+'">'+i+'</option>';
            }else{
                option+='<option value="'+i+'">'+i+'</option>';
            }
        }
        $('#year').html(option);
        var month=myDate.getMonth()+1;//js获取月份为0-11(0代表一月)
        var sel_year=$('#year option:selected').text();
        op(sel_year,year,month);
        console.log('当前时间'+myDate.toLocaleDateString());//当前日期
        $('#year').change(function(){
            var sel_year=$(this).val();
            op(sel_year,year,month);
        })
    })
    function op(sel_year,year,month){
        if(sel_year==year){
            var option='';
            for(var j=1;j<=month;j++){
                if(j==month){
                    option+='<option selected value="'+j+'">'+j+'</option>';
                }else{
                    option+='<option value="'+j+'">'+j+'</option>';
                }
            }
            $('#month').html(option);
        }else{
            var option='';
            for(var j=1;j<=12;j++){
                option+='<option value="'+j+'">'+j+'</option>';
            }
            $('#month').html(option);
        }
    }
    $('.content button').blur(function(){
        $(this).css('background-color','red');
    })
</script>
<?php $this->endBlock(); ?>
