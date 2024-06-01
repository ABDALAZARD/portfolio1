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
                        <h5 class="title"><?php echo $profile['title']; ?></h5>

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
                        echo "<li style='margin-bottom:10px'><a id='$id' class='stack2' href='".$project['project_link']."' target='_blank'>".$project['project_name']."</a></li>";
                    }?>
                </ul>
            </div>

            <div class="col s6 professional" id="professional">
                <!-- Conteúdo para ser preenchido -->
                <p class="subtitle">Talks, workshops and articles:</p>

                <ul>
                    <?php foreach ($others as $other) { ?>
                    <li style='margin-bottom:10px'>
                        <a id='palestra<?php echo $other['id']; ?>' class='stack2' href='#'>
                            <?php echo $other['title']; ?>
                        </a>
                    </li>

                    <div id="modal<?php echo $other['id']; ?>" class="modal col s3">
                        <div class="modal-content">
                            <button id="close-button" class="close-button">&times;</button>
                            <h4><?php echo $other['title']; ?></h4>
                            <img src="<?php echo '../../../' . $other['banner']; ?>" alt="Stacks" width="400px"
                                height="400px" />
                            <br>
                            <a href="<?php echo $other['banner_link']; ?>" target='_blank'>Página do evento</p>

                        </div>
                        <!-- <p>Conteúdo do modal para o ID <?php echo $other['banner']; ?></p> -->
                        <!-- <p>Conteúdo do modal para o ID <?php echo $other['link']; ?></p> -->
                    </div>
                </ul>
            </div>

            <?php } ?>
            </ul>

        </div>
    </div>
    </div>