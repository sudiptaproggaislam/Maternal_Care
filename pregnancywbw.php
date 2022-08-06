
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h2 class="display-5"><span style="color: rgb(40, 139, 45)">Pregnancy Week by Week</span></h2>
        </div>
    </div>
</div>

<div id="outerparent">
    <div id="parent">
        <div class="childextrainfo" style="color: white; text-align: center;">
            <h1><span><?php echo $diff+1 ?> Weeks Pregnant</span></h1>
            <h3><span><?php echo $cbaby[$diff] ?></span></h3>
        </div>
        <div class="red">
            <img class="redchild rounded-circle" src=<?php echo $babyimages[$diff] ?> alt="img">
            <div class="childsize"><span><?php echo $babysize[$diff] ?></span></div>
        </div>
        <div class="green rounded-circle"></div>

        <div class="green">
            <div class="greenchild rounded-circle">
                <h1><span><?php echo 39-$diff ?></span></h1>
            </div>
            <div class="childweek"><span>Weeks to go!</span></div>
        </div>
        <img class="bchild rounded-circle" src=<?php echo $babysizeimages[$diff] ?> alt="img">

        <div class="bodysymptom">
            <p class="card-text"><?php echo $cmother[$diff] ?></p>
        </div>
    </div>
</div>