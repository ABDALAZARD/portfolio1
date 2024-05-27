<body>
    <div class="container">
        <div class="row templateBody">
            <div class="col s6 profile" id="profile">
                <div class="wrapper">
                    <div class="inner" data-onvisible-trigger="1">
                        <div class="contact-info">
                            <div class="foto">
                                <span class="frame">
                                    <img class="foto" loading="lazy"
                                        src="<?php echo '../../../' . $profile['profile']; ?>" alt="Foto" />
                                </span>
                            </div>
                            <ul class="icons">
                                <li>
                                    <a class="contact email" aria-label="email">
                                        <span class="text-contact"><?php echo $social['email']; ?></span>
                                    </a>
                                </li>
                                <li><a class="contact" href="https://linkedin.com/in/<?php echo $social['linkedin']; ?>"
                                        aria-label="LinkedIn"><svg>
                                            <use class="image_contact"
                                                xlink:href="#icon-bf393d6ea48a4e69e1ed58a3563b94a5">
                                            </use>
                                        </svg><span class="text-contact">LinkedIn</span>
                                    </a>
                                </li>
                                <li><a class="contact" href="https://github.com/<?php echo $social['github']; ?>"
                                        aria-label="GitHub"><svg>
                                            <use class="image_contact" id="contact"
                                                xlink:href="#icon-8c4b37645de3c276d895d87df51ba614">
                                            </use>
                                        </svg><span class="text-contact">GitHub</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="stacks-dropdown">
                            <ul class="stacks">
                                <?php
                                    $stacks = explode(' | ', $profile['subtitle']);
                                    foreach ($stacks as $stack) {
                                        echo "<li style='margin-bottom:10px'><a id='$stack' class='stack1' href='#'>$stack</a></li>";
                                    }
                                ?>
                            </ul>
                            <!-- <ul class="frameworks">
                            </ul> -->
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