<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>スタジオ選択</title>

</head>

<body>

<h1>スタジオを選択してください</h1>

    <form action="/music/choice" method="post">

        <dl>

            <dt>使用するスタジオを選択してください。</dt>

            <dd>

                <lavel><input type="radio" name="questionnaire" id="questionnaire1" value="Aスタジオ">Aスタジオ(1~4人)</lavel>

                <lavel><input type="radio" name="questionnaire" id="questionnaire2" value="Bスタジオ">Bスタジオ(4~10人)</lavel>

                <lavel><input type="radio" name="questionnaire" id="questionnaire3" value="Cスタジオ">Cスタジオ(10人以上)</lavel>

            </dd>

        </dl>

    </form>

    <a href="/music/check">次へ</a>

</body>

</html>