<style>
    .lists {
        width: 210px;
        height: 240px;
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

    .controls {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .poster {
        text-align: center;
        position: absolute;
        width: 210px;
        height: 240px;
        display: none;
    }

    .poster img {
        width: 200px;
        height: 220px;
    }
</style>

<?php
$posters = $Poster->all(['sh' => 1], "order by `rank`");

?>

<div class="half" style="vertical-align:top;">
    <h1>預告片介紹</h1>
    <div class="rb tab" style="width:95%;">
        <div class="lists">
            <?php
            foreach ($posters as $poster):
                ?>
                <div class="poster" data-ani="<?= $poster['ani']; ?>" data-id="<?= $poster['id']; ?>">
                    <img src="./image/<?= $poster['img']; ?>" alt="">
                    <div><?= $poster['name']; ?></div>
                </div>
                <?php
            endforeach;
            ?>
        </div>
        <div class="controls">
            <div class="left"></div>
            <div class="btns"></div>
            <div class="right"></div>
        </div>
    </div>
</div>

<script>
    let rank = 0;
    $(".poster").eq(rank).show()

    let slider = setInterval(() => {
        animater()
        // 單純輪播
        // rank++;
        // if (rank>$(".poster").lenth-1) {
        //     rank=0;

        // }
        // $(".poster").hide();
        // $(".poster").eq(rank).show();
    }, 2000)

    function animater(params) {
        let now = $(".poster:visible");
        rank++;
        if (rank > $(".poster").length - 1) {
            rank = 0;

        }

        let next = $(".poster").eq(rank);
        let ani = $(now).data('ani');

        switch (ani) {
            case 1:
                $(now).fadeOut(1000);
                $(next).fadeIn(1000);

                break;
            case 2:
                $(now).fadeOut(1000);
                $(next).fadeIn(1000);

                break;
            case 3:
                $(now).fadeOut(1000);
                $(next).fadeIn(1000);

                break;
        }
    }
</script>

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