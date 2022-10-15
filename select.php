<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
  <title>試合選択</title>
</head>

<body>
  <form action="score.php" method="post">
    <p>チームを選んでください
      <p>
        <input type="radio" name="team" value="g">巨人
        <input type="radio" name="team" value="s">ヤクルト
        <input type="radio" name="team" value="yb">横浜
        <input type="radio" name="team" value="d">中日
        <input type="radio" name="team" value="t">阪神
        <input type="radio" name="team" value="c">広島
        <br>
        <input type="radio" name="team" value="f">日本ハム
        <input type="radio" name="team" value="e">楽天
        <input type="radio" name="team" value="l">西武
        <input type="radio" name="team" value="m">ロッテ
        <input type="radio" name="team" value="bs">オリックス
        <input type="radio" name="team" value="h">ソフトバンク
      </p>
    </p>
    <p>試合日を選んでください
      <p>2022年
        <select name="month">
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>月
        <select name="date">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>日
      </p>
    </p>
    <p><input type="submit" name="submitButton" value="表示"></p>
  </form>
</body>
</html>
