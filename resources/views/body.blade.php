@include('cdn')
<title>ScorpiaFX</title>
<style>
    .body {
        background: #000;
        margin: 0%;
        padding: 0%;
    }

    .t-color {
        color: #fff;
    }

    .content1 {
        position: relative;
        text-align: center;
        color: #fff;
        margin-top: 113px;

    }

    .content1 h1 {
        font-size: 72px;

    }

    .content1 h2 {
        font-size: 72px;
    }

    .content1 h3 {
        font-size: 20px;
        color: rgb(111, 116, 121)
    }

    .btn1 {
        position: relative;
        color: #fff;
        left: 609px;
        top: 22px;
        background: linear-gradient(135deg, #000000 0%, #9b51e0 100%);


    }

    .box {
        position: relative;
        display: flex;
        justify-content: space-around;
        text-align: center;
        margin-top: 115px;
        color: #fff;

    }

    .box span {
        background: linear-gradient(150deg, #062ee3 0%, #232423 53%);
        padding: 20px;
        border-radius: 10px;
        width: 229px;
        height: 200px;
        margin: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .box1 {
        position: relative;
        text-align: center;
        color: #fff;
        margin-top: 115px;

    }

    .box1 h1 {
        font-size: 50px;
    }

    .box1 h2 {
        font-size: 15px;
        color: rgb(111, 116, 121)
    }

    .content1 h1 {

        font-weight: bold;
        background: linear-gradient(174deg, #fbefef, blue);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;


    }

    .content1 h2 {

        font-weight: bold;
        background: linear-gradient(54deg, #0f0000, #c2a2dc);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;


    }


</style>
<x-header />

<body class="body">


    <div class="content1">

        <h1>Get Up To 90% Of The </h1>
        <h2>Profit Share</h2>
        <h3>Unlock your secrets skill and Maximising your profits with our trading expertise </h3>
    </div>

    <div class="  btn btn1">
        <a class=" nav-link" href="https://www.scorpiafx.com/checkout/"  style="color: #fff">
            Become A Funded Trader
            <span style="padding: 5px"> <i class="fa fa-arrow-right"></i></span>
        </a>
    </div>

    <div class="box">
        <span>
            <h1>90%</h1>
            <h2>Profit Share</h2>
        </span>
        <span>
            <h1>14</h1>
            <h2>Day Withdrawals</h2>
        </span>
        <span>
            <h1>24</h1>
            <h2>Withdraw Time</h2>
        </span>
        <span>
            <h1>0</h1>
            <h2>Time Limits</h2>
        </span>
    </div>

    <div class="box1">
        <h1>Let’s Get Started</h1>
        <h2>Choose an account size, don't break any rules and get funded up to 400K in simulated funding instantly.</h2>
    </div>

    <div>
        @include('profit_content')
    </div>
    <br><br>
    <x-footer />
</body>
