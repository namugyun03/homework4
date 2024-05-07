
<?php
$link = mysqli_connect("localhost", 'root', '','ticket');
$_GET['order'] = isset($order) ? $_GET['order'] : null;

?>
<html>
<head>
    <meta charset="utf-8">
    <title>classscore</title>
    <style>
        .input-wrap {
            width: 960px;
            margin: 0 auto;
        }
        input[type="text"]
        {
            margin-top: 100px;
            width:150px;
        }
        h1 { text-align: center; }
        th, td { text-align: center; }
        table, td, th {
            border-collapse: collapse;
            border: 1px solid black;
            margin: 10 auto;
            padding: 2px;
        }
        a { text-decoration: none; }
        div
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="input-wrap">
        <form action="classscore.php" method="POST">   
            <label for="name">이름 : </label>
        <input type="text" name="name">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>구분</th>
                        <th colspan='2' style="width:100px">어린이</th>
                        <th colspan='2' style="width:100px">어른</th>
                        <th>비고</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td style = "width:30px">1</td>
                       <td style = "width:100px">입장권</td>
                       <td>7,000</td>
                       <td>
                            <p>
                            <select name="kid_tic">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                            </p>
                        </td>
                        <td>10,000</td>
                        <td>
                        <p>
                            <select name="adult_tic">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                            </p>
                        </td>
                        <td>입장</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BIG3</td>
                        <td>12,000</td>
                        <td>
                        <p>
                            <select name="kid_big3">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                            </p>
                        </td>
                        <td>16,000</td>
                        <td>
                        <p>
                            <select name="adult_big3">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                            </p>
                        </td>
                        <td>입장+놀이3종</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>자유이용권</td>
                        <td>21,000</td>
                        <td>
                        <p>
                            <select name="kid_free">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                            </p>
                        </td>
                        <td>26,000</td>
                        <td>
                        <p>
                            <select name="adult_free">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                            </p>
                        </td>
                        <td>입장+놀이자유</td>
                    </tr>
                    <tr>
                    <td>3</td>
                        <td>연간이용권</td>
                        <td>70,000</td>
                        <td>
                        <p>
                            <select name="kid_year">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                            </p>
                        </td>
                        <td>90,000</td>
                        <td>
                        <p>
                            <select name="adult_year">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                            </p>
                        </td>
                        <td>입장+놀이자유</td>
                    </tr>
                </tbody>
            </table>
            
        <div>
            <input type="submit" name="Submit" value="확인"/>
            <input type="reset" name="Reset" value="초기화"/>
            <input type="submit" name="delete" value="delete">
        </div>
        </form>
        <?php
         $name = $_POST['name'];
         $kidtic = $_POST['kid_tic'];
         $kidbig3 = $_POST['kid_big3'];
         $kidfree = $_POST['kid_free'];
         $kidyear = $_POST['kid_year'];
         $adulttic = $_POST['adult_tic'];
         $adultbig3 = $_POST['adult_big3'];
         $adultfree = $_POST['adult_free'];
         $adultyear = $_POST['adult_year'];

        if(isset($_POST['Submit']))
        {

            if ($link === false) {
                die("오류: " . mysqli_connect_error());
            }
            
                $t = time();
                $total = $_POST['kid_tic']*7000 + $_POST['kid_big3'] *12000 + $_POST['kid_free']*21000 + $_POST['kid_year']*70000
                + $_POST['adult_tic']*10000 + $_POST['adult_big3'] * 16000 + $_POST['adult_free'] * 26000 + $_POST['adult_year'] * 90000;

            

                echo(date("Y년 n월 j일 오후 G시 i분",$t)."<br>");
                echo $_POST['name']," 고객님 감사합니다.<br>";
                if(0<$_POST['kid_tic']) echo"어린이 입장권 ",$_POST['kid_tic'],"매<br>";
                if(0<$_POST['kid_big3']) echo"어린이 BIG3 ",$_POST['kid_big3'],"매<br>";
                if(0<$_POST['kid_free']) echo"어린이 자유이용권 ",$_POST['kid_free'],"매<br>";
                if(0<$_POST['kid_year']) echo"어린이 연간이용권 ",$_POST['kid_year'],"매<br>";
                if(0<$_POST['adult_tic']) echo"어른 입장권 ",$_POST['adult_tic'],"매<br>";
                if(0<$_POST['adult_big3']) echo"어른 BIG3 ",$_POST['adult_big3'],"매<br>";
                if(0<$_POST['adult_free']) echo"어른 자유이용권 ",$_POST['adult_free'],"매<br>";
                if(0<$_POST['adult_year']) echo"어른 연간이용권 ",$_POST['adult_year'],"매<br>";
                echo "총합 ",number_format($total),"원 입니다.<br>";

                $sql = "INSERT INTO tickets (name,kidticket,kidbig3,kidfree,kidyear,adultticket,adultbig3,adultfree,adultyear) VALUES ('$name','$kidtic','$kidbig3','$kidfree','$kidyear','$adulttic','$adultbig3','$adultfree','$adultyear')";
                        
            
        
        }
        else if ($_POST['delete'] == "delete")
        {
            $sql = "DELETE FROM tickets WHERE name = '$name'";
        }
            mysqli_query($link, $sql);
        ?>
    </div>
</body>
</html>
