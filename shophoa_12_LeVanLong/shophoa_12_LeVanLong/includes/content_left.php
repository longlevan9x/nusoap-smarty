<div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span>
            <h3>Chủ đề hoa</h3>   
            <div class="content"> 
                <ul class="sidebar_list">
                    <?php
					include_once("models/m_chu_de.php");
                    $chude_hoa = new M_chu_de();
                    $chudeHoa = $chude_hoa->Doc_chu_de();
					?>
                    <?php foreach ($chudeHoa as  $cd): ?>
                        <li><a href="hoa_theo_chu_de.php?MaCD=<?php echo $cd->MaCD; ?>"><?php echo $cd->TenCD; ?></a></li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        
    </div>