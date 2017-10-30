<?php include 'include/header.php' ?>
	<div class="main">
	    <div class="content index">
	        <div class="slider-wrapper">
	            <!--<div class="slider-cover"></div>-->
	            <ul class="bxslider">
	                <li>
	                	<img src="images/slide-01-new.jpg" />
	                	<div>
	                		<h1>일 잘되고 즐거운 공간</h1>
	                		<h2>업무형태에 적합한 가구, 업무를 방해하지 않는<br>동선계획이나 공간구획을 통해 업무에<br>몰입할 수 있는 환경을 조성합니다.</h2>
	                	</div>	
	                </li>
	                <li>
	                	<img src="images/slide-02-new.jpg" />
	                	<div>
	                		<h1>친환경 가구, 건강한 공간</h1>
	                		<h2>인간공학적인 친환경 가구를 제안하여<br>건강한 공간을 만듭니다.</h2>
	                	</div>
	                </li>
	                <li>
	                	<img src="images/slide-03-new.jpg" />
	                	<div>
	                		<h1>가치 창출에 일조하는 공간</h1>
	                		<h2>전문적인 분석 툴을 통해 기업의 특성을 파악하여<br>최적의 사무환경을 제안하고 실현합니다.</h2>
	                	</div>
	                </li>
	                <li>
	                	<img src="images/slide-04-new.jpg" />
	                	<div>
	                		<h1>감각적이고 세련된 공간</h1>
	                		<h2>벽, 바닥, 마감재와 같은 다양한 요소들이<br>함께 어울리는 사무 공간을 완성합니다.</h2>
	                	</div>
	                </li>
	                
	            </ul>
	        </div>
	        <div class="works">
	            <h2>Works</h2>
	            <ul>
	                
	                <?php
	                include_once "include/db_helper.php";
	                include_once "include/helper.php";

	                db_open();
	                $sql = "SELECT * FROM work_ex";
	                $input = array();
	                $result = db_query($sql, $input);
	                $work_ex = $result;
	                db_close();
	                
	                for ($i=0; $i < count($work_ex); $i++) { 
	                    if (empty($work_ex[$i]['logo'])) {
	                        $work_ex[$i]['logo'] = 'images/works-logo-no-image.png';
	                    } elseif ($work_ex[$i]['main'] == 'main') {
	                        $slide_index_order = array_search($work_ex[$i], $work_ex);
	                        //var_dump($slide_index_order);
	                ?>
	                <li>
	                    <div class="img-frame">
	                        <img src="images/<?php echo $work_ex[$i]['logo']?>" />
	                    </div>
	                    <a href="works.php?data-slide-index=<?php echo $slide_index_order?>">
	                        <b><?php echo $work_ex[$i]['name']?></b><br><br>
	                        <span><?php echo $work_ex[$i]['category']?></span>
	                    </a>
	                </li>
	                <?php }} ?>
	            </ul>
	        </div>
	    </div>
	</div>
<?php include 'include/catalog.php' ?>
<?php include 'include/footer.php' ?>