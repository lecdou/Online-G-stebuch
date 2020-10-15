<?php require_once '../../Template/includes/header2.php' ?>
<?php require_once '../../Template/includes/head.php'?>
<div class="faq">
<link rel="stylesheet" type="text/css" href="style.css">
    <br />
    <br />
    <br />
    <br />

    <div class="" id="accordion">
       <h2><div class="faqHeader">General questions</div></h2>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Is account registration required?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="card-block">
                   Yes! Account registration at <strong>GÄSTE-BUCH</strong> is required even if you just want to read other others' publications.
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen"> Can I see my article after edit it?</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="card-block">
                Yes! You can see all your articles and also those of others by clicking on the user icon where your name appears below. 
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven"> Can I change the title and content of my article? </a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="card-block">
                   Yes! by clicking on the "Update" button. But this is only possible if you are the one who edited it. 
                </div>
            </div>
        </div>

        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> Can I send a message to the editor of an article?</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="card-block">
                it's simple. When you log in, the home page will be displayed. Here you have the e-mail address of each article editor.
                So you can write to the desired person </div>
            </div>
        </div>
      
    </div>

</div>
    <br/><br/><br /><br /><br/><br /><br /><br /><br/><br /><br /><br />
<?php require_once '../../Template/includes/footer.php'?>