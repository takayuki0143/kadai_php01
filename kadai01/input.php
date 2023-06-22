<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>読書ログ</title>
    <link rel="stylesheet" href="c/style.css">
   
</head>
<body>
    <section class="main">
        <h1>読書ログ</h1>
    <form action="write.php" method="post" enctype="multipart/form-data">
        <div class="contents">
        読んだ本：
        <input class="box" type="text" name="book">
        </div>

        <div class="contents">
            <input type="file" name="file" class="file">
        </div>

        <div class="contents">
        日付：
        <input class="box" type="date" name="date">
        </div>

        <div class="contents">
        ジャンル：
        <select class="box" name="genre">
            <option>---選択してください---</option>
            <option>ビジネス書</option>
            <option>マンガ</option>
            <option>小説</option>
            <option>新書</option>
            <option>技術書</option>
        </select>
        </div>

        <div class="contents">
        所要時間(分)：
        <select class="box" name="time">
        <option>---選択してください---</option>
            <option>30</option>
            <option>45</option>
            <option>60</option>
            <option>90</option>
            <option>120</option>
            <option>180</option>
            <option>240</option>
        </select>
        </div>

        <div class="contents">
        面白さ：<br>
                <input type="radio" value="1" name="interesting">1
                <input type="radio" value="2" name="interesting">2
                <input type="radio" value="3" name="interesting">3
                <input type="radio" value="4" name="interesting">4
                <input type="radio" value="5" name="interesting">5
                <input type="radio" value="6" name="interesting">6
                <input type="radio" value="7" name="interesting">7
                <input type="radio" value="8" name="interesting">8
                <input type="radio" value="9" name="interesting">9
                <input type="radio" value="10" name="interesting">10
        </div>

        <div class="contents">
        おすすめ度：<br>
                <input type="radio" value="1" name="recommend">1
                <input type="radio" value="2" name="recommend">2
                <input type="radio" value="3" name="recommend">3
                <input type="radio" value="4" name="recommend">4
                <input type="radio" value="5" name="recommend">5
                <input type="radio" value="6" name="recommend">6
                <input type="radio" value="7" name="recommend">7
                <input type="radio" value="8" name="recommend">8
                <input type="radio" value="9" name="recommend">9
                <input type="radio" value="10" name="recommend">10
        </div>

        <div class="contents">
        没頭度：<br>
                <input type="radio" value="1" name="concentration">1
                <input type="radio" value="2" name="concentration">2
                <input type="radio" value="3" name="concentration">3
                <input type="radio" value="4" name="concentration">4
                <input type="radio" value="5" name="concentration">5
                <input type="radio" value="6" name="concentration">6
                <input type="radio" value="7" name="concentration">7
                <input type="radio" value="8" name="concentration">8
                <input type="radio" value="9" name="concentration">9
                <input type="radio" value="10" name="concentration">10
        </div>

        <div class="contents">
        再読したさ：<br>
                <input type="radio" value="1" name="reread">1
                <input type="radio" value="2" name="reread">2
                <input type="radio" value="3" name="reread">3
                <input type="radio" value="4" name="reread">4
                <input type="radio" value="5" name="reread">5
                <input type="radio" value="6" name="reread">6
                <input type="radio" value="7" name="reread">7
                <input type="radio" value="8" name="reread">8
                <input type="radio" value="9" name="reread">9
                <input type="radio" value="10" name="reread">10
        </div>
        
        <div class="contents">
        強さ：<br>
                <input type="radio" value="1" name="strength">1
                <input type="radio" value="2" name="strength">2
                <input type="radio" value="3" name="strength">3
                <input type="radio" value="4" name="strength">4
                <input type="radio" value="5" name="strength">5
                <input type="radio" value="6" name="strength">6
                <input type="radio" value="7" name="strength">7
                <input type="radio" value="8" name="strength">8
                <input type="radio" value="9" name="strength">9
                <input type="radio" value="10" name="strength">10
        </div>

        <input type="submit" value="送信" class="contents">
    </form>
    </section>

</body>
</html>