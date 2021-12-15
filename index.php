<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
require 'languages.php';
/*require 'vendor/autoload.php';
use Stichoza\GoogleTranslate\GoogleTranslate;
$tr = new GoogleTranslate(); 
$tr->setSource('en');
$tr->setTarget('hi');
echo $tr->translate('How are you'); exit;*/

?>
<!DOCTYPE html>
<html>

<head>
    <title>QuickTranslate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?dfgwerdfdfsddsfscxasddgsd">
</head>

<body>
    <div class="top-header"> 
        <div class="container">
            <div class="head-inner">
                <div class="top-logo">
                    <h1><strong>Quick</strong> Translator</h1>
                </div> <div class="menuw">
                    <ul>
                        <li><a href="#"><i class="fas fa-history"></i> Recent History</a></li>
                        <li><a href="#"><i class="fas fa-bookmark"></i> Bookmarks</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tranlator-wrap">

        <div class="container">

            <div class="tranlate-input">
                <div class="dropdown">
                    <button lang-code="en" data-offset="10,20" class="btn btn-secondary dropdown-toggle input-set" type="button" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        English
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                        <?php foreach($languages_list as $k=>$v){ ?>
                        <a onclick="setsource('<?php echo $v['code']; ?>','<?php echo $v['name']; ?>')" class="dropdown-item" href="javascript:;"><?php echo $v['name']; ?></a>
                        <?php } ?>

                    </div>
                </div>
                <div class="chnage-arrow">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <div class="dropdown">
                    <button lang-code="en" class="btn btn-secondary dropdown-toggle output-set" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        English
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                         <?php foreach($languages_list as $k=>$v){ ?>
                        <a onclick="settarget('<?php echo $v['code']; ?>','<?php echo $v['name']; ?>')" class="dropdown-item" href="javascript:;"><?php echo $v['name']; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="tranlated-secs">
                <div class="input-lan">
                    <div class="top-actions">
                        <ul>
                            <li><a href="#"><i class="fas fa-volume-up"></i></a></li>
                            <li><a href="#"><i class="fas fa-microphone"></i></a></li>
                            <li><a href="#"><i class="far fa-keyboard"></i></a></li>
                            <li><a href="#"><i class="fab fa-autoprefixer"></i></a></li>
                        </ul>
                    </div>
                    <textarea name="input-text" class="form-control input-text" placeholder="Tap to enter text"></textarea>
                </div>
                <div class="output-lan">
                    <div class="top-actions">
                        <ul>
                            <li><a href="#"><i class="fas fa-volume-up"></i></a></li>
                            <li><a href="#"><i class="fas fa-microphone"></i></a></li>
                            <li><a href="#"><i class="far fa-keyboard"></i></a></li>
                            <li><a href="#"><i class="fab fa-autoprefixer"></i></a></li>
                            <li> <a href="#"><i class="far fa-clipboard"></i></a> </li>
                        </ul>
                    </div>
                    <textarea class="form-control output-text" placeholder="Tap to enter text"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-suggestion">
        <div class="container">
            <ul>
                <li>
                    <div class="suggest-box">
                        <h2>start out an intractive components</h2>
                        <div class="bottom-action">
                            <div class="ac-wrap"><i class="fas fa-volume-up"> </i>Spanish </div>
                            <div class="ac-wrap"><i class="fas fa-clipboard"></i>Copy</div>
                            <div class="ac-wrap"><i class="fas fa-bookmark"></i>Bookmark</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="suggest-box">
                        <h2>start out an intractive components</h2>
                        <div class="bottom-action">
                            <div class="ac-wrap"><i class="fas fa-volume-up"> </i>Spanish </div>
                            <div class="ac-wrap"><i class="fas fa-clipboard"></i>Copy</div>
                            <div class="ac-wrap"><i class="fas fa-bookmark"></i>Bookmark</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="suggest-box">
                        <h2>start out an intractive components</h2>
                        <div class="bottom-action">
                            <div class="ac-wrap"><i class="fas fa-volume-up"> </i>Spanish </div>
                            <div class="ac-wrap"><i class="fas fa-clipboard"></i>Copy</div>
                            <div class="ac-wrap"><i class="fas fa-bookmark"></i>Bookmark</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="suggest-box">
                        <h2>start out an intractive components</h2>
                        <div class="bottom-action">
                            <div class="ac-wrap"><i class="fas fa-volume-up"> </i>Spanish </div>
                            <div class="ac-wrap"><i class="fas fa-clipboard"></i>Copy</div>
                            <div class="ac-wrap"><i class="fas fa-bookmark"></i>Bookmark</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="suggest-box">
                        <h2>start out an intractive components</h2>
                        <div class="bottom-action">
                            <div class="ac-wrap"><i class="fas fa-volume-up"> </i>Spanish </div>
                            <div class="ac-wrap"><i class="fas fa-clipboard"></i>Copy</div>
                            <div class="ac-wrap"><i class="fas fa-bookmark"></i>Bookmark</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="suggest-box">
                        <h2>start out an intractive components</h2>
                        <div class="bottom-action">
                            <div class="ac-wrap"><i class="fas fa-volume-up"> </i>Spanish </div>
                            <div class="ac-wrap"><i class="fas fa-clipboard"></i>Copy</div>
                            <div class="ac-wrap"><i class="fas fa-bookmark"></i>Bookmark</div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <div class="lan-footer">
        <p>Copyright &copy; All Rights Reserved.</p>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

    $(document).ready(function(){

        $('.input-text').on('keyup',function(){

            var text = $('.input-text').val();
            var source = $('.input-set').attr('lang-code');
            var target = $('.output-set').attr('lang-code');
            $.ajax({
                url: "translate.php", 
                data: {text:text,source:source,target:target},
                type: 'post',
                success: function(result){
                    $('.output-text').val(result);
              }});
        });
    });

    function setsource(c,v){
        $('.input-set').html(v);
        $('.input-set').attr('lang-code',c);
    }

    function settarget(c,v){
        $('.output-set').html(v);
        $('.output-set').attr('lang-code',c);
    }
    </script>
</body>

</html>