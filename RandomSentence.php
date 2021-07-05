<?php
//亂數顯示每日一句
srand((float)microtime() * 1000000);
$randVal = rand(0, 5);
switch ($randVal) {
    case "0":
        echo "<br> 知足常樂";
        break;
    case "1":
        echo "<br> 生氣是拿別人的過錯來懲罰自己";
        break;
    case "2":
        echo "<br> 多一份感恩，就多一份美化";
        break;
    case "3":
        echo "<br> 縮小自我，擴大心胸";
        break;
    case "4":
        echo "<br> 愛與感恩，能洗淨心中的煩惱";
        break;
    case "5":
        echo "<br> 做好事要騰出時間";
        break;
}
?>