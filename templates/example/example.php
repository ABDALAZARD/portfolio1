<body>
    <div class="container">
        <div class="row templateBody">
            <div class="col s6 profile" id="profile">
                <div class="wrapper">
                    <div class="inner" data-onvisible-trigger="1">
                        <div class="foto">
                            <span class="frame">
                                <img class="foto" loading="lazy" src="<?php echo '../../../' . $profile['profile']; ?>"
                                    alt="Foto" />
                            </span>
                        </div>
                        <h2 id="text05" class="presentation"><?php echo $profile['title']; ?></h2>
                        <!-- <p id="text13" class="subtitle"><?php echo $profile['subtitle']; ?></p> -->

                        <div class="stacks-dropdown">
                            <ul class="stacks">
                                <?php
                                    $stacks = explode(' | ', $profile['subtitle']);
                                    foreach ($stacks as $stack) {
                                        echo "<li style='margin-bottom:10px'><a id='$stack' class='stack1' href='#'>$stack</a></li>";
                                    }
                                ?>
                            </ul>
                            <ul class="frameworks">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s6 professional" id="professional">
                <!-- Conteúdo para ser preenchido -->
                <p class="subtitle">Projects:</p>
                <ul>
                    <?php foreach ($projects as $project) { 
                        $id = str_replace(' ', '_', $project['project_name']);
                        echo "<li style='margin-bottom:10px'><a id='$id' class='stack1' href='#'>".$project['project_name']."</a></li>";
                    }?>
                </ul>
            </div>

            <div class="col s6 professional" id="professional">
                <!-- Conteúdo para ser preenchido -->
                <p class="subtitle">Talks, workshops and articles:</p>
                <ul>
                    <?php foreach ($others as $other) {
                        echo "<li style='margin-bottom:10px'><a id='palestra".$other['id']."' class='stack1' href='#'>".$other['title']."</a></li>";
                    } 
                    ?>
                </ul>
                <!-- <?php foreach ($others as $other) { ?>
                <div id="modal<?php echo $other['id']; ?>" name="modal<?php echo $other['id']; ?>"
                    class="modal modal-fixed-footer">
                    <div class="modal-content">
                        <h4><?php echo $other['title']; ?></h4>
                        <img src="<?php echo '../../../' . $other['banner']; ?>" width="250px" height="450px" />
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col s7">
                                <a href="<?php echo $other['banner_link']; ?>">Link: <?php echo $other['title']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?> -->
            </div>
        </div>
    </div>
</body>