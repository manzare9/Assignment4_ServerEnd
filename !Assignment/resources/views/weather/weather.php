<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <link rel="stylesheet" type="text/css" href="m.css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Weather</title>
<style type="text/css">
/* CSS goes here */
#wxWrap {
    width: 300px;
    height: 1000%;
    background: #EEE; /* Old browsers */
    background: -moz-linear-gradient(top, rgba(240,240,240,1) 0%, rgba(224,224,224,1) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,240,240,1)), color-stop(100%,rgba(224,224,224,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, rgba(240,240,240,1) 0%,rgba(224,224,224,1) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, rgba(240,240,240,1) 0%,rgba(224,224,224,1) 100%); /* Opera11.10+ */
    background: -ms-linear-gradient(top, rgba(240,240,240,1) 0%,rgba(224,224,224,1) 100%); /* IE10+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f0f0', endColorstr='#e0e0e0',GradientType=0 ); /* IE6-9 */
    background: linear-gradient(top, rgba(240,240,240,1) 0%,rgba(224,224,224,1) 100%); /* W3C */
    padding: 2px 13px 2px 11px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 40px;
}
#wxIntro {
    display: inline-block;
    font: 14px/20px Arial,Verdana,sans-serif;
    color: #666;
    vertical-align: bottom;
    padding-top: 50px;
}
#wxIcon {
    display: inline-block;
    width: 61px;
    height: 34px;
    margin: 2px 0 -1px 1px;
    overflow: hidden;
    
}
#wxIcon2 {
    display: inline-block;
    width: 70px;
    height: 70px;
    margin: 1px 6px 0 8px;
    overflow: hidden;
}
#wxTemp {
    display: inline-block;
    font: 20px/28px Arial,Verdana,sans-serif;
    color: #333;
    vertical-align: top;
    padding-top: 5px;
    margin-left: 0;
}

body
{
    background: url(bg.jpg);

}
</style>

</head>

<body>

    <div class="codrops-top clearfix">
            <h1><a id = "link-index" href = "../index1.html">Back To Home Page</h1></a>
        </div>
        

<div id="wxWrap">
    <span id="wxIntro">
        Currently in Islamabad, Pakistan: 
    </span>
    <span id="wxIcon2"></span>
    <span id="wxTemp"></span>
</div>  



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript">
// javascript will go here
$(function(){

    // Specify the ZIP/location code and units (f or c)
    var loc = '10001'; // or e.g. SPXX0050
    var u = 'f';

    var query = "SELECT item.condition FROM weather.forecast WHERE location='" + loc + "' AND u='" + u + "'";
    var cacheBuster = Math.floor((new Date().getTime()) / 1200 / 1000);
    var url = 'http://query.yahooapis.com/v1/public/yql?q=' + encodeURIComponent(query) + '&format=json&_nocache=' + cacheBuster;

    window['wxCallback'] = function(data) {
        var info = data.query.results.channel.item.condition;
        $('#wxIcon').css({
            backgroundPosition: '-' + (61 * info.code) + 'px 0'
        }).attr({
            title: info.text
        });
        $('#wxIcon2').append('<img src="http://l.yimg.com/a/i/us/we/52/' + info.code + '.gif" width="34" height="34" title="' + info.text + '" />');
        $('#wxTemp').html(info.temp + '&deg;' + (u.toUpperCase()));
    };

    $.ajax({
        url: url,
        dataType: 'jsonp',
        cache: true,
        jsonpCallback: 'wxCallback'
    });
    
});
</script>
</body>
</html>
