<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>導覽列試做</title>
        <style>
            *{
                margin:0px;
                padding:0px;
            }            
            nav > ul {
                background-color: rgb(230, 230, 230);
                list-style: none;   /* 移除項目符號 */
                margin: 0;
                padding: 0;
            }

            nav a {
                color: inherit; /* 移除超連結顏色 */
                display: block; /* 讓 <a> 填滿 <li> */
                font-size: 1.2rem;
                padding: 10px;
                text-decoration: none;  /* 移除超連結底線 */
            }

            /* 滑鼠移到 <a> 時變成深底淺色 */
            nav li:hover {
                background-color: rgb(115, 115, 115);
                color: white;
            }

            .flex-nav {
                display: flex;
                justify-content: flex-end;
            }

            /* .inline-block-nav {
                text-align: right;
                font-size: 0;   移除 <li> 之間的空隙
            }
            .inline-block-nav > li {
                display: inline-block;
            } */
        </style>
    </head>
    <body>
        <nav>
            <ul class="flex-nav">
                <li><a href="#">電子商務</a></li>
                <li><a href="#">市場行銷</a></li>
                <li><a href="#">辦公室生產力</a></li>
                <li><a href="#">個人成長</a></li>
                <li><a href="#">設計</a></li>
                <li><a href="#">通訊工程與軟體</a></li>
            </ul>
        </nav>
        <!-- <nav>
            <ul class="inline-block-nav">
                <li><a href="#">電子商務</a></li>
                <li><a href="#">市場行銷</a></li>
                <li><a href="#">辦公室生產力</a></li>
                <li><a href="#">個人成長</a></li>
                <li><a href="#">設計</a></li>
                <li><a href="#">通訊工程與軟體</a></li>
            </ul>
        </nav> -->
    </body>
</html>
