<div style="height: 320px;">
    <h3 class="ct" style="margin: 0;">預告片清單</h3>
    <div class="ct" style="display: flex; justify-content: space-between;">
        <div style="width:24.8%;background-color:#ccc">預告片海報</div>
        <div style="width:24.8%;background-color:#ccc">預告片片名</div>
        <div style="width:24.8%;background-color:#ccc">預告片排序</div>
        <div style="width:24.8%;background-color:#ccc">預告片操作</div>
    </div>
    <form action="./api/edit_poster.php" method="post">
        <div style="overflow: auto; height: 200px;">
            <?php
            $posters = $Poster->all("order by `rank`");
            foreach ($posters as $poster):
                ?>

                <div class="ct"
                    style="display: flex; justify-content: space-between; background-color: white;margin-bottom: 3px;">
                    <div style="width:24.8%;">
                        <img src="./image/<?= $poster['img'] ?>" style="width: 60px;height: 80px;">
                    </div>
                    <div style="width:24.8%;">
                        <input type="text" name="name[]" value="<?= $poster['name'] ?>" style="width: 90%;">
                    </div>
                    <div style="width:24.8%;">
                        <button type="button">往上</button>
                        <button type="button">往下</button>
                    </div>
                    <div style="width:24.8%;">
                        <input type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>顯示
                        <input type="checkbox" name="del[]" value="<?= $poster['id']; ?>">刪除
                        <select name="ani[]">
                            <option value="1" <?= ($poster['ani'] == 1) ? 'selected' : ''; ?>>淡入淡出</option>
                            <option value="2" <?= ($poster['ani'] == 2) ? 'selected' : ''; ?>>縮放</option>
                            <option value="3" <?= ($poster['ani'] == 3) ? 'selected' : ''; ?>>滑入滑出</option>

                        </select>
                    </div>
                </div>
                <?php
            endforeach;
            ?>
        </div>
        <div class="ct">
            <input type="submit" value="編輯確定">
            <input type="reset" value="重置">
        </div>
    </form>
</div>
<hr>
<div style="height: 160px;">
    <h3 class="ct">新增預告片海報</h3>
    <form action="./api/add_poster.php" method="post" enctype="multipart/form-data">
        <table>
            <td>預告片海報:</td>
            <td><input type="file" name="img" id="img"></td>
            <td>預告片片名:</td>
            <td><input type="text" name="name" id="name"></td>
        </table>
        <div class="ct">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </div>
    </form>

</div>