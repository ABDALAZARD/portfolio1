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
                <p id="subtitle">Projects:</p>
                <ul>
                    <?php foreach ($projects as $project) { 
                        $id = str_replace(' ', '_', $project['project_name']);
                        echo "<li style='margin-bottom:10px'><a id='$id' class='stack1' href='#'>".$project['project_name']."</a></li>";
                    }?>
                </ul>
            </div>
        </div>
    </div>
</body>