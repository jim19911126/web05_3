<style>
    .lists {
        width: 210px;
        height: 240px;
        background-color: green;
        margin: 0 auto;
    }

    .btns {
        width: 320px;
        height: 120px;
        background-color: blue;
    }

    .left,
    .right {
        width: 0;
        height: 0;
        border-top: 20px solid transparent;
        border-bottom: 20px solid transparent;
    }

    .left {
        border-left: 0px solid black;
        border-right: 33px solid black;
    }

    .right {
        border-left: 33px solid black;
        border-right: 0px solid black;
    }

    .controls{
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .poster{
        
    }
</style>

<?php
$posters=$Poster->all(['sh'=>1], "order by `rank`");

?>
foreach ($posters as $poster => $value):
    # code...

<div class="half" style="vertical-align:top;">
    <h1>預告片介紹</h1>
    <div class="rb tab" style="width:95%;">
        <div class="lists">

        </div>
        <div class="controls">
            <div class="left"></div>
            <div class="btns"></div>
            <div class="right"></div>
        </div>
    </div>
</div>
<div class="half">
    <h1>院線片清單</h1>
    <div class="rb tab" style="width:95%;">
        <table>
            <tbody>
                <tr> </tr>
            </tbody>
        </table>
        <div class="ct"> </div>
    </div>
</div>