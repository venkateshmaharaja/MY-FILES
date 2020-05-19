<%-- 
    Document   : 1st_page
    Created on : 19 May, 2020, 4:19:27 PM
    Author     : AV-IT-PC560
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <style>
            
            .main_div{
                width: 100%;
                height: auto;
                margin-top: 0px;
            }
            .sub_div{
                width: 80%;
                margin-top: 0%;
                margin-left: auto;
                margin-right: auto;
            }

            h1 {
                font-weight: normal;
            }

            li {
                display: inline-block;
                font-size: 200%;
                list-style-type: none;
                padding: 1%;;
                text-transform: uppercase;
            }

            li span {
                display: block;
                font-size: 150%;
            }

            /* general styling */
            html, body {
                height: 100%;
                margin: 0;
            }

            body {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                background-color: #ffd54f;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                font-family: -apple-system, 
                    BlinkMacSystemFont, 
                    "Segoe UI", 
                    Roboto, 
                    Oxygen-Sans, 
                    Ubuntu, 
                    Cantarell, 
                    "Helvetica Neue", 
                    sans-serif;
            }

            .container {
                color: #333;
                margin: 0 auto;
                /*padding: 5%;*/
                text-align: center;
            }
            img{
                border-radius: 50%;
                width: 20%;
                height: 20%;
                margin-top: 5%;
                margin-left: 40%;
                
            }
            
        </style>
        <script>
            const second = 1000,
                    minute = second * 60,
                    hour = minute * 60,
                    day = hour * 24;

            let countDown = new Date('May 26, 2020 00:00:00').getTime(),
                    x = setInterval(function () {

                        let now = new Date().getTime(),
                                distance = countDown - now;

                        document.getElementById('days').innerText = Math.floor(distance / (day)),
                                document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                                document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                                document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

                    }, second)
        </script>
    </head>
    <body>
        <div class="main_div">

            <div class="sub_div">
                <img src="image/testimonial-4.jpg">
            </div>

            <div class="container">
                <h1 style="font-size: 82px;">&#10084;</h1>
                <h1>Countdown to <span style="color:orangered ;font-weight: bolder;">&#10084; Mine'S &#10084;</span> birthday:</h1>
                <ul>
                    <li><span id="days"></span>days</li>
                    <li><span id="hours"></span>Hours</li>
                    <li><span id="minutes"></span>Minutes</li>
                    <li><span id="seconds"></span>Seconds</li>
                </ul>
            </div>
        </div>
    </body>
</html>
