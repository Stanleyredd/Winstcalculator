<!DOCTYPE html>
<html>
<head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }
        .item1 { grid-area: header; }
        .item3 { grid-area: main; }
        .item4 { grid-area: right; }
        .item5 { grid-area: footer; }
        .item6 { grid-area: footer2; }

        .grid-container {
            display: grid;
            grid-template-areas:
                'header header header header header header'
                'main main main right right right'
                'footer footer footer footer footer footer';
                'footer footer footer footer footer footer';
            grid-gap: 10px;
            background-color: #2196F3;
            padding: 10px;
        }

        .grid-container > div {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
    </style>
</head>
<body>

<ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="#contact">Contact</a></li>
    <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>



<div style="border: #111111 1px solid">

    <form action="">
        <label for="">Aantal producten</label>
        <input type="number">
        <br><br>
        <label for="">Inkoopprijs totaal</label>
        <input type="number">
        <br><br>
        <label for="">Transport/douane kosten</label>
        <input type="number">
        <br><br>
        <label for="">Verpakkingskosten</label>
        <input type="number">
        <br><br>
        <label for="">Transactiekosten</label>
        <input type="number">
        <br><br>
        <label for="">Overige kosten</label>
        <input type="number">


    </form>

</div>
<div class="grid-container">
    <div class="item1">Header</div>
    <div class="item3">Main</div>
    <div class="item4">Right</div>
    <div class="item5">Footer</div>
    <div class="item6">Footer2</div>
</div>
</body>
</html>
