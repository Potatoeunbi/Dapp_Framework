<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/1e25dcd7a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="application\views\css\slidebar.css" />
    <link rel="stylesheet" type="text/css" href="application\views\css\login.css" />
    <link rel="stylesheet" type="text/css" href="application\views\css\radio.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<style>
* {
    margin: 0px;
    text-decoration: none;
}

ul {
    -ms-overflow-style: none;
    list-style: none;
}

ul::-webkit-scrollbar {
    display: none;
}
</style>

<body style="background-color: #F1F2F4;">
    <div class="trade">
        <div class="sidebar">
            <ul class="Menu">
                <li>
                    <table>
                        <tr>
                            <td><i class="fa-brands fa-ethereum fa-6x"></i></td>
                            <td>
                                <p>SmartContract</p>
                            </td>
                        </tr>
                    </table>
                </li>
                <li <?php if(isset($_SESSION['id'])){ 
                ?> onclick="location.href='create'" <?php }else{ ?> <?php ?>class="createsite" <?php
            } ?>>
                    <table>
                        <tr>
                            <td><i class="fa-solid fa-folder-plus fa-4x"></i></td>
                            <td>
                                <p>Create</p>
                            </td>
                        </tr>
                    </table>
                </li>
                <li <?php if(isset($_SESSION['id'])){ 
                ?> onclick="location.href='trade'" <?php }else{ ?> <?php ?>class="createsite" <?php
            } ?>>
                    <table>
                        <tr>
                            <td><i class="fa-solid fa-money-bill-trend-up fa-4x"></i></td>
                            <td>
                                <p>Trade</p>
                            </td>
                        </tr>
                    </table>
                </li>
                <li <?php if(isset($_SESSION['id'])){ 
                ?> onclick="location.href='mylist'" <?php }else{ ?> <?php ?>class="createsite" <?php
            } ?>>
                    <table>
                        <tr>
                            <td><i class="fa-solid fa-wallet fa-4x"></i></td>
                            <td>
                                <p>My list</p>
                            </td>
                        </tr>
                    </table>
                </li>
            </ul>
        </div>
        <div>
            <div style="text-align: center; position: relative; ">
                <div style="color:#87CEFA;font-size: 35px; margin-bottom: 0.2%;">
                    <h1>BlockChain</h1>
                    <h1>based</h1>
                    <h1>question bank</h1>
                </div>
                <div style="margin-bottom: 1%;">
                    <h2>block: <?php echo isset($BlockCount["message"]) ?  $BlockCount["message"] :  "0"; ?> ?????????:
                        <?php echo isset($ListCount["message"]) ?  $ListCount["message"] :  "0" ?></h1>
                </div>
                <div style="margin-bottom: 1%;">
                    <?php
                if(!isset($_SESSION['id'])){ ?>
                    <input value="Login" class='btn' type='button' id='btnOpen'
                        style="text-align: center; height: 50px; font-size: 20px;  width: 200px; background-color: #EB3945; color: white; border-radius: 10px; border: none; margin-right: 5%; cursor:pointer">
                    <input type='button' class='btn' value='SignUp' id='btnOpen'
                        style="text-align: center; height: 50px; font-size: 20px; width: 200px; background-color: #065E9E; color: white; border-radius: 10px; border: none; cursor:pointer">
                    <?php }else{ ?>
                    <input value="Logout" type='button' id='Logoutbt'
                        style="text-align: center; height: 50px; font-size: 20px;  width: 200px; background-color: #f27778; color: white; border-radius: 10px; border: none;  margin-right: 5%; cursor:pointer">
                    <input value="MyWallet" type='button' id='mywallet' onclick="location.href='mylist'"
                        style="text-align: center; height: 50px; font-size: 20px;  width: 200px; background-color: #002080; color: white; border-radius: 10px; border: none;  cursor:pointer">
                    <?php }?>


                </div>
            </div>
        </div>
        <div style="width: 100%; height:350px;">
            <div
                style="width: 1548px;background-color: white;position: relative;left: 50%;transform: translateX(-50%);height: 350px;border-radius: 10px; box-shadow: 5px 5px 20px grey">
                <span>
                    <h2 style="padding: 25px;">HoT Block</h2>
                </span>
                <div>
                    <table style="width: 100%; text-align: center; border-collapse: collapse;">
                        <tr style="font-size: 25px; color: #00C0FF; border-bottom: 3px solid;">
                            <td style="width: 45%;">??????</td>
                            <td>?????? ???</td>
                        </tr>
                        <?php 
                        if( isset($HotBlockCount['code']) && $HotBlockCount['code'] == 1){
                            unset($HotBlockCount['code']);
                            arsort($HotBlockCount);
                            foreach($HotBlockCount as $key => $val){
                                echo "<tr><td>".$key."</td><td>".$HotBlockCount[$key]."</td></tr>";
                            }
                        }
                    ?>
                    </table>
                </div>
            </div>
        </div>

        <style>

        </style>
        <div style="width: 100%; height:245px;">
            <div
                style=" top: 7px;width: 1548px;position: relative;left: 50%;transform: translateX(-50%);height: 265px; border-radius: 10px;">
                <div class="RadioBut">
                    <input type="radio" name="pos" id="pos1" checked>
                    <input type="radio" name="pos" id="pos2">
                    <input type="radio" name="pos" id="pos3">
                    <div class="function">
                        <label style="width:49%; float:left; padding: 1% 0%;">
                            <div
                                style="width: 20%; background-color: #1263CE; text-align: center; float: left; height: 180px; border-radius: 10px 0px 0px 10px;">
                                <i class="fa-brands fa-buffer fa-8x" style="margin: 10px 0 ; color: white;"></i>
                                <h3 style="color:white">Solidity</h1>
                            </div>
                            <div
                                style="height: 180px; background-color: white; width: 100%; border-radius: 10px; box-shadow: 5px 5px 20px grey;">
                                <p style="font-size: 23px; padding: 10px 6px;">
                                    ??????????????? ?????? ?????? ???????????? ????????? ????????? ???????????? ???????????? ????????? ?????? ?????? ??? ????????? ????????????.
                                    ???????????? ??????????????? ????????? ???????????? ????????? ????????? ????????? ????????? ????????? ??? ????????? ???????????????
                                    ?????? ????????? ?????? ??????????????????.
                                </p>
                            </div>
                        </label>
                        <label style="width:49%; float:left; padding: 1% 0%;">
                            <div
                                style="width: 20%; background-color: #44ADDA; text-align: center; float: left; height: 180px; border-radius: 10px 0px 0px 10px;">
                                <i class="fa-solid fa-sheet-plastic fa-8x" style="margin: 10px 0 ; color: white;"></i>
                                <h3 style="color:white">SmartContract</h1>
                            </div>
                            <div
                                style="height: 180px; background-color: white; width: 100%; border-radius: 10px; box-shadow: 5px 5px 20px grey;">
                                <p style="font-size: 23px; padding: 20px 6px;">
                                    SmartContract??? ???????????? ????????? ??????????????? ????????? ????????????, ????????? ??????, ?????? ??? ????????? ????????? ????????? ???????????? ???????????? ?????????
                                    ?????? ????????? ??????????????? ?????? ?????? ????????? ????????? ????????????.
                                </p>
                            </div>
                        </label>
                        <label style="width:49%; float:left; padding: 1% 0%;">
                            <div
                                style="width: 20%; background-color: #64C7CD; text-align: center; float: left; height: 180px; border-radius: 10px 0px 0px 10px;">
                                <img src="application\views\img\Web3.js.png" alt="dd" style="margin: 10px 0; width:75%">
                                <h3 style=" color:white">Web3.js</h1>
                            </div>
                            <div
                                style="height: 180px; background-color: white; width: 100%; border-radius: 10px; box-shadow: 5px 5px 20px grey;">
                                <p style="font-size: 23px; padding: 6px 6px;">
                                    ??????????????? ??????????????? ?????? ????????? ????????? ?????? ?????????????????? ???????????? ?????? ???????????? API??? ???????????? ?????????????????? ????????? ????????? ?????? ?????? ?????? ??????
                                    ????????? ?????? ??? Geth ????????? ??????
                                    ???????????? ?????????????????? ??????.
                                </p>
                            </div>
                        </label>
                    </div>
                    <p class="pos">
                        <label for="pos1"></label>
                        <label for="pos2"></label>
                        <label for="pos3"></label>
                    </p>
                </div>
                <div style="width:49%; float: right; padding: 1% 0%;">
                    <div
                        style="width: 20%; background-color: #3B8BA2; text-align: center; float: left; height: 180px; border-radius: 10px 0px 0px 10px;">
                        <i class="fa-solid fa-chart-bar fa-8x" style="margin: 10px 0 ; color: white;"></i>
                        <h3 style="color: white;">?????? ?????????</h1>
                    </div>
                    <div
                        style="height: 180px; background-color: white; width: 100%; border-radius: 10px; box-shadow: 5px 5px 20px grey;">
                        <div>
                            <div style="width: 80%; height:180px; position: relative; left: 153px; bottom: 205px;">
                                <canvas id="bar-chart-horizontal" width="1000" height="350"></canvas>
                                <!-- ????????????????????? -->
                                <input type="hiiden" style="display: none;" class="chartValue"
                                    value="<?php echo $WeekChart["Sun"]? $WeekChart["Sun"] : '0' ?>">
                                <input type="hiiden" style="display: none;" class="chartValue"
                                    value="<?php echo $WeekChart["Mon"]? $WeekChart["Mon"] : '0' ?>">
                                <input type="hiiden" style="display: none;" class="chartValue"
                                    value="<?php echo $WeekChart["Tue"]? $WeekChart["Tue"] : '0' ?>">
                                <input type="hiiden" style="display: none;" class="chartValue"
                                    value="<?php echo $WeekChart["Wed"]? $WeekChart["Wed"] : '0' ?>">
                                <input type="hiiden" style="display: none;" class="chartValue"
                                    value="<?php echo $WeekChart["Thu"]? $WeekChart["Thu"] : '0' ?>">
                                <input type="hiiden" style="display: none;" class="chartValue"
                                    value="<?php echo $WeekChart["Fri"]? $WeekChart["Fri"] : '0' ?>">
                                <input type="hiiden" style="display: none;" class="chartValue"
                                    value="<?php echo $WeekChart["Sat"]? $WeekChart["Sat"] : '0' ?>">
                            </div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
                            <script src="application\views\js\Chart.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='modal' id='modal'>
            <div id='content'>
                <legend class="title">?????????</legend>
                <button type='button' class="close" id='btnClose'>X</button>
                <label>????????? ????????? ???????????????</label>
                <form>
                    <div class="inp_text">
                        <input type="text" style="vertical-align: 0px" id='id' name="id" class="id" placeholder="?????????">
                    </div>

                    <div class="inp_text">
                        <input type='password' name='pw' id='pw' placeholder="????????????" autoComplete="on">
                    </div>
                </form>

                <input type="button" id='btnCheck' class="btn_login" value="?????????" style="text-align:center">
                <div class="bottomText" style="margin-top:10px">
                    <label>????????? ????????????????</label>
                    <a href="#" id="btnchangejoin" style="margin:5px">????????????</a>
                </div>

            </div>
        </div>

        <div class='modal' id='modal'>
            <div id='content'>
                <legend class="title">????????????</legend>
                <button type='button' class="close" id='btnClose'>X</button>
                <label>?????? ????????? ???????????????</label>
                <form>
                    <div class="inp_text">
                        <input type="text" style="vertical-align: 0px" name="userid" id="uid" class="id"
                            placeholder="?????????">
                    </div>
                    <input type="hidden" name="decide_id" id="decide_id">
                    <p><span id="decide" style='color:red;font-size: 15px'> ID ?????? ????????? ??????????????????. </span>
                        <button type='button' style='font-size: 13px' class="username_button" id="check_button"">????????????</button>
            <div class=" inp_text">
                            <input type='password' name='pwd' id='pwd' placeholder="????????????" autoComplete="on">
            </div>

            <div class="inp_text">
                <input type='password' id='Adpwd' placeholder="?????? ????????????" autoComplete="on">
            </div>

            <div class="inp_text">
                <input type='text' id='loginName' placeholder="??????">
            </div>
            <div class="inp_text">
                <input type='text' id='loginPhone' placeholder="????????????   ex) 010-1111-1111">
            </div>

            <div class="inp_text">
                <input type='text' id='Birth' placeholder="????????????   ex) 2000-01-01">
            </div>
            </form>

            <button type="submit" id='btnJoin' class="btn_login">????????????</button>
            <div class="bottomText" style="margin-top:10px">
                <label>?????? ???????????????????</label>
                <a href="#" id="btnlogin" style="margin:5px">?????????</a>
            </div>

        </div>

    </div>
    </div>

    <script type=text/javascript src="application\views\js\login.js"></script>
    <script type=text/javascript src="application\views\js\logincheck.js"></script>
    <script type=text/javascript src="application\views\js\join.js"></script>
    <script type=text/javascript src="application\views\js\idcheck.js"></script>
    <script type=text/javascript src="application\views\js\sidebarlogin.js"></script>


</body>

</html>