<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>Trade Page</title>
    <script src="https://kit.fontawesome.com/1e25dcd7a8.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="application\views\css\button.css">
    <link rel="stylesheet" href="application\views\css\left.css">
    <link rel="stylesheet" href="application\views\css\create2.css">
    <link rel="stylesheet" href="application\views\css\slidebar.css">
    <link rel="stylesheet" href="application\views\css\select.css">
    <link rel="stylesheet" href="application\views\css\UserInfo.css">
    <link rel="stylesheet" type="text/css" href="application\views\css\login.css" />
    <style>
    * {
        margin: 0px;
        text-decoration: none;
    }

    body {
        margin: 0;
        background-color: #F1F2F4;
    }

    .container {
        width: 100%;
        display: flex;
    }

    .blue {
        height: 100%;
        width: 100px;
        background-color: #00C0FF;
    }

    .Tcenter {
        height: 95%;
        width: 100%;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <ul class="Menu">
                <li onclick="location.href='board'">
                    <table>
                        <tr>
                            <td><i class="fa-brands fa-ethereum fa-6x"></i></td>
                            <td>
                                <p>SmartContract</p>
                            </td>
                        </tr>
                    </table>
                </li>
                <li onclick="location.href=''">
                    <table>
                        <tr style="color:#00C0FF">
                            <td><i class="fa-solid fa-folder-plus fa-4x"></i></td>
                            <td>
                                <p>Create</p>
                            </td>
                        </tr>
                    </table>
                </li>
                <li onclick="location.href='trade'">
                    <table>
                        <tr>
                            <td><i class="fa-solid fa-money-bill-trend-up fa-4x"></i></td>
                            <td>
                                <p>Trade</p>
                            </td>
                        </tr>
                    </table>
                </li>
                <li onclick="location.href='mylist'">
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
    </div>
    <div style="padding-top:4%;">
        <div class="right" style="padding-left: 6%;">





            <div class="center">
                <div class="Create" id="icreat">


                    <div class="top">
                        <div id="UserInfoDiv">
                            <h1 class="User">&nbspUser Info</h1>
                            <i class="fa-solid fa-user fa-2x" id="UserInfo"></i>
                        </div>
                        <div id="UserInfoCard">
                            <table style="width:100%; text-align: center; height: 100%; color:white;">
                                <tr>
                                    <td colspan="2"><i class="fa-solid fa-circle-user fa-5x"></i></td>
                                </tr>
                                <tr>
                                    <td colspan="2">??????</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><?php echo $Wallet['message'] ?></td>
                                </tr>
                                <tr>
                                    <td>?????????</td>
                                    <td>?????????</td>
                                </tr>
                                <tr>
                                    <td id="infoid" value="<?php echo( $_SESSION['id']);?>">
                                        <?php echo( $_SESSION['id']);?></td>
                                    <td><?php echo $Account['message'] ?></td>
                                </tr>
                            </table>
                        </div>



                        <h1 class="Name"> Name</h1>
                        <input id='nametitle' type="" name="" value=""
                            style="width:99.7%; height: 40px; font-size:40px; background-color:white; border:white;">
                        <div class="bsquare">
                        </div>
                    </div>


                    <div class="mid" style="height: 80px; display: flex; padding-top: 25px;">
                        <div class="name">
                            <h1 class="coin">Coin</h1>
                        </div>
                        <div id="CoinSelect">
                            <label for="select"
                                style="display:inline-block; width: 100%; height: 45px; background-color: white;">
                                <b id="SelectedCoin" style="font-size: 25px; float:left">Coin Select</b>
                                <i class="fa-solid fa-angle-down fa-3x"
                                    style="float:right; position: relative; bottom: 18%;"></i>
                            </label>
                            <input type="checkbox" id="select">
                            <div id="SelectMenu">
                                <input type="number" id="SelectNumber" max="999" , min="0"
                                    placeholder="Insert or Select Coin">
                                <ul id="SelectUl" style="overflow-y: scroll;">
                                    <?php 
                      for($i=1; $i<=20; $i++){
                        echo "<li class='Selectli'>".$i."</li>";
                      }
                        ?>
                                </ul>
                            </div>
                            <script>
                            $("#SelectNumber").keyup(function(e) {
                                if ((e.keyCode >= 48 && e.keyCode <= 57) || e.keyCode == 8) {
                                    let text = $("#SelectNumber").val();
                                    if (text.length < 4 && text.length >= 0) {
                                        $("b[id='SelectedCoin']").text(text);
                                    }
                                }

                            });
                            $("#SelectNumber").change(function() {
                                let text = $("#SelectNumber").val();
                                if (text >= 0 && text.length < 3) {
                                    $("b[id='SelectedCoin']").text(text);
                                }
                            });


                            $("#select").click(function() {
                                var chk = $(this).is(":checked");

                                if (chk == true) {
                                    $('#SelectMenu').css('display', 'block');
                                } else {
                                    $('#SelectMenu').css('display', 'none');
                                }

                            });
                            $(".Selectli").click(function() {
                                $("#select").prop('checked', false);
                                $("b[id='SelectedCoin']").text($(this).text());
                                $('#SelectMenu').css('display', 'none');
                            });
                            </script>
                        </div>
                    </div>
                </div>



                <div class="bottom">
                    <h1 class="Contents">Contents</h1>
                    <textarea id="quizcontent" name="Text1"
                        style="width:99.7%; height: 380px; font-size:20px; background-color:white; border:white; resize: none;"></textarea>
                </div>
                <div class="last">
                    <input type="button" class="Details4 btn" id='btnOpen' name="button" value="Create"
                        style="cursor:pointer">

                    <?php
              if(!isset($_SESSION['id'])){ ?>
                    <input type='hidden' id='btnOpen' class='btn' name="button" style="display:none;">
                    <?php }?>




                </div>
            </div>
        </div>





    </div>
    </div>
    </div>
    <?php if(!isset($_SESSION['id'])){ ?>
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
                    <input type="text" style="vertical-align: 0px" name="userid" id="uid" class="id" placeholder="?????????">
                </div>
                <input type="hidden" name="decide_id" id="decide_id">
                <p><span id="decide" style='color:red;font-size: 15px'> ID ?????? ????????? ??????????????????. </span>
                    <button type='button' style='font-size: 13px' class="username_button" id="check_button">??????
                        ??????</button>
                <div class="inp_text">
                    <input type='password' name='pwd' id='pwd' placeholder="????????????" autoComplete="on">
                </div>

                <div class="inp_text">
                    <input type='password' id='Adpwd' placeholder="?????? ????????????" autoComplete="on">
                </div>

                <div class="inp_text">
                    <input type='text' id='loginName' placeholder="??????">
                </div>
                <div class="inp_text">
                    <input type='text' id='loginPhone' placeholder="????????????">
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
    <?php }else{?>
    <div class='modal' id='modal'>
        <div id='content'>
            <legend class="title">Create</legend>
            <button type='button' class="close" id='btnClose'>X</button>
            <label>?????? ??????????????? ???????????????</label>
            <form>
                <div class="inp_text">
                    <input type='password' name='accpw' id='accpw' placeholder="?????? ????????????" autoComplete="on">
                </div>
            </form>
            <button type="submit" id='btnCreate' class="btn_login" style="cursor:pointer">??????</button>
        </div>
    </div>
    <?php } ?>

    <script type=text/javascript src="application\views\js\login.js"></script>
    <script type=text/javascript src="application\views\js\logincheck.js"></script>
    <script type=text/javascript src="application\views\js\join.js"></script>
    <script type=text/javascript src="application\views\js\idcheck.js"></script>
    <script type=text/javascript src="application\views\js\create.js"></script>
    <script type=text/javascript src="application\views\js\block.js"></script>

</body>

</html>