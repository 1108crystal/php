<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP 手册 函数参考 日期与时间相关扩展 日期/时间 DateTimeInterface</title>

    <style>
        body{
            margin: 20px auto;
            padding: 10px ;
            text-align: center;
        }
        table,
        tr,
        td {
            border: 1px solid burlywood;
            text-align: center;
        }
        .trHeader{
            background-color:chocolate;
            font-size: 18px;
            font-weight: bold;
        }
        .trcategory{
            background-color:bisque;
            
        }
    </style>
</head>

<body>

    <a href='index.php'>回首頁</a>
    <br>
    <hr>
    <h1>PHP 手册 函数参考 日期与时间相关扩展 日期/时间 DateTimeInterface</h1>
    <hr>
    <!-- 日期函數 練習 -->
    <table>

        <tr class="trHeader">
            <td>format 字符</td>
            <td>说明</td>
            <td>返回值示例</td>
            <td> <?php echo date('Y-m-d') ?><br>測試結果</td>

        </tr>
        <tr class="trcategory">
            <td>日</td>
            <td>---</td>
            <td>---</td>
            <td> </td>

        </tr>
        <?php
        echo "<tr><td>d</td><td>月份中的第几天，有补零的两位数字</td><td>01 到 31</td> <td>" . date('d') . "</td></tr>";
        echo "<tr><td>D</td><td>D	文字表示星期几，三个字母</td><td>Mon 到 Sun</td> <td>" . date('D') . "</td></tr>";
        echo "<tr><td>j</td><td>月份中的第几天，没有补零</td><td>1 到 31</td> <td>" . date('j') . "</td></tr>";
        echo "<tr><td>N</td><td>	ISO 8601 数字表示星期几</td><td>1（星期一）到 7（星期天）</td> <td>" . date('N') . "</td></tr>";
        echo "<tr><td>S</td><td>月份中的第几天英文后缀，两个字符</td><td>st、nd、rd 或 th。可以和 j 一起使用</td> <td>" . date('S') . "</td></tr>";
        echo "<tr><td>w</td><td>数字表示星期几</td><td>0（星期天）到 6（星期六）</td> <td>" . date('w') . "</td></tr>";
        echo "<tr><td>z</td><td>一年中的第几天（从 0 开始）</td><td>0 到 365</td> <td>" . date('z') . "</td></tr>";

        ?>
        <!-- 週 -->
        <tr class="trcategory">
            <td>週</td>
            <td>---</td>
            <td>---</td>
            <td> </td>

        </tr>
        <?php
        echo "<tr><td>W</td><td>ISO 8601 格式当年中的第几周，每周从周一开始</td><td>示例：42（当年的第 42 周）</td> <td>" . date('w') . "</td></tr>";
        ?>
        <!-- 月 -->
        <tr class="trcategory">
            <td>月</td>
            <td>---</td>
            <td>---</td>
            <td> </td>

        </tr>
        <?php
        echo "<tr><td>F</td><td>月份的完整文本表示，比如 January 或者 March</td><td>January 到 December</td> <td>" . date('F') . "</td></tr>";
        echo "<tr><td>m</td><td>月份的数字表示，补零</td><td>01 到 12</td> <td>" . date('m') . "</td></tr>";
        echo "<tr><td>M</td><td>简短文本表示月份，三个字母</td><td>Jan 到 Dec</td> <td>" . date('M') . "</td></tr>";
        echo "<tr><td>n</td><td>数字表示几月份，不补零</td><td>1 到 12</td> <td>" . date('n') . "</td></tr>";
        echo "<tr><td>t</td><td>指定月份的天数</td><td>28 到 31</td> <td>" . date('t') . "</td></tr>";
        ?>
        <!-- 年 -->
        <tr class="trcategory">
            <td>年</td>
            <td>---</td>
            <td>---</td>
            <td> </td>

        </tr>
        <?php
        echo "<tr><td>L</td><td>是否是闰年</td><td>如果是闰年为 1，否则为 0。</td> <td>" . date('L') . "</td></tr>";
        echo "<tr><td>o</td><td>ISO 8601 数字年份表示。这和 Y 值相同，但如果 ISO 周数（W）属于上一年或者下一年，则用那一年。</td><td>示例：1999 或 2003</td> <td>" . date('o') . "</td></tr>";
        echo "<tr><td>X</td><td>年份的展开全数字表示，至少四位，- 表示公元前，+ 表示公元。</td><td>示例：-0055、+0787、 +1999、+10191</td> <td>" . date('X') . "</td></tr>";
        echo "<tr><td>x</td><td>如果需要，年份可以展开全数字表示，如果可能的话，也可以用标准的全数字（Y）表示。至少有四位数字。公元前以 - 为前缀，年份不小于 10000 时以 + 为前缀。</td><td>示例：-0055, 0787, 1999, +10191</td> <td>" . date('x') . "</td></tr>";
        echo "<tr><td>Y</td><td>年份完整数字表示，至少四位，使用 - 表示公元前。</td><td>示例：-0055、0787、 1999、2003、10191</td> <td>" . date('Y') . "</td></tr>";
        echo "<tr><td>y</td><td>两位数的年份表示	</td><td>示例：99 或 03</td> <td>" . date('y') . "</td></tr>";
        ?>


        <!-- 時間 -->
        <tr class="trcategory">
            <td>時間</td>
            <td>---</td>
            <td>---</td>
            <td> </td>

        </tr>
        <?php
        echo "<tr><td>a</td><td>小写的上午和下午</td><td>am 或 pm</td> <td>" . date('a') . "</td></tr>";
        echo "<tr><td>A</td><td>大写的上午和下午</td><td>AM 或 PM</td> <td>" . date('A') . "</td></tr>";
        echo "<tr><td>B</td><td>Swatch 互联网时间</td><td>000 到 999</td> <td>" . date('B') . "</td></tr>";
        echo "<tr><td>g</td><td>不补零的小时（12 小时制）</td><td>1 到 12 </td> <td>" . date('g') . "</td></tr>";
        echo "<tr><td>G</td><td> 不补零的小时（24 小时制）</td><td> </td> <td>" . date('G') . "</td></tr>";
        echo "<tr><td>h</td><td>补零的小时（12 小时制） </td><td>01 到 12 </td> <td>" . date('A') . "</td></tr>";
        echo "<tr><td>H</td><td>补零的小时（24 小时制） </td><td>00 到 23 </td> <td>" . date('h') . "</td></tr>";
        echo "<tr><td>i</td><td>补零的分钟 </td><td>00 到 59 </td> <td>" . date('i') . "</td></tr>";
        echo "<tr><td>s</td><td>补零的秒 </td><td>00 到 59 </td> <td>" . date('s') . "</td></tr>";
        echo "<tr><td>u</td><td>微秒。注意 date() 总是生成 000000，因为它需要一个 int 参数，而如果 DateTime 是使用微秒创建的，则 DateTime::format() 支持微秒。	 </td><td>示例：654321 </td> <td>" . date('u') . "</td></tr>";
        echo "<tr><td>v</td><td>毫秒。与 u 的说明相同。 </td><td>示例：654 </td> <td>" . date('v') . "</td></tr>";
        // echo "<tr><td>A</td><td> </td><td> </td> <td>" . date('A')."</td></tr>";
        ?>
        <!--完整日期/时间 -->
        <tr class="trcategory">
            <td>完整日期/时间</td>
            <td>---</td>
            <td>---</td>
            <td> </td>
        </tr>
        <?php
        // echo "<tr><td>A</td><td> </td><td> </td> <td>" . date('A')."</td></tr>";
        echo "<tr><td>c</td><td>ISO 8601 日期 </td><td>2004-02-12T15:19:21+00:00 </td> <td>" . date('c') . "</td></tr>";
        echo "<tr><td>r</td><td>	» RFC 2822/» RFC 5322 格式化时间 </td><td> </td><td>" . date('r') . "</td></tr>";
        echo "<tr><td>U</td><td>从 Unix 纪元（January 1 1970 00:00:00 GMT）到至今的秒数 </td><td> 参见 time()</td> <td>" . date('U') . "</td></tr>";

        ?>

    </table>

</body>

</html>