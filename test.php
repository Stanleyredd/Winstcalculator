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
        .item2 { grid-area: test; }
        .item5 { grid-area: footer; }

        .grid-container {
            display: grid;
            grid-template-areas:
                'header header header header header header'
                'main main main right right right'
                'test test test test test test'
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




<div class="grid-container">
    <div class="item1">Header</div>
    <div class="item3">Main</div>
    <div class="item4">Right</div>
    <div class="item2">test</div>
    <div class="item5">Footer</div>
</div>
</body>
</html>
