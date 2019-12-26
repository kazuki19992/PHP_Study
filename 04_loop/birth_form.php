<html>
    <bdoy>
        <h1>生年月日を入力するフォーム</h1>
        <label for="year">西暦</label>
        <select name="year">
            <?php
            // 現在の年を取得する
            $now = date("Y");
            for( $i = 1950; $i <= $now; $i++){ ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
        </select>年
        <br>
        <select name="month">
            <?php for( $i = 1; $i <= 12; $i++){ ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
        </select>月
        <select name="day">
            <?php for( $i = 1; $i <= 31; $i++){ ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
        </select>日
    </body>
</html>