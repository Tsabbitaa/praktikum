<?php
include_once 'atas.php';
?>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Praktikum 02</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Project 1</a></li>
                            <li class="breadcrumb-item active">Praktikum 02</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <?php
                                include_once 'form_belanja.php';
                                ?>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <?php
                                include_once 'form_nilai.php';
                                ?>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                                <?php
                                include_once 'ifelse.php';
                                ?>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
<?php
include_once 'bawah.php';
?>