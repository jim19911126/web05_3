<style>
    .booking-box {
        width: 540px;
        height: 370px;
        background: url("./icon/03D04.png") no-repeat center;
        margin: 0 auto;
    }

    .info-box {
        background: #ddd;
        width: 540px;
        margin: 10px auto;
        padding: 10px 70px;
        box-sizing: border-box;
    }

    #seats {
        display: flex;
        flex-wrap: wrap;
        width: 320px;
        height: 344px;
        margin: 0 auto;
        padding-top: 18px;
    }

    .seat {
        width: 64px;
        height: 86px;
        box-sizing: border-box;
        text-align: center;
        padding: 2px;
        position: relative;
    }

    .seat input[type="checkbox"] {
        position: absolute;
        bottom: 5px;
        right: 5px;
    }

    .seat:nth-child(odd) {
        width: 64px;
        height: 86px;
        box-sizing: border-box;
    }
</style>

<div class="booking-box">
    <div id="seats">
        <?php
        for ($i = 0; $i < 20; $i++):
            ?>
            <div class="seat">
                <div><?= floor($i / 5) + 1; ?>排<?= ($i % 5) + 1 ?>號</div>
                <input type="checkbox" name="seat" value="<?= $i; ?>">
            </div>
            <?php
        endfor;
        ?>
    </div>

</div>

<div class="info-box">
    <div class="order-info">
        <div>您選擇的電影是：</div>
        <div>您選擇的時刻是：</div>
        <div>您已經勾選<span id="tix">0</span>張票，最多可以購買四張票</div>
    </div>
</div>

<div class="ct">
    <button class="btn-prev">上一步</button>
    <button class="btn-book">訂購</button>
</div>