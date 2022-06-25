<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elevanix-Roulette</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/roulette.css')}}">
    <link rel="stylesheet" href="{{asset('assets/toaster/toastr.min.css')}}" />

    <style>
        .form-group label{
            margin-bottom: 15px;
            margin-top: 15px;
        }
    </style>

</head>
<body>


<div class="main">

    <div class="form-group" style="margin-top: 16px;">

        <div class="form-group">
            <label for="playamount" class="text-white">Please Enter Amount to Play</label>
           <input type="number" class="form-control" placeholder="Minimum Play Amount is $25" id="playamount">

        </div>
            <div class="form-group">
                <label for="num1" class="text-white">Please Enter First Number</label>
               <input type="number" class="form-control" id="num1">

            </div>
            <div class="form-group">
                <label for="num2" class="text-white label">Please Enter Second Number</label>
              <input type="number" class="form-control" id="num2">
            </div>

        <div class="form-group">
            <label for="num3" class="text-white label">Please Enter Third Number</label>
            <input type="number" class="form-control" id="num3">
        </div>

    </div>

    <button type="button" class="btn" id="spin"><span class="btn-label">Spin</span></button>


    <button type="button" class="btn btn-reset" id="reset"><span class="btn-label">New Game</span></button>

    <div class="plate" id="plate">
        <ul class="inner">
            <li class="number"><label><input type="radio" name="pit" value="32" /><span class="pit">32</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="15" /><span class="pit">15</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="19" /><span class="pit">19</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="4" /><span class="pit">4</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="21" /><span class="pit">21</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="2" /><span class="pit">2</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="25" /><span class="pit">25</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="17" /><span class="pit">17</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="34" /><span class="pit">34</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="6" /><span class="pit">6</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="27" /><span class="pit">27</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="13" /><span class="pit">13</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="36" /><span class="pit">36</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="11" /><span class="pit">11</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="30" /><span class="pit">30</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="8" /><span class="pit">8</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="23" /><span class="pit">23</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="10" /><span class="pit">10</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="5" /><span class="pit">5</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="24" /><span class="pit">24</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="16" /><span class="pit">16</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="33" /><span class="pit">33</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="1" /><span class="pit">1</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="20" /><span class="pit">20</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="14" /><span class="pit">14</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="31" /><span class="pit">31</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="9" /><span class="pit">9</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="22" /><span class="pit">22</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="18" /><span class="pit">18</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="29" /><span class="pit">29</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="7" /><span class="pit">7</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="28" /><span class="pit">28</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="12" /><span class="pit">12</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="35" /><span class="pit">35</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="3" /><span class="pit">3</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="26" /><span class="pit">26</span></label></li>
            <li class="number"><label><input type="radio" name="pit" value="0" /><span class="pit">0</span></label></li>
        </ul>
        <div class="data">
            <div class="data-inner">
                <div class="mask"></div>
                <div class="result">
                    <div class="result-number">00</div>
                    <div class="result-color">red</div>
                </div>
            </div>
        </div>
    </div>
    <div class="previous-results">
        <ol class="previous-list">
            <li class='visuallyhidden placeholder'>No results yet.</li>
        </ol>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js'></script>
