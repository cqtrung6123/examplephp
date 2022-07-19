<?php
?>
<html
<header>
        <meta charset="UTF-8">
        <style>
            body{
                font-family: Arial,sans-serif;
            }
            .search-box{
                width: 300px;
                position: relative;
                display: inline-block;
                font-size: 14px;
            }
            .search-box input[type="text"]{
                height: 32px;
                padding: 5px 10px;
                border: 1px solid #787171;
                font-size: 14px;
            }
            .search-box input[type="text"],.result{
                width: 100%;
                box-sizing: border-box;
            }
            .result{
                position: relative;
                z-index: 999;
                top: 100%;
                left: 0;
            }
            .result p:hover{
                background: #f2f2f2;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function (){
            $('.search-box input[type="text"]').on("keyup input",function (){

                /* get input value on change */
                var inputVal=$(this).val();
                var resultDropdown=$(this).siblings(".result");
                if (inputVal.length){
                    $.get("backend.php",{term:inputVal}).done(function (data){
                        //display the return data in browser
                        resultDropdown.html(data);
                    });
                }else {
                    resultDropdown.empty();
                }
            });
            //set search input value on click of result item
            $(document).on("click",".result p",function (){
                $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                $(this).parent(".result").empty();
            });
        });
    </script>
    </header>
    <body>
        <div class="search-box">
            <input type="text" autocomplete="off" placeholder="search student....">
            <div class="result"></div>
        </div>
    </body>
</html>