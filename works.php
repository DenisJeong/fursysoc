<?php include 'include/header.php' ?>
    <div class="content works clear-fix">
        <div class="content-head">
            <h1>Works</h1>
        </div>
        <div class="content-body">
            <div class="bxslider-wrapper">    
                <ul class="works-bxslider">
                    
                    <?php
                    include_once "include/db_helper.php";
                    include_once "include/helper.php";

                    db_open();
                    $sql = "SELECT * FROM work_ex";
                    $input = array();
                    $result = db_query($sql, $input);
                    $work_ex = $result;

                //    var_dump($work_ex[5]['term']);
                 
                    // 여기 작업해야 함(php를 DB로 변환하는 작업 )
                /*  
                    $id = $work_ex[$i]['id'];
                    $name = $work_ex[$i]['name'];
                    $division = $work_ex[$i]['division'];
                    $subject = $work_ex[$i]['subject'];
                    $term = $work_ex[$i]['term'];
                    $category = $work_ex[$i]['category'];
                    $logo = $work_ex[$i]['logo'];
                    $link = $work_ex[$i]['link'];
                */    
                    for ($i = 0; $i < count($work_ex); $i++) { 
                        if (!$work_ex[$i]['logo']) {
                            $work_ex[$i]['logo'] = 'images/works-logo-no-image.png';
                            // works.php로 바로 접속 했을 때 오류 수정
                            
                            //$work_ex[$i]['logo'] = 1;
                        } 

                        
                    ?>
                    <li>
                        <div class="img-frame">
                            <img src="images/<?php echo $work_ex[$i]['logo']?>" alt="">
                        </div>

                        <table class="work-data">
                            <tr>
                                <th>기업명</th>
                                <td><?php echo $work_ex[$i]['name']?></td>
                            </tr>
                            <tr>
                                <th>기업구분</th>
                                <td><?php echo $work_ex[$i]['division']?></td>
                            </tr>
                            <tr>
                                <th>컨설팅요약</th>
                                <td><?php echo $work_ex[$i]['subject']?></td>
                            </tr>
                            <tr>
                                <th>수행기간</th>
                                <td><?php echo $work_ex[$i]['term']?></td>
                            </tr>
                        </table>
                    </li>
                    <?php } ?>
                </ul>

                <div id="bx-pager" class="work-thumbs">
                    <?php if (empty($_GET['data-slide-index'])){
                        $_GET['data-slide-index'] = 0;
                        } else {
                            //$id_num = $work_ex[$_GET['data-slide-index']]['id'];
                            //$id_num = '';
                            
                            //var_dump($work_ex[$_GET['data-slide-index'] - 1]['id']);
                            //$id_num = $work_ex[$_GET['data-slide-index'] - 2]['id'];
                        } ?>
                    <input type="hidden" name="data-slide-index" value="<?=$_GET['data-slide-index']?>">
                    <?php
                    for ($j=0; $j < count($work_ex); $j++) { 
                        if (!$work_ex[$j]['logo']) {
                            $work_ex[$j]['logo'] = 'images/works-logo-no-image.png';
                        }
                        $slide_index_order = array_search($work_ex[$j], $work_ex);
                    ?>
                    <a data-slide-index="<?php echo "$slide_index_order"?>">
                        <img src="images/<?php echo $work_ex[$j]['logo']?>" title="<?php echo $work_ex[$j]['name']?>">
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

  
<?php include 'include/catalog.php' ?>
<?php include 'include/footer.php' ?>