<script src="{{asset('assets/toaster/toastr.min.js')}}"></script>
<script>

    class Hammer {
        constructor(myElement) {

        }

    }

    $(document).ready(function (){

    var $inner = $('.inner'),
        $spin = $('#spin'),
        $reset = $('#reset'),
        $data = $('.data'),
        $mask = $('.mask'),
        maskDefault = 'Click the Spin Button',
        timer = 9000;

    var red = [32,19,21,25,34,27,36,30,23,5,16,1,14,9,18,7,12,3];

    $reset.show();
    $spin.hide();

    $mask.text(maskDefault);

    var roulettehtml = [

    ].join('');

    $('.previous-list').append(roulettehtml);


    var i= 0;
    var numbers= [];

    $spin.on('click',function(){
        var playamount=$('#playamount').val();
        var num1=$('#num1').val();
        var num2=$('#num2').val();
        var num3=$('#num3').val();

        if(Number(playamount) >= 25){

        if (i<3){

            var randomNumber = Math.floor(Math.random() * 36),
                color = null;
            $inner.attr('data-spinto', randomNumber).find('li:nth-child('+ randomNumber +') input').prop('checked','checked');

            $reset.addClass('disabled').prop('disabled','disabled').show();

            $('.placeholder').remove();


            setTimeout(function() {
                $mask.text('No More Bets');
            }, timer/6);

            setTimeout(function() {
                $mask.text(maskDefault);
            }, timer+500);


            setTimeout(function() {

                $reset.removeClass('disabled').prop('disabled','');

                if($.inArray(randomNumber, red) !== -1)
                { color = 'red'
                }
                else
                { color = 'black'
                };

                numbers.push(randomNumber);
                $reset.hide();

                if(randomNumber == 0){color = 'green'};

                $('.result-number').text(randomNumber);
                $('.result-color').text(color);
                $('.result').css({'background-color': ''+color+''});
                $data.addClass('reveal');
                $inner.addClass('rest');

                $thisResult = '<li class="previous-result color-'+ color +'"><span class="previous-number">'+ randomNumber +'</span><span class="previous-color">'+ color +'</span></li>';
                $('.previous-list').prepend($thisResult);
            }, timer);
        }
        else {
            if (numbers.includes(Number(num1)) || numbers.includes(Number(num2))){

                if (numbers.includes(Number(num2)) || numbers.includes(Number(num3))){

                    if (numbers.includes(Number(num3)) || numbers.includes(Number(num1))){
                        var randomprize = Math.floor(Math.random() * 36);
                        var prize= 20/100*randomprize;
                        var urll = "{{url('User/rouletteaddprize/')}}/" + prize;
                        $.get(urll,function (data){
                            toastr.success(data.successmsg);
                        });
                    }
                    else{
                        $spin.hide();
                        $reset.show();

                        // var dedbalance= 35/100*25;
                        // var url="{{url('User/roulettededbalance/')}}/" + dedbalance;
                        // $.get(url,function(data){
                        //     toastr.info('sdfsd');
                        // });

                    }
                }
                else {
                    // var dedbalance= 35/100*25;
                    //     var url="{{url('User/roulettededbalance/')}}/" + dedbalance;
                    //     $.get(url,function(data){
                    //         toastr.info(data.msg);
                    //     });
                    $spin.hide();
                        $reset.show();
                   
                }
            }
            else {
                // var dedbalance= 35/100*25;
                //         var url="{{url('User/roulettededbalance/')}}/" + dedbalance;
                //         $.get(url,function(data){
                //             toastr.info(data.msg);
                //         });
                $spin.hide();
                        $reset.show();
                        var dedbalance= 35/100*Number(playamount);
                        var urll = "{{url('User/roulettededbalance/')}}/" + dedbalance;
                        $.get(urll,function (data){
                            toastr.success('1 Bet price Successfully Deducted because Atleast two numbers not matched. Only one Number Matched Please Start new Game');
                        });
            }

        }

    }
    else{
        toastr.success('Please enter minimum $35 to play...');
    }

        i++;

    });

    $reset.on('click',function(){

        $inner.attr('data-spinto','').removeClass('rest');
        $(this).hide();
        $spin.show();
        $data.removeClass('reveal');
        $('.previous-list li').remove();
        i=0;
        numbers= [];



    });

    var myElement = document.getElementById('plate');
    var mc = new Hammer(myElement);
    mc.on("swipe", function(ev) {
        if(!$reset.hasClass('disabled')){
            if($spin.is(':visible')){
                $spin.click();
            } else {
                $reset.click();
            }
        }
    });


    });

</script>

</body>
</html>
